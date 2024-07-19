<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function sellerView()
    {
        $sellers = User::where('role', 'Seller')->get();
        return view('admin.seller', compact('sellers'));
    }

    public function buyerView()
    {
        return view('admin.buyer');
    }
}
