<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\uerrequest;
use App\models\account;

class userrequestcontroller extends Controller
{
    public function index() {
        $userrequests = userrequest::all();
        return view('admin.userrequest', compact('userrequests'));
    }

    public function add() {
         $accounts = account::all();
       
        return view('admin.userrequest', compact('accounts'));
    }

    public function store(Request $request) {
        $request->validate([
            'id' => 'required',
            'account_id' => 'required',
            'requests' => 'required',
            'choose' => 'required'
            
        ]);
        $userrequest = new userrequest;
        $userrequest->id = $request['id'];
        $userrequest->account_id = $request['account_id'];
        $userrequest->requests = $request['requests'];
        $userrequest->choose = $request['choose'];
        $user->save();

        return redirect('/userrequest');
    }

    
   

    public function delete(Request $request) {
        return view('/admin.userrequest');
    }



}
