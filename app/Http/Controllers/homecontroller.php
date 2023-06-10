<?php

namespace App\Http\Controllers;
use App\Models\openaccount;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index() {
        return view('home');
    }

    public function trasfer(Request $request) {
        
            return redirect('/transfer-add');
        
        
    }

    public function userrequest($id) {
        $account = account::find($id);
        $userrequests = userrequest::all();
        $account->id = $request['id'];
        $account->name = $request['name'];
        $userrequest->requests=$request['requests'];

        return redirect('/admin.userrequest');
    
    
}
}
