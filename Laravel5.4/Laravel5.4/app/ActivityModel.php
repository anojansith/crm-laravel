<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityModel extends Model
{
  protected $table = 'activities';
    
    protected $fillable = [
        'company_name',
        'date',
        'type_of_activity',
        'outcome',
        'sales_person_name'      
    ];
}
