<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function about()
    {
        $Data = array();

        return view('About', ['Datakey' => $Data]);
    }
}
