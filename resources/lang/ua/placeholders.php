<?php
/**
 * User: Andrey Naumoff
 * Date: 24-Nov-18
 * Time: 4:35 PM
 * E-mail: andrey.naumoff@gmail.com
 */

use App\Services\Translation\TransKeyService;

$transKeys = [
    TransKeyService::PLACEHOLDER_NAME => 'Ваше ім\'я',
    TransKeyService::PLACEHOLDER_PHONE => 'Телефон',
    TransKeyService::PLACEHOLDER_MESSAGE => 'Ваше повідомлення',
    TransKeyService::PLACEHOLDER_EMAIL => 'Ваша електронна пошта',
    TransKeyService::PLACEHOLDER_ENTER_EMAIL => 'Введіть eл. пошту'
];

/** @var TransKeyService $service */
$service = app(TransKeyService::class);

return $service->getModifiedArray($transKeys);
