<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home(){
        return view('pages.home');
    }
    function home(){
        return view('pages.about');
    }
    function home(){
        return view('pages.contact');
    }
    function home(){
        return view('pages.thankyou');
    }
}


