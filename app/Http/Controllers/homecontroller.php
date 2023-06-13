<?php

namespace App\Http\Controllers;
use App\Models\openaccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homecontroller extends Controller
{
    public function index()
    {
        $account_id = session()->get('info')->id;
        $lastNotification = DB::table('notifications')->where('account_id', $account_id)->latest()->first();

        if ($lastNotification) {
            $lastNotificationContent = $lastNotification->content;
        } else {
            $lastNotificationContent = 'لا يوجد إشعارات';
        }

        return view('home', compact('lastNotificationContent'));
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
