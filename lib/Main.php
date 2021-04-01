<?php

/**
 * @author Kreatif GmbH
 * @author a.platter@kreatif.it
 * Date: 30.03.21
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace kcleverreach;


use kcleverreach\api\Mailings;
use rdoepner\CleverReach\Http\Guzzle;


class Main
{

    public static function init(): void
    {
        self::initMyContent();

        if (rex_get('action', 'string') == 'cleverreach') {
            pr(Mailings::getList());
            exit;
        }
    }

    public static function getSetting($key)
    {
        return \rex_config::get(\rex_addon::get('kcleverreach')->getName(), $key);
    }

    public static function setSetting($key, $value): void
    {
        \rex_config::set(\rex_addon::get('kcleverreach')->getName(), $key, $value);
    }

    public static function refreshToken(): void
    {
        $client   = new Guzzle();
        $response = $client->authorize(self::getSetting('client_id'), self::getSetting('client_secret'));

        if (isset($response['access_token'])) {
            self::setSetting('oauth_response', $response);
            self::setSetting('access_token', $response['access_token']);
            self::setSetting('access_token_expires', $response['expires_in']);
            // todo: handle expiring
        }
    }

    public static function getAccessToken()
    {
        // todo: add token refreshing
        return self::getSetting('access_token');
    }

    /**
     *
     * Docs: https://www.cleverreach.com/de/integrationen/eigener-content/
     *
     * in CleverReach muss man vorab die Integration erstellen unter:
     * Mein Account -> Extras -> Integrationen -> Mein Content
     * Wo man die URL zum eigenen Server angibt, damit CleverReach weiss wo es die Daten holen kann
     * Bsp: https://www.domain.com/?action=get-mycontent
     *
     */
    public static function initMyContent(): void
    {
        if (rex_get('action', 'string') == 'get-mycontent') {
            $action = rex_post('get', 'string');

            if ($action == 'filter') {
                $result = MyContent::getFilters();
            } else if ($action == 'search') {
                $result = MyContent::getSearchResults();
            }
            \rex_response::sendJson($result);
            exit;
        }
    }
}
