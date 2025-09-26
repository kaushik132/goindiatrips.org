<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
     protected $primaryKey = 'id';
    protected $table = 'tour';

     protected $casts = [

        'itinerarys' =>'array',
        'gallery' =>'array',
        // 'attractions' =>'json',

    ];

     public function tourCategorys(){

        return $this->belongsTo(TourCategory::class,'tour_id');
    }

       public function packagedetailsinsert()
    {
        return $this->hasMany(Tourdetails::class,'package_id','id');
    }
}
