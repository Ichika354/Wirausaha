<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function allProductView(){
        return view('product');
    }

    public function sellerProductView(){
        return view('seller.product');
    }

    public function adminProductView(){
        return view('admin.product');
    }
}
