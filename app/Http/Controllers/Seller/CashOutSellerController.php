<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CashOutSellerController extends Controller
{
    public function index()
    {
        return view('seller.cash-out');
    }
}
