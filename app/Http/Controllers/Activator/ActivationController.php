<?php namespace App\Http\Controllers\Activator;

use App\Application;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Carbon\Carbon;
use Illuminate\Http\Request;
use JimmyHowe\Utilities\ApiTrait\ApiTrait;

class ActivationController extends Controller
{
    use ApiTrait;

    public function anyActivate( Request $request )
    {
        $rules = [
            'app' => 'required'
        ];

        if ( $this->validateAgainstRules($request, $rules)->fails() )
        {
            return $this->respondValidationFailed();
        }

        $app = Application::create([
            'title'      => $request->has('title') ? $request->title : $request->app,
            'key'        => bcrypt($request->app),
            'expires_at' => Carbon::now()->addWeek()->endOfDay()
        ]);

        return $this->respondWithSuccess("Your Key", [
            'key'     => $app->key,
            'expires' => $app->expires_at->toDateTimeString()
        ]);
    }
}
