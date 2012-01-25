<?php
/**
 * Ukrainian Language File for Trashcan
 *
 * @package Trashcan
 * @version 
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2008-2012
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

$L['Trash'] = 'Видалене';
$L['Trashcan'] = 'Кошик';
$L['core_trash'] = &$L['Trashcan'];

/**
 * Config Section
 * Trash Subsection
 */

$L['cfg_trash_forum'] = array('Видаляти до кошика форуми', ' ');
$L['cfg_trash_page'] = array('Видаляти до кошика сторінки', ' ');
$L['cfg_trash_pm'] = array('Видаляти до кошика приватні повідомлення', ' ');
$L['cfg_trash_prunedelay'] = array('Очищати кошик через', 'днів (0 - вимкнути очищення кошика)');
$L['cfg_trash_user'] = array('Видаляти до кошика облікові записи користувачів', ' ');
$L['cfg_trash_comment'] = array('Видаляти до кошика коментарі', ' ');

$L['info_desc'] = 'Зберігає видалені елементи в кошику для сміття на деякий час, щоб їх можна було відновити при необхідності';

/**
 * TrashCan Section
 */

$L['adm_help_trashcan'] = 'Записи, видалені користувачами та модераторами<br />
- видалити остаточно: остаточно видалити запис з бази даних<br />
- відновити: повернути запис до бази даних<br />
<b>Увага:</b><br />
- відновлюючи тему форуму, ви відновлюєте і всі повідомлення в ній<br />
- відновлюючи повідомлення у видаленій темі, ви відновлює саму тему і (якщо це можливо) усі дочірні повідомлення';
$L['adm_trashcan_deleted'] = 'Елемент видалено';
$L['adm_trashcan_prune'] = 'Кошик очищено';
$L['adm_trashcan_restored'] = 'Елемент відновлено';

?>
