<?php
/**
 * User: Andrey Naumoff
 * Date: 24-Nov-18
 * Time: 2:43 PM
 * E-mail: andrey.naumoff@gmail.com
 */

use App\Services\Translation\TransKeyService;

$transKeys = [
    TransKeyService::BUTTON_QUOTE => 'Get a quote',
    TransKeyService::BUTTON_SEND_MESSAGE => 'Send message',
    TransKeyService::BUTTON_SEND => 'Send',
];

/** @var TransKeyService $service */
$service = app(TransKeyService::class);

return $service->getModifiedArray($transKeys);
