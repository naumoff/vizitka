<?php
/**
 * User: Andrey Naumoff
 * Date: 22-Nov-18
 * Time: 11:47 PM
 * E-mail: andrey.naumoff@gmail.com
 */

namespace App\Services\Translation;


interface LocaleServiceInterface
{
    public const AVAILABLE_LOCALES = [
        'en',
        'ru',
        'ua'
    ];

    public function setLocale(): void;

    public function getLocale(): string;

}