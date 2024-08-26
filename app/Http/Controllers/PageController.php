<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    public function index()
    {
        return view('pages/home');
    }
    public function about()
    {
        return  view('pages/about');
    }
    public function contact()
    {
        return view('pages/contact');
    }
    public function services()
    {
        $services = config("data.services");

        return view('pages/services', ['services' => $services]);
    }

    public function show($slug)
    {
        $services = config("data.services");
        $service  = collect($services)->firstWhere('slug', $slug);
        return view('pages/services/show', ['service' => $service]);
    }

    public function scs()
    {
        return view('pages/services');
    }

    public function emergency()
    {
        return view('pages/services');
    }

    public function fighting()
    {
        return view('pages/services');
    }


    public function security()
    {
        return view('pages/services');
    }

    public function control()
    {
        return view('pages/services');
    }

    public function guards()
    {
        return view('pages/services');
    }

    public function contactUs(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);


        $user = (new User)->forceFill([
            'name'
            => $request->name,
            'email' => config('app.email'),
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        $user->notify(new ContactUs($data));

        Session::flash('alert-class', 'alert-success');
        Session::flash('message', 'Message received, Thank you!!');
        return redirect()->back()->with('success');
    }
}
