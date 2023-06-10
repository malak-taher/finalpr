<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class revealed extends Model
{
    protected $fillable=[
        'id',
        'account_id',
        'operation_id'
        
        ];
}
