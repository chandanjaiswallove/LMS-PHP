<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageControllers extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
}
