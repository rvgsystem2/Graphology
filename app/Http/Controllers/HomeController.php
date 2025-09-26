<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function about(){
        return view('frontend.about');
    }

    public function service(){
        return view('frontend.service');
    }

    public function graphology(){
        return view('frontend.graphology');
    }

    public function handwriting(){
        return view('frontend.handwriting');
    }

    public function wristwatch(){
        return view('frontend.wristwatch');
    }

    public function consultation(){
        return view('frontend.consultation');
    }

    public function grapho_remedy(){
        return view('frontend.grapho_remedy');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function privacy(){
        return view('frontend.privacy');
    }

    public function shipping(){
        return view('frontend.shipping');
    }

    public function return(){
        return view('frontend.return');
    }

    public function terms(){
        return view('frontend.terms');
    }

    public function blog(){
        return view('frontend.blog');
    }

    public function popup(){
        return view('frontend.pop-up');
    }

    public function appointment(){
        return view('frontend.appointment');
    }

    public function thankyou(){
        return view('frontend.thankyou');
    }
}
