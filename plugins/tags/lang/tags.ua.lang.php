<?php
/**
 * Ukrainian Language File for Tags Plugin
 *
 * @package tags
 * @version 0.9.5
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2011
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Plugin Title & Subtitle
 */

$L['plu_title'] = 'Теги';

/**
 * Plugin Body
 */

$L['tags_All'] = 'Всі теги';
$L['tags_comma_separated'] = 'розділяючи комою';
$L['tags_Found_in_forums'] = 'Знайдено у форумах';
$L['tags_Found_in_pages'] = 'Знайдено на сторінках';
$L['tags_Keyword'] = 'Ключове слово';
$L['tags_Keywords'] = 'Ключові слова';
$L['tags_Orderby'] = 'Сортування результатів по';
$L['tags_Query_hint'] = 'Кілька тегів, розділених комою, означають логічне І між ними. Ви також можете використовувати крапку з комою в якості логічного АБО. І має вищий пріоритет над АБО. Ви не можете використовувати дужки для угруповання умов. Зірочка (*) всередині тега використовується як маска для &quot;підрядка&quot;.';
$L['tags_Search_results'] = 'Результати пошуку';
$L['tags_Search_tags'] = 'Пошук тегів';
$L['tags_Tag_cloud'] = 'Хмара тегів';
$L['tags_Tag_cloud_none'] = 'Немає тегів';

/**
 * Plugin Config
 */

$L['cfg_forums'] = array('Увімкнути теги для форумів');
$L['cfg_index'] = array('Розділ тегів для головної сторінки');
$L['cfg_limit'] = array('Максимальна кількість тегів','0 &mdash; неограничено');
$L['cfg_lim_forums'] = array('Лимит количества тегов в облаке на форумах','0 &mdash; необмежено');
$L['cfg_lim_index'] = array('Ліміт кількості тегів  на головній сторінці', '0 &mdash; необмежено');
$L['cfg_lim_pages'] = array('Ліміт кількості тегів на сторінках','0 &mdash; необмежено');
$L['cfg_more'] = array('Відображати в тегах посилання на &laquo;Всі теги&raquo;');
$L['cfg_order'] = array('Сортування тегів','за алфавітом, за спаданням частотності, випадковим чином');
$L['cfg_pages'] = array('Увімкнути теги для сторінок');
$L['cfg_perpage'] = array('Тегів на сторінці в хмарі всіх тегів, 0 - всі теги відразу');
$L['cfg_title'] = array('Перші букви тегів великими');
$L['cfg_translit'] = array('Транслітерувати теги в URL-адресах');

$L['info_desc'] = 'Реалізує теги - ключові слова для вмісту, хмари тегів, пошук по тегам і API';

?>