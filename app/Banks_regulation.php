<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banks_regulation extends Model
{
    //
    protected $fillable = [
        'options', 'aprt_no_morg', 'aprt_with_morg','rental_aprt','free_aprt'
    ];
}
