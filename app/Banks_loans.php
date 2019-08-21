<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banks_loans extends Model
{
    //
     protected $fillable = [
        'loan_status', 'loan_type', 'loan_name_eng','loan_name_heb'
    ];

}
