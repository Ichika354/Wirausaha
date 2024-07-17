<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function sellerOrderView() {
        return view('seller.order');
    }

    public function adminOrderView() {
        return view('admin.order');
    }
}
