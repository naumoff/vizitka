<?php
/**
 * User: Andrey Naumoff
 * Date: 22-Nov-18
 * Time: 11:20 PM
 * E-mail: andrey.naumoff@gmail.com
 */

namespace App\Services\Translation;

use App;
use App\Contracts\LocaleServiceInterface;
use Cookie;
use Illuminate\Contracts\Encryption\Encrypter;
use Illuminate\Http\Request;

final class LocaleService implements LocaleServiceInterface
{
    #region PROPERTIES
    /** @var null|string $locale */
    private $locale;

    /** @var string $fallBackLocale */
    private $fallBackLocale;

    /** @var null|string $localeInCookie */
    private $localeInCookie;
    #endregion

    #region MAIN METHODS
    /**
     * LocaleService constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->locale = $request->route('locale');
        $this->fallBackLocale = config('app.fallback_locale', 'en');
    }

    public function setLocale():void
    {
        $this->setLocaleIfMissing();
        App::setLocale($this->locale);
    }

    public function getLocale(): string
    {
        return $this->locale;
    }
    #endregion

    #region SERVICE METHODS

    private function setLocaleInCookie(): void
    {
        $encryptedLocale = Cookie::get('locale');
        /** @var Encrypter $encrypter */
        $encrypter = app(Encrypter::class);

        $this->localeInCookie = $encrypter->decrypt($encryptedLocale, false);
    }

    /**
     * setting default locale, if sth wrong
     */
    private function setLocaleIfMissing():void
    {
        if ($this->locale === null || !in_array($this->locale, LocaleServiceInterface::AVAILABLE_LOCALES)) {
            $this->setLocaleInCookie();
            if (
                $this->localeInCookie !== null &&
                in_array($this->localeInCookie, LocaleServiceInterface::AVAILABLE_LOCALES)
            ) {
                $this->locale = $this->localeInCookie;
            } else {
                $this->locale = $this->fallBackLocale;
            }
        }
    }
    #endregion
}
