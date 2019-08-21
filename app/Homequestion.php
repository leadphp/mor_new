<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homequestion extends Model
{
    protected $fillable = [
        'question', 'answer'
    ];
}
