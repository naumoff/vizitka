<?php
/**
 * User: Andrey Naumoff
 * Date: 26-Nov-18
 * Time: 12:18 PM
 * E-mail: andrey.naumoff@gmail.com
 */

use App\Services\Translation\TransKeyService;

$transKeys = [
    TransKeyService::LINK_NAME_LOGIN => 'Login',
    TransKeyService::LINK_NAME_REGISTRATION => 'Registration',
    TransKeyService::LINK_NAME_DASHBOARD => 'Dashboard',
];

/** @var TransKeyService $service */
$service = app(TransKeyService::class);

return $service->getModifiedArray($transKeys);
