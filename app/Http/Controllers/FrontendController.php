<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home() {
        return view('frontend.home');
    }
    public function about() {
        return view('frontend.about');
    }
    public function embroidery() {
        return view('frontend.embroidery');
    }
    public function vector() {
        return view('frontend.vector');
    }
    public function portfolio() {
        return view('frontend.portfolio');
    }
    public function contact() {
        return view('frontend.contact');
    }
    public function order() {
        return view('frontend.order');
    }
    public function inquiry() {
        return view('frontend.inquiry');
    }
}

