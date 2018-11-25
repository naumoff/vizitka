<?php
/**
 * User: Andrey Naumoff
 * Date: 23-Nov-18
 * Time: 4:29 PM
 * E-mail: andrey.naumoff@gmail.com
 */

namespace App\Services\Translation;

use App\Contracts\TransKeyServiceInterface;

/**
 * Class TransKeyService
 * @package App\Services\Translation
 */
final class TransKeyService implements TransKeyServiceInterface
{
    /**
     * constants values must have the following conventions: 'fileName' DOT 'uniqueKeyInTranslationFile'
     */
    #region CONSTANTS ROUTES
    public const ROUTE_MAIN = 'routes.main';
    public const ROUTE_ABOUT_US = 'routes.about-us';
    public const ROUTE_SERVICES = 'routes.services';
    public const ROUTE_OUR_WORK = 'routes.our-work';
    public const ROUTE_CONTACTS = 'routes.contacts';
    #endregion

    #region CONSTANTS HEADS
    public const HEAD_MENU = 'heads.menu';
    public const HEAD_SUBSCRIBE = 'heads.subscribe';
    public const HEAD_MAIN_OFFICE = 'heads.main-office';
    public const HEAD_GET_IN_TOUCH = 'heads.get-in-touch';
    public const HEAD_GET_SOCIAL = 'heads.get-social';
    public const HEAD_PHONE = 'heads.phone';
    public const HEAD_EMAIL = 'heads.email';
    public const HEAD_ADDRESS = 'heads.address';
    public const HEAD_DEVELOPMENT = 'heads.development';
    public const HEAD_SECURITY = 'heads.security';
    public const HEAD_INTEGRATION = 'heads.integration';
    #endregion

    #region CONSTANTS BUTTONS
    public const BUTTON_QUOTE = 'buttons.get-quote';
    public const BUTTON_SEND_MESSAGE = 'buttons.send-message';
    public const BUTTON_SEND = 'buttons.send';
    #endregion

    #region CONSTANTS PLACEHOLDERS
    public const PLACEHOLDER_NAME = 'placeholders.name';
    public const PLACEHOLDER_PHONE = 'placeholders.phone';
    public const PLACEHOLDER_MESSAGE = 'placeholders.message';
    public const PLACEHOLDER_EMAIL = 'placeholders.email';
    public const PLACEHOLDER_ENTER_EMAIL = 'placeholders.enter-email';
    #endregion

    #region CONSTANTS STRINGS
    public const STRING_CONNECT = 'strings.connect';
    #endregion

    #region MAIN METHODS
    /**
     * @param array $transKeyArray
     * @return array
     */
    public function getModifiedArray(array $transKeyArray): array
    {
        $modifiedArray = [];
        foreach ($transKeyArray as $key => $value) {
            $modifiedArray[$this->makeKey($key)] = $value;
        }
        return $modifiedArray;
    }
    #endregion

    #region SERVICE METHODS
    /**
     * @param string $key
     * @return string
     */
    private function makeKey(string $key): string
    {
        $position = strpos($key, '.');
        $newKey = substr($key, $position + 1);
        return $newKey;
    }
    #endregion
}
