<?php
/**
 * User: Andrey Naumoff
 * Date: 23-Nov-18
 * Time: 4:33 PM
 * E-mail: andrey.naumoff@gmail.com
 */

use App\Services\Translation\TransKeyService;

$transKeys = [
    TransKeyService::ROUTE_MAIN => 'Головна',
    TransKeyService::ROUTE_ABOUT_US => 'Про нас',
    TransKeyService::ROUTE_SERVICES => 'Послуги',
    TransKeyService::ROUTE_OUR_WORK => 'Наші роботи',
    TransKeyService::ROUTE_CONTACTS => 'Контакти',
];

/** @var TransKeyService $service */
$service = app(TransKeyService::class);

return $service->getModifiedArray($transKeys);
