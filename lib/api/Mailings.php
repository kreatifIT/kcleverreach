<?php

/**
 * @author Kreatif GmbH
 * @author a.platter@kreatif.it
 * Date: 31.03.21
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace kcleverreach\api;


class Mailings
{

    public static function getList(int $limit = 10, array $params = [])
    {
        $manager = \kcleverreach\ApiManager::factory();
        $adapter = $manager->getAdapter();

        return $adapter->action('get', "/v3/mailings.json", array_merge($params, [
            'limit' => $limit,
        ]));
    }
}