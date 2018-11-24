<?php
/**
 * User: Andrey Naumoff
 * Date: 24-Nov-18
 * Time: 3:50 PM
 * E-mail: andrey.naumoff@gmail.com
 */

namespace App\Contracts;

interface TransKeyServiceInterface
{
    /**
     * @param array $array
     * @return array
     */
    public function getModifiedArray(array $array): array;
}
