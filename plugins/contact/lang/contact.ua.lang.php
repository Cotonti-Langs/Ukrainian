<?php

/**
 * Contact Plugin for Cotonti CMF (Ukrainian Localization)
 * @version 2.00
 * @author Cotonti Team
 * @copyright (c) 2011 Cotonti Team
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL');

/**
 * Plugin Config
 */

$L['cfg_email'] = array('E-mail', '(залишити порожнім для використання E-mail\'а адміністратора)');
$L['cfg_minchars'] = array('Мінімальна кількість символів у повідомленні');

$L['info_desc'] = 'Форма для зв\'язку, що відправляється по e-mail і записується в базу данихх';

/**
 * Plugin Admin
 */

$L['contact_view'] = 'Перегляд повідомлення';
$L['contact_markread'] = 'Відзначити як прочитане';
$L['contact_read'] = 'Прочитане';
$L['contact_markunread'] = 'Зняти відмітку про прочитання';
$L['contact_unread'] = 'Не прочитане';
$L['contact_new'] = 'нове повідомлення';
$L['contact_shortnew'] = 'нове';
$L['contact_sent'] = 'Остання відповідь';
$L['contact_nosubject'] = 'Без теми';

/**
 * Plugin Title & Subtitle
 */

$L['contact_title'] = 'Зворотній зв\'язок';
$L['contact_subtitle'] = 'Контактна інформація';

/**
 * Plugin Body
 */

$L['contact_headercontact'] = 'Зворотній зв\'язок';
$Ls['contact_headercontact'] = array('повідомлення ',' повідомлення ',' повідомлень');
$L['contact_entrytooshort'] = 'Повідомлення занадто коротке або відсутнє';
$L['contact_noname'] = 'Ви не вказали ім\'я';
$L['contact_emailnotvalid'] = 'Некоректно вказано E-mail';
$L['contact_message_sent'] = 'Повідомлення надіслано';

?>