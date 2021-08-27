<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function home()
    {
        return view('HomePage');
    }

    public function About()
    {
        return view('AboutPage');
    }

    public function Contact()
    {
        return view('ContactPage');
    }
    public function myName($firstName, $middleName, $lastName)
    {
        return "First Name: " . $firstName . "<br> Middle Name: " . $middleName . "<br> Last Name: " . $lastName;
    }
}
