<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transfer extends Model
{
    protected $fillable=[
        'sender',
        'reciple',
        'value',
        'operation_id'
    ];
    public function operationtype(){
        return $this->belongsTO(operationtype::class,'operation_id' ,'id');
    }
}
