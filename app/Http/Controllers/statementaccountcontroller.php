<?php

namespace App\Http\Controllers;
use App\Models\statementaccount;
use Illuminate\Http\Request;
use App\Models\transfer;
use App\Models\account;
class statementaccountcontroller extends Controller
{
    public function index() {
        return view('statementaccount');
    }

    public function add(Request $request) {
        return view('statementaccount');
        
        }
    }

