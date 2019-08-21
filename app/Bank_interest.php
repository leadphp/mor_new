<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank_interest extends Model
{
    //
    protected $fillable = [
        'bank_name','funding_type','prime_delta','years','prime','const_inter_linked','const_inter_unlinked','var_inter_5year_linked','var_inter_5year_unlinked','euro_inter','dollar_inter','eligibility_inter','discount','discount_status'
    ];
}
