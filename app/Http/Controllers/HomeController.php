<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function myself()
    {
        return "I love programing";
    }
    function yourself()
    {
        return "you love programing";
    }
}
