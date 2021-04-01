<?php

/**
 * @author Kreatif GmbH
 * @author a.platter@kreatif.it
 * Date: 31.03.21
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$addon = rex_addon::get('kcleverreach');
$form  = rex_config_form::factory($addon->getName());

$form->addFieldset('Rest API');
$form->addRawField('<p><a href="https://eu2.cleverreach.com/admin/index.php">https://eu2.cleverreach.com/admin/index.php</a><br/>Auth-Daten können unter: Mein Account > Extras > REST API erhalten werden</p><br/>');

$field = $form->addInputField('text', 'client_id', null, ['class' => 'form-control']);
$field->setLabel('Client ID');

$field = $form->addInputField('password', 'client_secret', null, ['class' => 'form-control']);
$field->setLabel('Client Secret');

$fragment = new rex_fragment();
$fragment->setVar('class', 'edit', false);
$fragment->setVar('title', $addon->i18n('settings'), false);
$fragment->setVar('body', $form->get(), false);
echo $fragment->parse('core/page/section.php');
