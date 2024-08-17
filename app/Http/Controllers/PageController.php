<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
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
        $services = config("data.services");

        return view('pages/services', ['services' => $services]);
    }

    function show($slug)
    {
        $services = config("data.services");
        $service  = collect($services)->firstWhere('slug', $slug);
        return view('pages/services/show', ['service' => $service]);
    }

    function scs()
    {
        return view('pages/services');
    }

    function emergency()
    {
        return view('pages/services');
    }

    function fighting()
    {
        return view('pages/services');
    }


    function security()
    {
        return view('pages/services');
    }

    function control()
    {
        return view('pages/services');
    }

    function guards()
    {
        return view('pages/services');
    }
}
