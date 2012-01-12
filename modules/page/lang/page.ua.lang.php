<?php
/**
 * Ukrainian Language File for the Page Module (page.ua.lang.php)
 *
 * @package page
 * @version 0.9.5
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2011
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Module Config
 */

$L['cfg_autovalidate'] = array('Автоматичне затвердження сторінок ',' Автоматично затверджувати публікацію сторінок, створених користувачем з правом адміністрування розділу');
$L['cfg_count_admin'] = array('Рахувати відвідування адміністраторів ',' Включити відвідування адміністраторів в статистику відвідуваності сайту');
$L['cfg_maxlistsperpage'] = array('Максимальна. кількість категорій на сторінці', ' ');
$L['cfg_order'] = array('Поле сортування');
$L['cfg_title_page'] = array('Формат заголовка сторінки', 'Опції: {TITLE}, {CATEGORY}');
$L['cfg_way'] = array('Рапрямок сортування');

$L['info_desc'] = 'Розширена функціональність з управління вмістом: сторінки та категорії сторінок.';

/**
 * Structure Confing
 */

$L['cfg_order_params'] = array(); // Redefined in cot_page_config_order()
$L['cfg_way_params'] = array($L['Ascending'], $L['Descending']);

/**
 * Extrafields Section
 */

$L['adm_help_pages_extrafield'] = '<p><em>HTML-код</em> поля встановлюються в значення за замовчуванням автоматично, якщо поле очистити та оновити</p>
<p class="margintop10"><b>Нові теги в tpl-файлах:</b></p>
<ul class="follow">
<li>page.tpl: {PAGE_XXXXX}, {PAGE_XXXXX_TITLE}</li>
<li>page.add.tpl: {PAGEADD_FORM_XXXXX}, {PAGEADD_FORM_XXXXX_TITLE}</li>
<li>page.edit.tpl: {PAGEEDIT_FORM_XXXXX}, {PAGEEDIT_FORM_XXXXX_TITLE}</li>
<li>page.list.tpl: {LIST_ROW_XXXXX}, {LIST_TOP_XXXXX}</li>
</ul>';

/**
 * Admin Page Section
 */

$L['adm_queue_deleted'] = 'Сторінка видалена в кошик';
$L['adm_valqueue'] = 'У черзі на затвердження';
$L['adm_validated'] = 'Затверджені';
$L['adm_structure'] = 'Структура сторінок (категорії)';
$L['adm_sort'] = 'Сортувати';
$L['adm_sortingorder'] = 'Порядок сортування за замовчуванням в категорії';
$L['adm_showall'] = 'Показати все';
$L['adm_help_page'] = 'Сторінки категорії &laquo;system&raquo; не відображаються в списках сторінок і є окремими, самостійними сторінками';
$L['adm_fileyesno'] = 'Файл (Так/Ні)';
$L['adm_fileurl'] = 'URL файлу';
$L['adm_filecount'] = 'Кількість завантажень';
$L['adm_filesize'] = 'Розмір файлу';

/**
 * Page add and edit
 */

$L['page_addtitle'] = 'Створити сторінку';
$L['page_addsubtitle'] = 'Заповніть необхідні поля і натисніть "Надіслати" для продовження';
$L['page_edittitle'] = 'Параметри сторінки';
$L['page_editsubtitle'] = 'Змініть необхідні поля і натисніть "Надіслати" для продовження';

$L['page_catmissing'] = 'Код категорії відсутній';
$L['page_confirm_delete'] = 'Ви дійсно хочете видалити цю сторінку?';
$L['page_confirm_validate'] = 'Хочете затвердити цю сторінку?';
$L['page_confirm_unvalidate'] = 'Ви дійсно хочете відправити цю сторінку в чергу на затвердження?';
$L['page_notavailable'] = 'Сторінка буде розміщенф через';
$L['page_textmissing'] = 'Текст сторінки не повинен бути порожнім';
$L['page_titletooshort'] = 'Заголовок занадто короткий або відсутній';
$L['page_validation'] = 'Очікують затвердження';
$L['page_validation_desc'] = 'Ваші сторінки, які ще не затверджені адміністратором';

$L['page_file'] = 'Прикріпити файл';
$L['page_filehint'] = '(при включенні модуля завантажень заповніть два поля нижче)';
$L['page_urlhint'] = '(якщо прикріплений файл)';
$L['page_filesize'] = 'Розмір файлу, Кб';
$L['page_filesizehint'] = '(якщо прикріплений файл)';
$L['page_filehitcount'] = 'Завантажень';
$L['page_filehitcounthint'] = '(якщо прикріплений файл)';

$L['page_formhint'] = 'Після заповнення форми сторінка буде поміщена в чергу на затвердження і буде прихована до тих пір, поки модератор або адміністратор не затвердять її публікацію у відповідному розділі. Уважно перевірте правильність заповнення полів форми. Якщо вам знадобиться змінити зміст сторінки, то ви зможете зробити це пізніше, але сторінка знову буде відправлена на затвердження.';

$L['page_pageid'] = 'ID сторінки';
$L['page_deletepage'] = 'Видалити сторінку';

/**
 * Moved from theme.lang
 */

$L['page_linesperpage'] = 'Записів на сторінку';
$L['page_linesinthissection'] = 'Записів в розділі';

?>