<?php

namespace App\Http\Controllers\Api;

use App\Group;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use JimmyHowe\Utilities\ApiTrait\ApiTrait;

class MenuController extends Controller
{
    use ApiTrait;

    /**
     * @var Group
     */
    private $group;

    public function __construct(Group $group)
    {
        $this->group = $group;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = $this->group->with(['products'])->get();

        return $this->respondWithSuccess("Menu", [
            'groups' => $menu
        ]);
    }
}
