<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userrequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'account_id',
        'requests',
    ];
}
