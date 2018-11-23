<?php
/**
 * User: Andrey Naumoff
 * Date: 22-Nov-18
 * Time: 11:20 PM
 * E-mail: andrey.naumoff@gmail.com
 */

namespace App\Services\Locale;

use App;
use Illuminate\Http\Request;

final class LocaleSetter implements LocaleSetterInterface
{
    #region PROPERTIES
    /** @var null|string $locale */
    private $locale;

    /** @var string $fallBackLocale */
    private $fallBackLocale;

    #endregion

    #region MAIN METHODS
    /**
     * LocaleSetter constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->locale = $request->route('locale');
        $this->fallBackLocale = config('app.fallback_locale', 'en');
    }

    public function setLocale():void
    {
        $this->validateLocale();
        App::setLocale($this->locale);
    }
    #endregion

    #region SERVICE METHODS
    /**
     * setting default locale, if sth wrong
     */
    private function validateLocale():void
    {
        if ($this->locale === null || !in_array($this->locale, LocaleSetterInterface::AVAILABLE_LOCALES)) {
            $this->locale = $this->fallBackLocale;
        }
    }
    #endregion
}
