<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $table = 'contact';
    protected $fillable = [
        'fname', 'lname', 'email', 'message', 'terms'
    ];
}
