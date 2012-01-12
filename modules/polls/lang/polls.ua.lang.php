<?php
/**
 * Ukrainian Language File for the Polls Module (polls.ua.lang.php)
 *
 * @package polls
 * @version 0.9.5
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2008-2011
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Admin
 */

$L['adm_help_polls'] = 'При створенні опитування порожні відповіді не обліковуються і автоматично видаляються. <br /> Після створення опитування не рекомендується редагувати його, так як це може вплинути на хід голосування.';
$L['adm_polls_forumpolls'] = 'Опитування в форумах (останні угорі) :';
$L['adm_polls_indexpolls'] = 'Опитування на головній (останні угорі) :';
$L['adm_polls_msg916_bump'] = 'Опитування піднято!';
$L['adm_polls_msg916_deleted'] = 'Опитування видалено!';
$L['adm_polls_msg916_reset'] = 'Результати опитування обнулені!';
$L['adm_polls_on_page'] = 'на сторінці';
$L['adm_polls_polltopic'] = 'Опитування';
$L['adm_polls_nopolls'] = 'Опитувань нема';
$L['adm_polls_bump'] = 'Підняти';

$L['poll'] = 'Опитування';
$L['polls_alreadyvoted'] = 'Ви вже проголосували в цьому опитуванні';
$L['polls_created'] = 'Опитування створено';
$L['polls_error_count'] = 'Кількість варіантів відповіді повинно бути не менше двох';
$L['polls_error_title'] = 'Назва опитування занадто коротка або відсутня';
$L['polls_locked'] = 'Опитування заблоковано'; // New in 1.0.0
$L['polls_multiple'] = 'Дозволити вибір двох і більше варіантів';
$L['polls_notyetvoted'] = 'Ви можете голосувати тут';
$L['polls_registeredonly'] = 'Тільки зареєстровані користувачі можуть голосувати.';
$L['polls_since'] = 'с';
$L['polls_updated'] = 'Опитування оновлено';
$L['polls_viewarchives'] = 'Всі опитування';
$L['polls_viewresults'] = 'Підсумки';
$L['polls_Vote'] = 'Голосувати';
$L['polls_votecasted'] = 'Виконано, ваш голос зараховано';
$L['polls_votes'] = 'голосів';

/**
 * Plugin Config
 */

$L['cfg_del_dup_options'] = array('Примусове видалення дубльованих відповідей ',' Видаляти відповідь яка повторюється навіть якщо вона вже внесена в базу даних');
$L['cfg_ip_id_polls'] = array('Спосіб запам\'ятовування голосу', ' ');
$L['cfg_max_options_polls'] = array('Максимальна кількість варіантів відповіді ',' Зайві варіанти будуть автоматично видалятись при перевищенні ліміту');
$L['cfg_maxpolls'] = array('Кількість відображення опитувань на головній');
$L['cfg_mode'] = array('Режим відображення опитувань на головній', '&laquo;Останні&raquo; &mdash; відображення останнього опитування (опитувань)<br />&laquo;Випадкові&raquo; &mdash; відображення випадкового опитування (опитувань)');
$L['cfg_mode_params'] = array('Останні', 'Випадкові');

$L['info_desc'] = 'Дозволяє користувачам голосувати за один або кілька варіантів відповіді';

/**
 * Moved from theme.lang
 */

$L['polls_voterssince'] = 'опитаних с';
$L['polls_allpolls'] = 'Всі опитування';

?>