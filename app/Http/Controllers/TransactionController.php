<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function sellerTransactionView(){
        return view('seller.transaction');
    }

    public function adminTransactionView(){
        return view('admin.transaction');
    }
}
