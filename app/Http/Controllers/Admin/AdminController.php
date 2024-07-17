<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function sellerView(){
        return view('admin.seller');
    }

    public function buyerView(){
        return view('admin.buyer');
    }
}
