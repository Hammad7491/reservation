<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{



   public function index()
    {
        return view('index');
    }

    public function aboutus()
    {
        return view('aboutus');
    }
 
    public function privacy()
    {
        return view('privacy');
    }

    public function terms()
    {
        return view('terms');
    }



}
