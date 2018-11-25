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
    TransKeyService::HEAD_SUBSCRIBE => 'Подписаться',
    TransKeyService::HEAD_MAIN_OFFICE => 'Главный офис',
    TransKeyService::HEAD_GET_IN_TOUCH => 'Связаться',
    TransKeyService::HEAD_GET_SOCIAL => 'Мы в соц. сетях',
    TransKeyService::HEAD_PHONE => 'Телефон',
    TransKeyService::HEAD_EMAIL => 'Эл. адрес',
    TransKeyService::HEAD_ADDRESS => 'Адрес',
    TransKeyService::HEAD_DEVELOPMENT => 'Разработка',
    TransKeyService::HEAD_SECURITY => 'Безопасность',
    TransKeyService::HEAD_INTEGRATION => 'Интеграция',
];

/** @var TransKeyService $service */
$service = app(TransKeyService::class);

return $service->getModifiedArray($transKeys);
