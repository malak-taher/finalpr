<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transfer;
use App\Models\account;

class TransferController extends Controller
{
    public function index() {
        $transfers = transfer::all();
        return view('transfer', compact('transfers'));
    }

    public function add() {
        return view('transfer-add');
    }

    public function store(Request $request) {
        $request->validate([
            'reciple' => 'required',
            'value' => 'required',
        ]);

        $exist = account::where('id', $request['reciple'])->where('status_of_account', 2)->get()->first();
        if($exist) {
            $balance = account::where('id', session()->get('info')->id)->get()->first();
            if($balance->balans < $request['value']) {
                return 'low balance';
            }
            else {
                $balance->balans = $balance->balans-$request['value'];
                $balance->save();

                $exist->balans = $exist->balans+$request['value'];
                $exist->save();
            }
        }
        else {
            return 'account doesnt exist';
        }

        $transfer = new transfer;
        $transfer->sender = session()->get('info')->id;
        $transfer->reciple = $request['reciple'];
        $transfer->value = $request['value'];
        $transfer->operation_id = 2;
        $transfer->save();


        return 'تم التحويل ' ;
        return redirect('/transfers');
    }
}
