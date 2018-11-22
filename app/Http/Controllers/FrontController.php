<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('controllers.front.index');
    }

    public function aboutUs()
    {
        return view('controllers.front.about_us');
    }

    public function services()
    {
        return view('controllers.front.services');
    }

    public function ourWorks()
    {
        return view('controllers.front.our_works');
    }

    public function contacts()
    {
        return view('controllers.front.contacts');
    }
}
