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
    TransKeyService::STRING_CONNECT => 'We are available 24/7 by fax, e-mail or by phone. You can also use our quick contact form to ask a question about our services and projects.',
];
// @codingStandardsIgnoreEnd

/** @var TransKeyService $service */
$service = app(TransKeyService::class);

return $service->getModifiedArray($transKeys);
