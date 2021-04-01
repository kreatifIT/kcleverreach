<?php

/**
 * @author Kreatif GmbH
 * @author a.platter@kreatif.it
 * Date: 30.03.21
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

include_once \rex_addon::get('kcleverreach')->getPath('vendor/autoload.php');

if (rex::isFrontend()) {
    \rex_extension::register('PACKAGES_INCLUDED', [\kcleverreach\Main::class, 'init']);
}