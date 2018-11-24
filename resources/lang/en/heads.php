<?php
/**
 * User: Andrey Naumoff
 * Date: 23-Nov-18
 * Time: 11:39 PM
 * E-mail: andrey.naumoff@gmail.com
 */

use App\Services\Translation\TransKeyService;

$transKeys = [
    TransKeyService::HEAD_MENU => 'Menu',
    TransKeyService::HEAD_SUBSCRIBE => 'Subscribe Now',
    TransKeyService::HEAD_MAIN_OFFICE => 'Main Office',
    TransKeyService::HEAD_GET_IN_TOUCH => 'Get in Touch',
];

/** @var TransKeyService $service */
$service = app(TransKeyService::class);

return $service->getModifiedArray($transKeys);
