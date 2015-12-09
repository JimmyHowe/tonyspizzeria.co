<?php

namespace App\Http\Controllers\Api;

use App\Application;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use JimmyHowe\Utilities\ApiTrait\ApiTrait;

class ApplicationsController extends Controller
{
    use ApiTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = (new Requests\CreateApplicationRequest())->rules();

        if( $this->validateAgainstRules($request, $rules)->fails() )
        {
            return $this->respondValidationFailed("Please provide both title and key fields.");
        }

        Application::create([
            'title' => $request->title,
            'key' => md5($request->title . $request->key . $request->getClientIp())
        ]);

        return $this->respond([
            'data' => [
                'key' => md5($request->title . $request->key . $request->getClientIp())
            ]
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
