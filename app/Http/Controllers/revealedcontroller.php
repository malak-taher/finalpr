<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\revealed;
class revealedcontroller extends Controller
{
    public function index() {
       
        return view('revealed');
    }

}
