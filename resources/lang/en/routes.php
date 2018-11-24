<?php
/**
 * User: Andrey Naumoff
 * Date: 23-Nov-18
 * Time: 4:33 PM
 * E-mail: andrey.naumoff@gmail.com
 */

use App\Services\Translation\TransKeyService;

$transKeys = [
    TransKeyService::ROUTE_MAIN => 'Main',
    TransKeyService::ROUTE_ABOUT_US => 'About Us',
    TransKeyService::ROUTE_SERVICES => 'Services',
    TransKeyService::ROUTE_OUR_WORK => 'Our work',
    TransKeyService::ROUTE_CONTACTS => 'Contacts',
];

/** @var TransKeyService $service */
$service = app(TransKeyService::class);

return $service->getModifiedArray($transKeys);
