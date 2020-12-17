<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function Gallery(){
        return view('gallery');
    }

    public function Contact(){
        return view('contactus');
    }

    public function Resort(){
        return view('resort');
    }




}
