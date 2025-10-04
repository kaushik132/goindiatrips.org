<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\TourCategory;

class SitemapController extends Controller
{
      public function index(){
           $tour = Tour::all();
           $tourCategory = TourCategory::all();

        return response()->view('sitemap',[
            'tour'=> $tour,
        'tourCategory'=>$tourCategory
        ])->header('Content-Type','text/xml');
    }
}
