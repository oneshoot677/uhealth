<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.welcome');
    }
    public function about(){
        return view('frontend.about');
    }
    public function contact(){
        return view('frontend.contact');
    }
    
    public function doctors(){
        return view('frontend.doctors');
    }
    public function news(){
        return view('frontend.news');
    }
}
