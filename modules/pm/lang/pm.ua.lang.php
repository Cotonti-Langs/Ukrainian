<?php
/**
 * Ukrainian Language File for the PM Module (pm.ua.lang.php)
 *
 * @package pm
 * @version 0.9.5
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2011
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Admin
 */

$L['adm_pm_totaldb'] = 'Приватних повідомлень у базі даних';
$L['adm_pm_totalsent'] = 'Всього відправлено приватних повідомлень';

/**
 * Config
 */

$L['cfg_allownotifications'] = array('Посилати E-mail ',' повідомлення при здобутті користувачем нового приватного повідомлення');
$L['cfg_maxsize'] = array('Максимальна кількість символів в приватному повідомленні ',' За замовчуванням: 10000 символів');
$L['cfg_maxpmperpage'] = array('Максимальна. кількість повідомлень на сторінці', ' ');
$L['info_desc'] = 'Система приватних повідомлень - це спілкування користувачів на сайті, подібне e-mail';

/**
 * Main
 */

$L['pmsend_subtitle'] = 'Форма для створення нового повідомлення';
$L['pmsend_title'] = 'Надіслати нове повідомлення';

$L['pm_bodytoolong'] = 'Текст повідомлення перевищує встановлені '.$cfg['pm']['pm_maxsize'].' символів';
$L['pm_bodytooshort'] = 'Текст повідомлення занадто короткий або відсутній';
$L['pm_inbox'] = 'Вхідні повідомлення';
$L['pm_inboxsubtitle'] = 'Приватні повідомлення, нові зверху';
$L['pm_norecipient'] = 'Не вказаний отримувач';
$L['pm_notifytitle'] = 'Нове повідомлення';
$Ls['Privatemessages'] = array('нове повідомлення ',' нових повідомлень');
$L['pm_replyto'] = 'Відповісти даному користувачу';
$L['pm_sendnew'] = 'Створити нове повідомлення';
$L['pm_sentbox'] = 'Надіслані повідомлення';
$L['pm_sentboxsubtitle'] = 'Надіслані, але ще не переглянуті отримувачем повідомлення';
$L['pm_titletooshort'] = 'Заголовок повідомлення занадто короткий або відсутній';
$L['pm_toomanyrecipients'] = 'Помилка: кількість одержувачів не повинна перевищувати %1\$s';
$L['pm_wrongname'] = 'Помилка в імені одного або більше одержувачів: ім\'я видалено зі списку одержувачів';
$L['pm_messagehistory'] = 'Історія повідомлень';
$L['pm_notmovetosentbox'] = 'Не зберігати у вихідних';

$L['pm_filter'] = 'Фільтр';
$L['pm_all'] = 'Всі';
$L['pm_starred'] = 'Обране';
$L['pm_unread'] = 'Непрочитані';
$L['pm_deletefromstarred'] = 'Видалити з обраного';
$L['pm_putinstarred'] = 'Додати в обране';
$L['pm_read'] = 'Прочитане';
$L['pm_selected'] = 'Позначені';


/**
 * Private messages: notification
 */

$L['pm_notify'] = 'Вітаємо, %1$s,
Вам надіслано нове приватне повідомлення від користувача %2$s. Посилання для перегляду повідомлення:
%3$s';

?>