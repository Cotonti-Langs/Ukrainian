<?php
/**
 * Ukrainian Language File for Banlist
 *
 * @package Banlist
 * @version 0.9.5
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2008-2011
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

$L['info_desc'] = 'Інструмент адміністратора, що дозволяє блокувати користувачів по IP або e-mail адресою';

/**
 * Plugin Body
 */

$L['banlist_title'] = 'Банлист';
$L['banlist_ipmask'] = 'IP маска';
$L['banlist_emailmask'] = 'E-mail маска';
$L['banlist_reason'] = 'Причина';
$L['banlist_duration'] = 'Термін';
$L['banlist_neverexpire'] = 'Без терміну';

$L['banlist_help'] = 'Зразки IP-масок: 194.31.13.41, 194.31.13.*, 194.31.*.*, 194.*.*.*<br />Зразки e-mail масок: @hotmail.com, @yahoo (шаблони (wildcards) не підтримуються) <br /> Запис може містити одну IP-маску, одну e-mail маску або обидві маски.<br />IP-адреси фільтруються для всіх без винятку сторінок, e-mail маски застосовуються тільки при реєстрації користувачів.';

?>