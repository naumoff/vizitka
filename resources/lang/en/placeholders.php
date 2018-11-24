<?php
/**
 * User: Andrey Naumoff
 * Date: 24-Nov-18
 * Time: 4:35 PM
 * E-mail: andrey.naumoff@gmail.com
 */

use App\Services\Translation\TransKeyService;

$transKeys = [
    TransKeyService::PLACEHOLDER_NAME => 'Your name',
    TransKeyService::PLACEHOLDER_PHONE => 'Phone',
    TransKeyService::BUTTON_SEND_MESSAGE => 'Your message',
    TransKeyService::PLACEHOLDER_EMAIL => 'E-mail',
    TransKeyService::PLACEHOLDER_ENTER_EMAIL => 'Enter your email',
];

/** @var TransKeyService $service */
$service = app(TransKeyService::class);

return $service->getModifiedArray($transKeys);
