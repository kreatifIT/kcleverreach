<?php

/**
 * @author Kreatif GmbH
 * @author a.platter@kreatif.it
 * Date: 31.03.21
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


echo rex_view::title($this->getProperty('page')['title']);
rex_be_controller::includeCurrentPageSubPath();