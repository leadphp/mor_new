<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
     protected $fillable = [
        'title', 'tag', 'short_description', 'image'
    ];
}
