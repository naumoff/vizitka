<?php
/**
 * User: Andrey Naumoff
 * Date: 24-Nov-18
 * Time: 2:43 PM
 * E-mail: andrey.naumoff@gmail.com
 */

use App\Services\Translation\TransKeyService;

$transKeys = [
    TransKeyService::BUTTON_QUOTE => 'Отримати пропозицію',
    TransKeyService::BUTTON_SEND_MESSAGE => 'Надіслати повідомлення',
    TransKeyService::BUTTON_SEND => 'Надіслати ',
];

/** @var TransKeyService $service */
$service = app(TransKeyService::class);

return $service->getModifiedArray($transKeys);
