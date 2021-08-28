<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function about()
    {
        $Data = array("Bangladesh", "India", "Canada", "America");

        return view('About', ['Datakey' => $Data]);
    }
}
