<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function sellerProfileView()
    {
        return view('seller.profile');
    }
}
