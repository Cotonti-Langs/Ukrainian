<?php
/**
 * Ukrainian Language File for Comments Plugin
 *
 * @package comments
 * @version 0.9.5
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2011
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Plugin Config
 */

$L['cfg_commentsize'] = array('Макс. розмір коментаря, байт ', '0 - без обмеження розміру');
$L['cfg_countcomments'] = array('Рахувати коментарі ',' Показувати кількість коментарів поряд з іконкою');
$L['cfg_enable_comments'] = array('Увімкнути коментарі');
$L['cfg_expand_comments'] = array('Відкрити коментарі ',' За замовчуванням показувати коментарі на сторінці');
$L['cfg_mail'] = array('Надсилати email-повідомлення адміністратору про нові коментарі');
$L['cfg_markitup'] = array('Використовуватиp');
$L['cfg_markup'] = array('Увімкнути HTML розмітку в коментарях');
$L['cfg_maxcommentsperpage'] = array('Макс. кількість коментарів на сторінці', ' ');
$L['cfg_minsize'] = array('Мін. довжина коментаря');
$L['cfg_order'] = array('Порядок сортування ',' Хронологічний або самі останні вгорі');
$L['cfg_order_params'] = array('Хронологічний', 'Самі останні вгорі');
$L['cfg_parsebbcodecom'] = array('Парсінг BBCode в коментарях', ' ');
$L['cfg_parsesmiliescom'] = array('Парсінг смайликів в коментарях', ' ');
$L['cfg_rss_commentmaxsymbols'] = array('Макс. кількість символів для коментарів ',' За замовчуванням вимкнено');
$L['cfg_time'] = array('Користувачі можуть редагувати коментарі протягом ',' хвилин');

$L['info_desc'] = 'Система коментарів для Cotonti з API та інтеграцією зі сторінками, списками, опитуваннями, RSS та іншими розширеннями.';

/**
 * Plugin Body
 */

$L['comments_comment'] = 'Коментар';
$L['comments_comments'] = 'Коментарі';
$L['comments_confirm_delete'] = 'Ви дійсно хочете видалити цей коментар?';
$L['Newcomment'] = 'Новий коментар';

$L['comm_on_page'] = 'на сторінці';

$L['com_closed'] = 'Для цього елементу не можна додавати коментарі';
$L['com_commentadded'] = 'Коментар доданий';
$L['com_commenttoolong'] = 'Коментар занадто довгий';
$L['com_commenttooshort'] = 'Коментар занадто короткий або відсутній';
$L['com_nocommentsyet'] = 'Коментарі відсутні';
$L['com_authortooshort'] = 'Ім\'я автора занадто коротке';
$L['com_regonly'] = 'Додавання комментарів доступно лише зареєстрованим користувачам';

$L['plu_comgup'] = ' залишилось';
$L['com_edithint'] = 'Ваш коментар буде доступний для редагування протягом {$time}';

$L['plu_comlive'] = 'Новий коментар на сайті ';
$L['plu_comlive1'] = 'Відредагований коментар на сайті ';
$L['plu_comlive2'] = 'залишив коментар:';
$L['plu_comlive3'] = 'відредагував свій коментар:';
$L['rss_comments'] = 'Коментарі для';
$L['rss_comment_of_user'] = 'Коментар користувача';
$L['rss_comments_item_desc'] = 'Стрічка коментарів сторінки';
$L['rss_original'] = 'Коментована сторінка';

/**
 * Admin Section
 */

$L['home_newcomments'] = 'Нові коментарі';
$L['core_comments'] = &$L['Comments'];
$L['adm_comm_already_del'] = 'Коментар видалено';

/**
 * cot_declension arrays
 */

$Ls['Comments'] = array('коментар ',' коментарю ',' коментарів');

/**
 * Comedit
 */

$L['plu_title'] = 'Редагування коментаря';

?>