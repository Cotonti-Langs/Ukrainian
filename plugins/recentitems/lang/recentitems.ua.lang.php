<?php
/**
 * Ukrainian Language File for RecentItems Plugin
 *
 * @package recentitems
 * @version 0.9.5
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2011
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Plugin Config
 */

$L['cfg_part'] = array('Частина, в якій буде викликатися плагін');
$L['cfg_recentpages'] = array('Відображати нові сторінки на головній сторінці');
$L['cfg_maxpages'] = array('Кількість нових сторінок на головній сторінці');
$L['cfg_recentforums'] = array('Відображати нові повідомлення на форумах на головній сторінці');
$L['cfg_maxtopics'] = array('Кількість нових повідомлень на форумах на головній');
$L['cfg_newpages'] = array('Отображать новые страницы на странице "Новое на сайте"');
$L['cfg_newforums'] = array('Відображати нові повідомлення на форумах на сторінці "Нове на сайті"');
$L['cfg_newadditional'] = array('Увімкнути підтримку додаткових модулів на сторінці "Нове на сайті"');
$L['cfg_itemsperpage'] = array('Кількість елементів на сторінці "нове на сайті"');
$L['cfg_rightscan'] = array('Увімкнути перевірку доступу до елементів ',' Використовуйте, якщо на сайті велика кількість категорій сторінок або розділів форуму з поділом прав доступу');
$L['cfg_recentpagestitle'] = array('Автоматичне обмеження довжини заголовка нових сторінок на головній ',' За замовчуванням вимкнено.');
$L['cfg_recentpagestext'] = array('Автоматичне обмеження довжини тексту нових сторінок на головній ',' За замовчуванням вимкнено.');
$L['cfg_recentforumstitle'] = array('Автоматичне обмеження довжини заголовка нових тем на форумі на головній ',' За замовчуванням вимкнено.');
$L['cfg_newpagestext'] = array('Автоматичне обмеження довжини тексту сторінок на сторінці "Нове на сайті" ',' За замовчуванням вимкнено.');

$L['info_desc'] = 'Відображає останні доповнення сайту (сторінки, теми) на головній сторінці';

/**
 * Plugin Body
 */

$L['recentitems_title'] = 'Нове на сайті';

$L['recentitems_forums'] = 'Нове на форумах';
$L['recentitems_pages'] = 'Нове в розділах';

$L['recentitems_nonewpages'] = 'Немає нових сторінок';
$L['recentitems_nonewposts'] = 'Немає нових повідомлень';

$L['recentitems_shownew'] = 'Показати нове на сайті';
$L['recentitems_fromlastvisit'] = 'з останнього мого відвідування';
$L['recentitems_1day'] = 'за добу';
$L['recentitems_2days'] = 'за 2 доби';
$L['recentitems_3days'] = 'за 3 доби';
$L['recentitems_1week'] = 'за тиждень';
$L['recentitems_2weeks'] = 'за 2 тижні';
$L['recentitems_1month'] = 'за місяць';

$L['recentitems_posts'] = 'Немає нових повідомлень';
$L['recentitems_posts_new'] = 'Є нові повідомлення';
$L['recentitems_posts_hot'] = 'Популярна (немає нових)';
$L['recentitems_posts_new_hot'] = 'Популярна (є нові)';
$L['recentitems_posts_sticky'] = 'Тема закріплена (немає нових)';
$L['recentitems_posts_new_sticky'] = 'Тема закріплена (є нові)';
$L['recentitems_posts_locked'] = 'Тема закрита (немає нових)';
$L['recentitems_posts_new_locked'] = 'Тема закрита (є нові)';
$L['recentitems_posts_sticky_locked'] = 'Оголошення';
$L['recentitems_posts_new_sticky_locked'] = 'Нові оголошення';
$L['recentitems_posts_moved'] = 'Перенесена в другий розділ';

?>