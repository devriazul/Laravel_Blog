<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function about()
    {
        $Data = array("Bangladesh", "India", "Sri Lanka", "Bhutan");

        $LoginStatus = false;

        return view('About', ['Datakey' => $Data, 'LoginStatusKey' => $LoginStatus]);
    }
}
