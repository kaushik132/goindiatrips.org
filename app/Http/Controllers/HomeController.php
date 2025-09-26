<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Video;
use App\Models\ContactUs;
use App\Models\Tour;
use App\Models\TourCategory;
use App\Models\Tourdetails;
use Illuminate\Support\Facades\View;


class HomeController extends Controller
{

     public function __construct()
  {
     $headerTourCategory = TourCategory::first();
     $headerTour = Tour::first();
        View::share('info', $headerTourCategory);
        View::share('info', $headerTour);
  }

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

    public function contactUsPost(Request $request)
    {

        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            // 'phone' => 'required|string|max:20',
            'message' => 'required|string',
            'terms' => 'accepted',
        ],[
            'fname.required' => 'First Name is required',
            'lname.required' => 'Last Name is required',
            'email.required' => 'Email is required',
            // 'phone.required' => 'Phone number is required',
            'message.required' => 'Message is required',
            'terms.accepted' => 'You must accept the terms and conditions',
        ]);


        ContactUs::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            // 'phone' => $request->phone,
            'message' => $request->message,
            'terms' => $request->terms ? 1 : 0,
        ]);




        return back()->with('message', 'Thank you for contacting us! We will get back to you soon.');
    }
}
