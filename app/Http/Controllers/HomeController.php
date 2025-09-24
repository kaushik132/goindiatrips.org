<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function aboutUs()
    {
        return view('about-us');
    }
    public function gallery()
    {
        return view('gallery');
    }
    public function tourandpackage()
    {
        return view('tour-and-package');
    }

    public function tourdetails()
    {
        return view('tour-details');
    }
    public function contactUs()
    {
        return view('contact-us');
    }
}
