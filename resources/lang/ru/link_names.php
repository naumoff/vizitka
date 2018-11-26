<?php
/**
 * User: Andrey Naumoff
 * Date: 26-Nov-18
 * Time: 12:19 PM
 * E-mail: andrey.naumoff@gmail.com
 */

use App\Services\Translation\TransKeyService;

$transKeys = [
    TransKeyService::LINK_NAME_LOGIN => 'Вход',
    TransKeyService::LINK_NAME_REGISTRATION => 'Регистрация',
    TransKeyService::LINK_NAME_DASHBOARD => 'Кабинет',
];

/** @var TransKeyService $service */
$service = app(TransKeyService::class);

return $service->getModifiedArray($transKeys);