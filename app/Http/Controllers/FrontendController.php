<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        return view('frontend.pages.home');
    }
    public function destination(){
        return view('frontend.pages.destination');
    }
    public function tour(){
        return view('frontend.pages.tour');
    }
}
