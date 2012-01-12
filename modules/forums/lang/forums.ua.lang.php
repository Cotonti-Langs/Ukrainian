<?php
/**
 * Ukrainian Language File for the Forums Module (forums.uа.lang.php)
 *
 * @package forums
 * @version 0.9.5
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2011
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Forums Config
 */

$L['cfg_antibumpforums'] = array('Захист від &laquo;підняття&raquo; повідомлень (anti-bump)', 'Заборонити користувачам створювати 2 повідомлення підряд в темі');
$L['cfg_hideprivateforums'] = array('Приховувати приватні форуми', ' ');
$L['cfg_hottopictrigger'] = array('Кількість повідомлень для &laquo;популярної&raquo; теми', ' ');
$L['cfg_maxpostsperpage'] = array('Максимальна. кількість повідомлень на сторінці', ' ');
$L['cfg_maxtopicsperpage'] = array('Максимальна кількість тем на сторінці', ' ');
$L['cfg_mergeforumposts'] = array('Об\'єднувати повідомлення', 'Об\'єднувати повідомлення які йдуть піряд від одного користувача (антибамповий захист повинен бути відключений)');
$L['cfg_mergetimeout'] = array('Час очікування для об\'єднання повідомлень', 'Послідовно опубліковані повідомлення одного користувача не будуть об\'єднані при перевищенні зазначеного часу (в годинах), вимагає налаштування \'Об\'єднувати повідомлення\' (0 для відключення)');
$L['cfg_minpostlength'] = array('Мінімальна. довжина повідомлення', ' ');
$L['cfg_mintitlelength'] = array('Мінімальна. довжина заголовка теми', ' ');
$L['cfg_title_posts'] = array('Формат заголовка теми на форумі', 'Опції: {FORUM}, {SECTION}, {TITLE}');
$L['cfg_title_topics'] = array('Формат заголовка розділу форуму', 'Опції: {FORUM}, {SECTION}');

$L['cfg_allowusertext'] = array('Показувати підписи');
$L['cfg_allowbbcodes'] = array('Дозволити BBCodes');
$L['cfg_allowsmilies'] = array('Дозволити смайлики');
$L['cfg_allowprvtopics'] = array('Дозволити приватні теми');
$L['cfg_allowviewers'] = array('Увімкнути відображення хто переглядає розділ');
$L['cfg_allowpolls'] = array('Увімкнути опитування');
$L['cfg_countposts'] = array('Увімкнути лічильник повідомлень');
$L['cfg_autoprune'] = array('Автоматична очистка тем через * днів');
$L['cfg_defstate'] = array('За замовчуванням');
$L['cfg_defstate_params'] = array('Згорнути', 'Розгорнути');

$L['info_desc'] = 'Модуль форумів для Cotonti: розділи, підрозділи, теми і повідомлення. Простий форум для сайтів з спільнотою або підтримкою.';

/**
 * Main
 */

$L['forums_post'] = 'Повідомлення';
$L['forums_posts'] = 'Повідомлень';
$L['forums_topic'] = 'Тема';
$L['forums_topics'] = 'Теми';

$L['forums_antibump'] = 'Активована система захисту від підняття тем: ви не можете створювати кілька повідомлень підряд';
$L['forums_keepmovedlink'] = 'Залишити посилання у старому розділі';
$L['forums_markallasread'] = 'Позначити всі повідомлення як прочитані';
$L['forums_mergetime'] = 'Додано %1$s потому:';
$L['forums_messagetooshort'] = 'Повідомлення занадто коротке';
$L['forums_newtopic'] = 'Нова тема';
$L['forums_newpoll'] = 'Нове опитування';
$L['forums_titletooshort'] = 'Назва теми занадто коротка або відсутня';
$L['forums_topiclocked'] = 'Тема заблокована, нові повідомлення заборонені';
$L['forums_topicoptions'] = 'Опції теми';
$L['forums_updatedby'] = '<br /><em>Відредаговано: %1$s (%2$s, %3$s тому)</em>';
$L['forums_postedby'] = 'Опублікував(ла)';

$L['forums_privatetopic1'] = '&laquo;Приватна&raquo; тема';
$L['forums_privatetopic2'] = 'Перегляд і відповіді в темі будуть доступні тільки модераторам форумів і вам як автору теми';
$L['forums_privatetopic'] = 'Це приватна тема: доступ до перегляду та відповідей доступний тільки для модераторів та автора теми.';

$L['forums_searchinforums'] = 'Пошук в форумах';
$L['forums_markasread'] = 'Позначити все як прочитане';
$L['forums_foldall'] = 'Згорнути все';
$L['forums_unfoldall'] = 'Розгорнути все';
$L['forums_viewers'] = 'Переглядають';

$L['forums_nonewposts'] = 'Нових повідомлень нема';
$L['forums_newposts'] = 'Є нові півідомлення';
$L['forums_nonewpostspopular'] = 'Популярна (нема нових)';
$L['forums_newpostspopular'] = 'Популярна (е нові)';
$L['forums_sticky'] = 'Тема закріплена (немає нових)';
$L['forums_newpostssticky'] = 'Тема закріплена (є нові)';
$L['forums_locked'] = 'Тема закрита (нема нових)';
$L['forums_newpostslocked'] = 'Тема закрита (є нові)';
$L['forums_announcment'] = 'Оголошення';
$L['forums_newannouncment'] = 'Нові оголошення';
$L['forums_movedoutofthissection'] = 'Перенесено в інший розділ';

$L['forums_announcement'] = 'Оголошення';
$L['forums_bump'] = 'Підняти';
$L['forums_makesticky'] = 'Закріпити тему';
$L['forums_private'] = 'Приватна тема';

$L['forums_explainbump'] = 'Підняти тему (до оновлення іншої теми)';
$L['forums_explainlock'] = 'Заблокувати тему (заборонити нові повідомлення)';
$L['forums_explainsticky'] = 'Закріпити тему (до скидання статусу в значення за замовчуванням)';
$L['forums_explainannounce'] = 'Позначити тему як оголошення';
$L['forums_explainprivate'] = 'Приватна тема (доступ тільки для модераторів та автора теми)';
$L['forums_explaindefault'] = 'Скинути статус в значення за замовчуванням';
$L['forums_explaindelete'] = 'Видалити тему';

$L['forums_confirm_delete_topic'] = 'Ви дійсно хочете видалити цю тему?';
$L['forums_confirm_delete_post'] = 'Ви дійсно хочете видалити це повідомлення?';

/**
 * Unused?
 */

$L['forums_polltooshort'] = 'Кількість варіантів відповіді повинно бути не менше двох';
$L['for_onlinestatus0'] = 'ON-LINE';
$L['for_onlinestatus1'] = 'OFF-LINE';

?>