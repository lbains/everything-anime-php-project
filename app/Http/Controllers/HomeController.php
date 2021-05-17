<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }

    public function shounen(){
        return view('shounen');
    }

    public function isekai(){
        return view('isekai');
    }

    public function horror(){
        return view('horror');
    }

    public function psychological(){
        return view('psychological');
    }

    public function manga(){
        return view('manga');
    }

    public function contact(){
        return view('contact');
    }
}
