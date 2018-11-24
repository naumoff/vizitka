<?php
/**
 * User: Andrey Naumoff
 * Date: 23-Nov-18
 * Time: 4:33 PM
 * E-mail: andrey.naumoff@gmail.com
 */

use App\Services\Translation\TransKeyService;

$transKeys = [
    TransKeyService::ROUTE_MAIN => 'Главная',
    TransKeyService::ROUTE_ABOUT_US => 'О нас',
    TransKeyService::ROUTE_SERVICES => 'Услуги',
    TransKeyService::ROUTE_OUR_WORK => 'Наши работы',
    TransKeyService::ROUTE_CONTACTS => 'Контакты',
];

/** @var TransKeyService $service */
$service = app(TransKeyService::class);

return $service->getModifiedArray($transKeys);
