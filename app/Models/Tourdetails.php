<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tourdetails extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'tour_details_insert';
     protected $fillable = ['order_num','name','description','time','package_id'];
               public function packagedata()
    {
        return $this->belongsTo(Tour::class,'package_id','id');
    }
}
