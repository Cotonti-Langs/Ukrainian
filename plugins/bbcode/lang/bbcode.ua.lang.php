<?php
/**
 * Ukrainian Language File for BBcode management
 *
 * @package bbcode
 * @version 0.9.5
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2011
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

$L['adm_bbcode'] = 'BBCode';
$L['adm_bbcodes'] = 'BBCodes';
$L['adm_bbcodes_added'] = 'Новий BBCode успішно доданий.';
$L['adm_bbcodes_clearcache'] = 'Очистити HTML-кеш';
$L['adm_bbcodes_clearcache_confirm'] = 'Це очистить кеш всіх сторінок і повідомлень. Продовжити?';
$L['adm_bbcodes_clearcache_done'] = 'HTML-кеш очищений.';
$L['adm_bbcodes_confirm'] = 'Видалити даний BBCode?';
$L['adm_bbcodes_container'] = 'Контейнер';
$L['adm_bbcodes_convert_comments'] = 'Конвертувати коментарі в HTML';
$L['adm_bbcodes_convert_complete'] = 'Конвертування завершено';
$L['adm_bbcodes_convert_confirm'] = 'Ви впевнені? Операція необоротна! Якщо не впевнені, спочатку зробіть бекап бази даних.';
$L['adm_bbcodes_convert_forums'] = 'Конвертувати форуми в HTML';
$L['adm_bbcodes_convert_page'] = 'Конвертувати сторінки в HTML';
$L['adm_bbcodes_convert_pm'] = 'Конвертувати приватні повідомлення в HTML';
$L['adm_bbcodes_convert_users'] = 'Конвертувати підписи користувачів в HTML';
$L['adm_bbcodes_mode'] = 'Режим';
$L['adm_bbcodes_new'] = 'Новий BBCode';
$L['adm_bbcodes_other'] = 'Другі дії';
$L['adm_bbcodes_pattern'] = 'Шаблон';
$L['adm_bbcodes_postrender'] = 'Посте-рендер';
$L['adm_bbcodes_priority'] = 'Пріорітет';
$L['adm_bbcodes_removed'] = 'BBCode видалено.';
$L['adm_bbcodes_replacement'] = 'Заміна';
$L['adm_bbcodes_updated'] = 'BBCode оновлено.';
$L['adm_help_bbcodes'] = <<<HTM
<ul>
<li><strong>Ім\'я</strong> - Назва BBcode (тільки букви латинського алфавіту, цифри і підкреслення)</li>
<li><strong>Режим</strong> - Режим парсінгу, один з: &laquo;str&raquo; (str_replace), &laquo;ereg&raquo; (eregi_replace), &laquo;pcre&raquo; (preg_replace) або &laquo;callback&raquo; (preg_replace_callback)</li>
<li><strong>Шаблон</strong> - Рядок BBCode чи регулярний вираз</li>
<li><strong>Заміна</strong> - Рядок заміни, регулярна заміна або тіло функції зворотного виклику</li>
<li><strong>Контейнер</strong> - Чи є BBCode контейнером (наприклад, [bbcode] Якийсь текст [/ bbcode])</li>
<li><strong>Пріорітет</strong> - Пріоритет BBCode від 0 до 255. BBCode з меншим пріоритетом обробляється в першу чергу, стандартний середній пріоритет - 128.</li>
<li><strong>Плагін</strong> - Код плагіна / частини, якій належить BBCode. Тільки для плагінів.</li>
<li><strong>Пост-рендер</strong> - Застосовувати BBCode до сформованого HTML-кешу. Використовуйте тільки якщо ваш callback-код робить якісь обчислення на кожному запиті.</li>
</ul>
HTM;

$L['cfg_smilies'] = array('Увімкнути смайлики', '');

$L['info_desc'] = 'Включає підтримку ББ-кодів на сайті. Адміністратор може настроювати бб-коди за допомогою утиліти. Також додає підтримку кодів смайликів.';

?>
