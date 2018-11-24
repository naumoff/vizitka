<?php
/**
 * User: Andrey Naumoff
 * Date: 23-Nov-18
 * Time: 11:40 PM
 * E-mail: andrey.naumoff@gmail.com
 */

use App\Services\Translation\TransKeyService;

$transKeys = [
    TransKeyService::HEAD_MENU => 'Меню',
    TransKeyService::HEAD_SUBSCRIBE => 'Підписатися',
    TransKeyService::HEAD_MAIN_OFFICE => 'Головний офіс',
    TransKeyService::HEAD_GET_IN_TOUCH => 'Увійти в контакт',
];

/** @var TransKeyService $service */
$service = app(TransKeyService::class);

return $service->getModifiedArray($transKeys);