<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //


    public function about()
    {
        return view('pages/about');
    }
    public function contact()
    {
        return view('pages/contact');
    }
    public function services()
    {
        return view('pages/services');
    }
    public function focus()
    {
        return view('pages/focus');
    }
}
