<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    protected $fillable=[
           'name',
            'birthday',
            'phone',
            'national_id',
            'passport_id',
            'nationality',
            'country',
            'city',
            'social_condition',
            'educational_level',
            'status_of_account',
            'balans'
            
    ];
    
}
