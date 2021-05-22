<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Prak1Controller extends Controller
{
    public function home(){
        return view("home0133");
    }

    public function artikel(){
        return view("artikel0133");
    }

    public function contactus(){
        return view("kontakkita0133");
    }
}
