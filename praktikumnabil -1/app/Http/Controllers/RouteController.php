<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    //
    public function index()
    {
        return "from Controller";

    }

    public function profile($profileId)
    {
        return "Profile form controller, profile Id: " . $profileId;
    }




}
