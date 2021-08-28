<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function about()
    {
        $NewHeadLine = "<h1>Bangladesh won by 100 runs";
        return view('About', ['NewHeadLinekey' => $NewHeadLine]);
    }
}
