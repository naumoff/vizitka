<?php

namespace App\Http\Controllers\Front;

use App;
use App\Http\Controllers\Controller;
use App\Services\Locale\LocaleSetterInterface;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * FrontController constructor.
     * @param LocaleSetterInterface $localeSetter
     */
    public function __construct(LocaleSetterInterface $localeSetter)
    {
        $localeSetter->setLocale();
    }

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
