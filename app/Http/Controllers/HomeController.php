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
    public function tourandpackage($slug = null)
    {
        //  $homepage = Title::select('seo_title_tour','seo_des_tour','seo_key_tour','seo_image_tour')->first();
        if ($slug != null) {
            $tourCategory = TourCategory::where('slug', $slug)->first();
            $tourdata = Tour::latest()->with('tourCategorys')->where('tour_id', $tourCategory->id)->paginate(6);
                       $seo_data['seo_description'] =$tourCategory->seo_description;
            //    $seo_data['keywords'] =$tourCategory->seo_keyword;
            //    $seo_data['seo_title'] =$tourCategory->seo_title;
            //    $seo_data['seo_image'] =$tourCategory->thumnail_image;
            //  $canocial ='https://www.namastebharat.com/tour-categories/'.$slug;

        } else {

            $tourdata = Tour::latest()->with('tourCategorys')->paginate(6);
            //                $seo_data['seo_title'] =$homepage->seo_title_tour;
            //      $seo_data['seo_description'] =$homepage->seo_des_tour;
            //    $seo_data['keywords'] =$homepage->seo_key_tour;
            //    $seo_data['seo_image'] =$homepage->seo_image_tour;
            //    $canocial ='https://www.namastebharat.com/tour-categories';
        }
        $alltourcategory = TourCategory::where('status', 1)->latest()->get();
        return view('tour-and-package' ,compact('tourdata','alltourcategory'));
    }

    public function tourdetails($slug = null)
    {
            // $alltour = Tour::inRandomOrder()->with('tourCategorys')->get();
        $tourData = Tour::with('tourCategorys')->where('slug', $slug)->first();
        // $seo_data['seo_title'] = $tourData->seo_title;
        // $seo_data['seo_description'] = $tourData->seo_description;
        // $seo_data['keywords'] = $tourData->seo_keyword;
        // $seo_data['seo_image'] = $tourData->thumnail_image;
        // $canocial = 'https://www.namastebharat.com/tour-details/' . $tourData->slug;


        $destinationsdetails = Tourdetails::orderBy('order_num', 'asc')->where('package_id', $tourData->id)->get();
        return view('tour-details', compact('tourData','destinationsdetails'));
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
         'email' => [
    'required',
    'email',
    'max:255',
    'regex:/^[a-zA-Z0-9._%+-]+@gmail\.com$/i'
],
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
