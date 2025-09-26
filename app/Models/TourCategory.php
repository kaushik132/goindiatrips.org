<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourCategory extends Model
{
     protected $primaryKey = 'id';
    protected $table = 'tourcategory';

  
            public function tours(){

        return $this->hasMany(Tour::class,'tour_id');
    }
}
