<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\user;
use Illuminate\Support\Facades\Auth;

class usercontroller extends Controller
{
    public function index() {
        $users = user::all();
        return view('user', compact('users'));
    }

   
    
    public function add() {
        return view('register');
    }

    public function store(Request $request) {
        $request->validate([
            'user_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'gender_id' => 'required'
        ]);

        $user = new User;
        $user->name = $request['user_name'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->phone = $request['phone'];
        $user->address = $request['address'];
        $user->gender_id = $request['gender_id'];
        $user->save();

        return redirect('/entering');
    }

    public function edit($id) {

    }

    public function update($id, Request $request) {

    }

    public function delete($id) {

    }


    public function login() {
        return view('login');
    }

    public function check(Request $request) {
        $cred = $request->only('name', 'password');
        if(Auth::attempt($cred)) {
            return redirect('/login');
        }
        else {
            return redirect('/entering');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
