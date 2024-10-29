<?php

namespace App\Http\Controllers;

use App\Models\TextHomes;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        return view('home');
    }

        public function wellcome()
        {
            $text = TextHomes::all();
            return view('welcome', compact('text'));
        }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
}
