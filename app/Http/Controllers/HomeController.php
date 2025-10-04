<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Video;
use App\Models\ContactUs;
use App\Models\Tour;
use App\Models\TourCategory;
use App\Models\Tourdetails;
use App\Models\Testimonials;
use \App\Models\Title;
use Illuminate\Support\Facades\View;


class HomeController extends Controller
{

    public function __construct()
    {
        $headerTourCategory = TourCategory::all();
        $headerTour = Tour::all();
        View::share('headerTourCategory', $headerTourCategory);
        View::share('headerTour', $headerTour);
    }

    public function index()
    {
        $homepage = Title::select('seo_title_home', 'seo_des_home', 'seo_key_home', 'seo_image_home')->first();
        $seo_data['seo_title'] = $homepage->seo_title_home;
        $seo_data['seo_description'] = $homepage->seo_des_home;
        $seo_data['keywords'] = $homepage->seo_key_home;
        $seo_data['seo_image'] = $homepage->seo_image_home;
        $canocial = 'https://www.goindiatrips.org/';
        $alltestimonials = Testimonials::all();
        $alltour = Tour::inRandomOrder()->with('tourCategorys')->take(12)->get();
        return view('index', compact('alltestimonials', 'alltour', 'seo_data', 'canocial'));
    }
    public function aboutUs()
    {
         $homepage = Title::select('seo_title_about', 'seo_des_about', 'seo_key_about', 'seo_image_about')->first();
        $seo_data['seo_title'] = $homepage->seo_title_about;
        $seo_data['seo_description'] = $homepage->seo_des_about;
        $seo_data['keywords'] = $homepage->seo_key_about;
        $seo_data['seo_image'] = $homepage->seo_image_about;
        $canocial = 'https://www.goindiatrips.org/about-us';
        return view('about-us',compact('seo_data', 'canocial'));
    }
    public function gallery()
    {
            $homepage = Title::select('seo_title_gallery', 'seo_des_gallery', 'seo_key_gallery', 'seo_image_gallery')->first();
        $seo_data['seo_title'] = $homepage->seo_title_gallery;
        $seo_data['seo_description'] = $homepage->seo_des_gallery;
        $seo_data['keywords'] = $homepage->seo_key_gallery;
        $seo_data['seo_image'] = $homepage->seo_image_gallery;
        $canocial = 'https://www.goindiatrips.org/gallery';
        $gallery = Gallery::all();
        $video = Video::all();
        return view('gallery', compact('gallery', 'video', 'seo_data', 'canocial'));
    }
    public function tourandpackage($slug = null)
    {
        $homepage = Title::select('seo_title_package', 'seo_des_package', 'seo_key_package', 'seo_image_package')->first();
        if ($slug != null) {
            $tourCategory = TourCategory::where('slug', $slug)->first();
            $tourdata = Tour::latest()->with('tourCategorys')->where('tour_id', $tourCategory->id)->paginate(6);
            $seo_data['seo_description'] = $tourCategory->seo_description;
            $seo_data['keywords'] = $tourCategory->seo_keyword;
            $seo_data['seo_title'] = $tourCategory->seo_title;
            $seo_data['seo_image'] = $tourCategory->thumnail_image;
            $canocial = 'https://www.goindiatrips.org/tour-and-package/' . $slug;
        } else {

            $tourdata = Tour::latest()->with('tourCategorys')->paginate(6);
            $seo_data['seo_title'] = $homepage->seo_title_package;
            $seo_data['seo_description'] = $homepage->seo_des_package;
            $seo_data['keywords'] = $homepage->seo_key_package;
            $seo_data['seo_image'] = $homepage->seo_image_package;
            $canocial = 'https://www.goindiatrips.org/tour-and-package';
        }
        $alltourcategory = TourCategory::where('status', 1)->latest()->get();
        return view('tour-and-package', compact('tourdata', 'alltourcategory', 'seo_data', 'canocial'));
    }

    public function tourdetails($slug = null)
    {
        $alltour = Tour::inRandomOrder()->with('tourCategorys')->get();
        $tourData = Tour::with('tourCategorys')->where('slug', $slug)->first();
        $seo_data['seo_title'] = $tourData->seo_title;
        $seo_data['seo_description'] = $tourData->seo_description;
        $seo_data['keywords'] = $tourData->seo_keyword;
        $seo_data['seo_image'] = $tourData->thumnail_image;
        $canocial = 'https://www.namastebharat.com/tour-details/' . $tourData->slug;


        $destinationsdetails = Tourdetails::orderBy('order_num', 'asc')->where('package_id', $tourData->id)->get();
        return view('tour-details', compact('tourData', 'destinationsdetails', 'alltour', 'seo_data', 'canocial'));
    }
    public function contactUs()
    {
            $homepage = Title::select('seo_title_contact', 'seo_des_contact', 'seo_key_contact', 'seo_image_contact')->first();
        $seo_data['seo_title'] = $homepage->seo_title_contact;
        $seo_data['seo_description'] = $homepage->seo_des_contact;
        $seo_data['keywords'] = $homepage->seo_key_contact;
        $seo_data['seo_image'] = $homepage->seo_image_contact;
        $canocial = 'https://www.goindiatrips.org/contact-us';
        return view('contact-us',compact('seo_data', 'canocial'));
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
        ], [
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
