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
        $services = config("data.services");

        return view('pages/contact', ['services' => $services]);
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

    public function contactUs(Request $request)
    {

        $services = config("data.services");

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
            'phone' => 'required|string',
            'service' => 'string',
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
            'service' => $request->service,
            'phone' => $request->phone,
        ];

        $user->notify(new ContactUs($data));



        Session::flash('alert-class', 'alert-success');
        Session::flash('message', 'Message received, Thank you!!');
        return redirect()->back()->with('success');
    }
}
