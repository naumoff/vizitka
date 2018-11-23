<?php

namespace App\Http\Controllers\Front;

use App;
use App\Contracts\LocaleServiceInterface;
use App\Http\Controllers\Controller;
use Cookie;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    #region PROPERTIES
    /** @var string $locale */
    private $locale;

    #endregion

    #region MAIN METHODS
    /**
     * FrontController constructor.
     * @param LocaleServiceInterface $localeService
     */
    public function __construct(LocaleServiceInterface $localeService)
    {
        $localeService->setLocale();
        $this->locale = $localeService->getLocale();
        Cookie::queue(Cookie::make('locale', $this->locale, 30));
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
    #endregion
}
