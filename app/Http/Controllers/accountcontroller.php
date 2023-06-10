<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\account;
use App\models\statusofaccount;
use Illuminate\Support\Facades\Auth;

class accountcontroller extends Controller
{
    public function index() {
        $accounts = account::all();
        $statusofaccounts=statusofaccount::all();
        return view('user.account', compact('accounts','statusofaccounts'));
    }

    public function add() {
        return view('user.account-add');
    }

    public function store(Request $request) {
        // $request->validate([
        //     'name' => 'required',
        //     'birthday' => 'required',
        //     'phone' => 'required',
        //     'national_id' => 'required',
        //     'passport_id' => 'required',
        //     'nationality' => 'required',
        //     'country' => 'required',
        //     'city' => 'required',
        //     'social_condition' => 'required',
        //     'educational_level' => 'required',
        // ]);

        $account = new account;
        $account->name = $request['name'];
        $account->birthday = $request['birthday'];
        $account->phone = $request['phone'];
        $account->national_id = $request['national_id'];
        $account->passport_id = $request['passport_id'];
        $account->nationality = $request['nationality'];
        $account->country = $request['country'];
        $account->city = $request['city'];
        $account->social_condition = $request['social_condition'];
        $account->educational_level = $request['educational_level'];
        $account->status_of_account = 1;
        $account->balans = 0;
        $account->save();

        return view('print')->with('account', $account);
    }

    public function reportaccount(){
     $accounts= account::all();
     return view('reportaccount');
     
    }

    public function print(Request $request) {
        return $request;
    }

    public function edit($id) {
        $account = account::find($id);
        $accounts = account::all();
        $statusofaccounts=statusofaccount::all();
        return view('user.account-edit', compact('account', 'statusofaccounts'));
    }

    public function update($id, Request $request) {
        $request->validate([
                'name' => 'required',
                 'birthday' => 'required',
                 'phone' => 'required',
                 'national_id' => 'required',
               'passport_id' => 'required',
                 'nationality' => 'required',
                 'country' => 'required',
                 'city' => 'required',
                 'social_condition' => 'required',
                 'educational_level' => 'required',
             ]);

             $account = account::find($id);
            $account->name = $request['name'];
            $account->birthday = $request['birthday'];
            $account->phone = $request['phone'];
            $account->national_id = $request['national_id'];
            $account->passport_id = $request['passport_id'];
            $account->nationality = $request['nationality'];
            $account->country = $request['country'];
            $account->city = $request['city'];
            $account->social_condition = $request['social_condition'];
            $account->educational_level = $request['educational_level'];
            $account->status_of_account = $request['statusofaccount_id'];
            $account->password = $id;
            $account->balans = 0;
            
            $account->save();
            return redirect('account');
            
       }

    public function delete($id) {

    }
}



