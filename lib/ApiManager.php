<?php

/**
 * @author Kreatif GmbH
 * @author a.platter@kreatif.it
 * Date: 31.03.21
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace kcleverreach;


use rdoepner\CleverReach\Http\Guzzle;


class ApiManager extends \rdoepner\CleverReach\ApiManager
{

    public static function factory(): self
    {
        $http = new Guzzle(['access_token' => Main::getAccessToken()]);
        return new self($http);
    }
}