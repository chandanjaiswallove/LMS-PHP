<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageControllers extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function contact() 
    {
        return view('pages.contactus');
    }

    public function about()
    {
        return view('pages.aboutus');
    }

}
