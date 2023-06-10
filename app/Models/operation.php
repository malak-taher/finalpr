<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class operation extends Model
{
    protected $fillable=[
        'id',
        'openaccount_id',
        'openaccount_name',
        'operetiontype_id',
        'openaccount_balans'
    ];

    public function operation(){
        return $this->belongsTO(operation::class,'operation_id' ,'id');
    }

    public function openaccount(){
        return $this->belongsTO(openaccount::class,'openaccount_id' ,'id','openaccount_name' ,'name','openaccount_balans' ,'balans');
    }
}
