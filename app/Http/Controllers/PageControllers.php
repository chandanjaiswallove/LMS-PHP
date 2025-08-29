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

    public function instructors()
    {
        return view('pages.instructor');
    }

    public function gallery()
    {
        return view('pages.gallery');
    }

    public function blog() 
    {
        return view('pages.blog');
    }

    public function allcourse()
    {
        return view('pages.allcourse');
    }

    public function log()
    {
        return view('pages.joinNow');
    }

        public function sign()
    {
        return view('pages.sign');
    }

}
