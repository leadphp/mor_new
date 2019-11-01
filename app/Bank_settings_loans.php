<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank_settings_loans extends Model
{
    //
    protected $fillable = [
        'bank_name','loan_fee','loan_interest','loan_time','return'
    ];
}
