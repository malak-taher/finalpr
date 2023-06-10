<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\checkbook;


class checkbookcontroller extends Controller
{
    public function index() {
        $checkbooks = checkbook::all();
        return view('checkbooks', compact('checkbooks'));
    }

    public function add() {
        return view('checkbook-add');
    }

    public function store(Request $request) {
        $request->validate([
            'request' => 'required',
            
        ]);
        $checkbook = new checkbook;
        $checkbook->request = $request['request'];
       
        $checkbook->save();
        return redirect('/checkbook');
    }
}
