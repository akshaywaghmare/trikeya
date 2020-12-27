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

    public function Dweej(){
        return view('services/dweej');
    }

    public function Yahvi(){
        return view('services/yahvi');
    }

    public function  campingintheclouds(){
        return view('services/camping-in-the-clouds');
    }

    public function  dayinthewoods(){
        return view('services/day-in-the-woods');
    }


   



}
