<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageContoller extends Controller
{
    function index()
    {
        return view('pages/home');
    }
    function about()
    {
        return  view('pages/about');
    }
    function contact()
    {
        return view('pages/contact');
    }
    function services()
    {
        return view('pages/services');
    }
}
