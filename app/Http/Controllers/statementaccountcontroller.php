<?php

namespace App\Http\Controllers;
use App\Models\statementaccount;
use Illuminate\Http\Request;
use App\Models\transfer;
use App\Models\account;
use Illuminate\Support\Facades\DB;

class statementaccountcontroller extends Controller
{
    public function index() {
        return view('statementaccount');
    }

    public function add(Request $request) {

        return view('statementaccount');

        }
        public function searchRecords(Request $request)
{


    // تأكد من وجود التواريخ في الطلب
    $type = $request->input('type');
    $id = $request->input('id');
    $startDate = $request->input('start_date');
    $endDate = $request->input('end_date');

    if (!$startDate || !$endDate) {
        return redirect()->back()->withErrors(['message' => 'يجب تحديد تاريخ البداية والنهاية']);
    }

    // استرداد السجلات
    if ($type == 'discount' ) {
        $id=2;
        $records = DB::table('transfers')
        ->where('sender', session()->get('info')->id)
        ->where('operation_id',$id)
        ->whereBetween('created_at', [$startDate, $endDate])
        ->get();
    } elseif ($type == 'deposit') {
        $id=1;
        $records = DB::table('transfers')
        ->where('sender', session()->get('info')->id)
        ->where('operation_id',$id)
        ->whereBetween('created_at', [$startDate, $endDate])
        ->get();
        // إجراء الإيداع في الكل
    } elseif ($type == 'all') {
        $records = DB::table('transfers')
        ->where('sender', session()->get('info')->id)
        ->whereBetween('created_at', [$startDate, $endDate])
        ->get();
    }



    // إرسال السجلات إلى صفحة العرض

    return view('report', [
        'records' => $records,
        'startDate' => $startDate, // إضافة المتغير $start_date هنا
        'endDate' => $endDate,
    ]);

}
    }

