<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\account;
class enteringcontroller extends Controller
{
    public function index() {
        return view('entering');
    }

    public function login(Request $request) {

        $account = account::where('id', $request['user_name'])->where('password', $request['password'])->where('status_of_account', 2)->get()->first();
        if($account) {

            session()->put('info', $account);
            return redirect('/home');
        }
        else {
            return redirect('/entering')->with('failed', 'خطأ في رقم الحساب');
        }
    }
}
