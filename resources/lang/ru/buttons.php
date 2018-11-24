<?php
/**
 * User: Andrey Naumoff
 * Date: 24-Nov-18
 * Time: 2:43 PM
 * E-mail: andrey.naumoff@gmail.com
 */

use App\Services\Translation\TransKeyService;

$transKeys = [
    TransKeyService::BUTTON_QUOTE => 'Получить предложение',
    TransKeyService::BUTTON_SEND_MESSAGE => 'Отправить сообщение',
    TransKeyService::BUTTON_SEND => 'Отправить',
];

/** @var TransKeyService $service */
$service = app(TransKeyService::class);

return $service->getModifiedArray($transKeys);
