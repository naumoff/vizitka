<?php
/**
 * User: Andrey Naumoff
 * Date: 25-Nov-18
 * Time: 6:12 PM
 * E-mail: andrey.naumoff@gmail.com
 */

use App\Services\Translation\TransKeyService;

// @codingStandardsIgnoreStart
$transKeys = [
    TransKeyService::STRING_CONNECT => 'Мы доступны 24/7 по факсу, электронной почте или по телефону. Вы также можете использовать нашу быструю контактную форму, чтобы задать вопрос о наших услугах и проектах.',

];
// @codingStandardsIgnoreEnd

/** @var TransKeyService $service */
$service = app(TransKeyService::class);

return $service->getModifiedArray($transKeys);
