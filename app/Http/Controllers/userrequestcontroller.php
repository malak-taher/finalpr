<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\account;
use App\Models\Notification;
use App\Models\userrequest;

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

    public function store(Request $request)
{

    // التحقق من الصحة وحفظ الطلب في قاعدة البيانات

    $userRequest = new userrequest();

    $userRequest->account_id =session()->get('info')->id;
    $userRequest->requests ="طلب دفتر صكوك";
    $userRequest->save();

    return redirect('/userrequests')->with(['success' => 'تم إرسال الطلب بنجاح.']);
}




    public function destroy($id) {
        $userrequest = UserRequest::findOrFail($id);
    $userrequest->delete();

    return redirect('/userrequests')->with(['success' => 'تم إرسال الطلب بنجاح.']);
    }

    public function acceptance($id)
{
    $userrequest = UserRequest::findOrFail($id);
    $accoutnid = $userrequest->account_id;


    $notification = new Notification([
        'content' => 'تم قبول طلب اصدار دفتر صكوك',
        'account_id' => $accoutnid
    ]);
    $notification->save();
    return redirect('/userrequests')->with(['success' => 'تم إرسال الطلب بنجاح.']);
}


}
