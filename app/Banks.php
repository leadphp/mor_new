<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banks extends Model
{
    //
     protected $fillable = [
        'bank_code', 'bank_name_eng', 'bank_name_heb'
    ];
}
