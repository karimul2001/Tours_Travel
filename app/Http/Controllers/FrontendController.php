<?php

namespace App\Http\Controllers;

use App\Models\TourPackage;
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
       $datas = TourPackage::all();
        return view('frontend.pages.tour', compact('datas'));
    }
    public function contact(){
        return view('frontend.pages.contact');
    }
    public function resort(){
        return view('frontend.pages.resort');
    }
}
