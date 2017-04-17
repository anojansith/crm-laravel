<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    protected $table = 'customer';

    protected $fillable = [
        'company_name',
        'address',
        'business_registration_number',
        'website'
    ];

    

}
