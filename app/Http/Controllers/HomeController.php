<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Video;

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
        $gallery = Gallery::all();
        $video = Video::all();
        return view('gallery' ,compact('gallery','video'));
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
