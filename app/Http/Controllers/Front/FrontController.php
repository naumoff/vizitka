<?php

namespace App\Http\Controllers\Front;

use App;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function __construct(Request $request)
    {
        $locale = $request->route('locale');
        App::setLocale($locale);
    }

    public function index($locale)
    {
        return view('controllers.front.index');
    }

    public function aboutUs($locale)
    {
        return view('controllers.front.about_us');
    }

    public function services($locale)
    {
        return view('controllers.front.services');
    }

    public function ourWorks($locale)
    {
        return view('controllers.front.our_works');
    }

    public function contacts($locale)
    {
        return view('controllers.front.contacts');
    }
}
