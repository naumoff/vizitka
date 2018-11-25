<?php
/**
 * User: Andrey Naumoff
 * Date: 25-Nov-18
 * Time: 6:12 PM
 * E-mail: andrey.naumoff@gmail.com
 */

use App\Services\Translation\TransKeyService;

// @codingStandardsIgnoreStart
$transKeys = [
    TransKeyService::STRING_CONNECT => 'Ми доступні 24/7 по факсу, електронній пошті або по телефону. Ви також можете використовувати нашу швидку контактну форму, щоб задати питання про наші послуги та проекти.',
];
// @codingStandardsIgnoreEnd

/** @var TransKeyService $service */
$service = app(TransKeyService::class);

return $service->getModifiedArray($transKeys);
