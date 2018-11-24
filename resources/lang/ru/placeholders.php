<?php
/**
 * User: Andrey Naumoff
 * Date: 24-Nov-18
 * Time: 4:35 PM
 * E-mail: andrey.naumoff@gmail.com
 */

use App\Services\Translation\TransKeyService;

$transKeys = [
    TransKeyService::PLACEHOLDER_NAME => 'Ваше имя',
    TransKeyService::PLACEHOLDER_PHONE => 'Телефон',
    TransKeyService::PLACEHOLDER_MESSAGE => 'Ваше сообщение',
    TransKeyService::PLACEHOLDER_EMAIL => 'Ваш эл. адрес',
    TransKeyService::PLACEHOLDER_ENTER_EMAIL => 'Введите эл. адрес',
];

/** @var TransKeyService $service */
$service = app(TransKeyService::class);

return $service->getModifiedArray($transKeys);
