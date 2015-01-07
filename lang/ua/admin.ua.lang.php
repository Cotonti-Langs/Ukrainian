<?php

/**
 * Ukrainian Language File for the Admin Module (admin.ua.lang.php)
 *
 * @package Cotonti
 * @version 0.9.5
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2011
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Common words
 */

$L['Extension'] = 'Розширення';
$L['Extensions'] = 'Розширення';
$L['Structure'] = 'Структура';

/**
 * Home Section
 */

$L['home_installable_error'] = 'Будь ласка, видаліть install.php до наступного оновлення або принаймні захистіть config.php від запису';

$L['home_newusers'] = 'Нові користувачі';
$L['home_newpages'] = 'Нові сторінки';
$L['home_newtopics'] = 'Нові теми';
$L['home_newposts'] = 'Нові повідомлення на форумі';
$L['home_newpms'] = 'Нові приватні повідомлення';

$L['home_db_rows'] = 'БД SQL, рядків';
$L['home_db_indexsize'] = 'БД SQL, розмір індексу (KB)';
$L['home_db_datassize'] = 'БД SQL, розмір даних (KB)';
$L['home_db_totalsize'] = 'БД SQL, загальний розмір (KB)';

$L['home_ql_b1_title'] = 'Налаштування сайту';
$L['home_ql_b1_1'] = 'Основні налаштування системи';
$L['home_ql_b1_2'] = 'Заголовки (тег &lt;title&gt;)';
$L['home_ql_b1_3'] = 'Теми і кодування';
$L['home_ql_b1_4'] = 'Слоти для меню в tpl-файлах';
$L['home_ql_b1_5'] = 'Мова сайту ';
$L['home_ql_b1_6'] = 'Час і дата';

$L['home_ql_b2_1'] = 'Структура сторінок і категорій';
$L['home_ql_b2_2'] = 'Додаткові поля для сторінок';
$L['home_ql_b2_3'] = 'Додаткові поля для категорій';
$L['home_ql_b2_4'] = 'Налаштування парсінгу';

$L['home_ql_b3_1'] = 'Налаштування користувачів';
$L['home_ql_b3_2'] = 'Додаткові поля для профілю';
$L['home_ql_b3_4'] = 'Права груп';

$L['home_update_notice'] = 'Доступне оновлення';
$L['home_update_revision'] = 'Поточна версія: <span style="color:#C00;font-weight:bold;">%1$s</span><br />Нова версія: <span style="color:#4E9A06;font-weight:bold;">%2$s</span>'; // %1/%2 Current Version/Revision %3/%4 Updated Version/Revision

/**
 * Config Section
 */

$L['core_forums'] = &$L['Forums'];
$L['core_locale'] = &$L['Locale'];
$L['core_main'] = 'Налаштування сайту';
$L['core_menus'] = &$L['Menus'];
$L['core_page'] = &$L['Pages'];
$L['core_parser'] = &$L['Parser'];
$L['core_performance'] = 'Продуктивність';
$L['core_pfs'] = &$L['PFS'];
$L['core_plug'] = &$L['Plugins'];
$L['core_pm'] = &$L['Private_Messages'];
$L['core_polls'] = &$L['Polls'];
$L['core_rss'] = &$L['RSS_Feeds'];
$L['core_structure'] = &$L['Categories'];
$L['core_theme'] = &$L['Themes'];
$L['core_time'] = 'Час і дата';
$L['core_title'] = 'Заголовки і мета-теги';
$L['core_users'] = &$L['Users'];

$L['cfg_struct_defaults'] = 'Налаштування за замовчуванням для структури';

/**
 * Shortcuts
 */
$L['short_admin'] = 'Адмін';
$L['short_config'] = 'Конфінг';
$L['short_delete'] = 'Видалити';
$L['short_open'] = 'Відкрити';
$L['short_options'] = 'Опції';
$L['short_rights'] = 'Права';
$L['short_struct'] = 'Структ';

/**
 * Config Section
 * Locale Subsection
 */

$L['cfg_forcedefaultlang'] = array('Примусове встановлення мови за замовчуванням для всіх користувачів', ' ');
$L['cfg_defaulttimezone'] = array('Часовий пояс за замовчуванням ',' Для гостей і при реєстрації, від -12 до +12');


/**
 * Config Section
 * Main Subsection
 */

$L['cfg_adminemail'] = array('E-mail адміністратора сайту ',' Обов\'язково!');
$L['cfg_clustermode'] = array('Серверний кластер ',' Виберіть Так, якщо використовується кластерна система балансування навантажень.');
$L['cfg_confirmlinks'] = array('Підтверджувати потенційно небезпечні дії');
$L['cfg_cookiedomain'] = array('Домен для cookies ',' За замовчуванням пусто');
$L['cfg_cookielifetime'] = array('Термін дії cookies ',' В секундах');
$L['cfg_cookiepath'] = array('Шлях для cookies ',' За замовчуванням пусто');
$L['cfg_devmode'] = array('Режим налагодження ',' Тільки для налагодження під localhost');
$L['cfg_easypagenav'] = array('Дружня паджінація ',' Використовує номери сторінок в посиланнях замість зсувів БД');
$L['cfg_hostip'] = array('IP-адреса сервера ',' Необов\'язково');
$L['cfg_jquery'] = array('Увімкнути jQuery', ' ');
$L['cfg_maintenance'] = array('Режим обслуговування ',' Доступу до сайту дозволено лише адміністраторам');
$L['cfg_maintenancereason'] = array('Причина режиму обслуговування ',' Коротко опишіть чому сайт знаходиться в режимі обслуговування');
$L['cfg_maxrowsperpage'] = array('Макс. кількість елементів на сторінку ',' Стандартний ліміт елементів для паджінаціі');
$L['cfg_parser'] = array('Парсер розмітки ',' За замовчуванням: простий текст');
$L['cfg_redirbkonlogin'] = array('Повернення після авторизації ',' Повернутись на сторінку, відвідану перед авторизацією');
$L['cfg_redirbkonlogout'] = array('Повернення після виходу ',' Повернутись на сторінку, відвідану перед виходом');
$L['cfg_shieldenabled'] = array('Увімкнути захист ',' Захист проти спаму і хаммерінга');
$L['cfg_shieldtadjust'] = array('Налаштування таймерів захисту (в %)', 'Чим вище, тим сильніший захист проти спаму');
$L['cfg_shieldzhammer'] = array('Анти-хаммер після * хітів ',' Чим менше, тим коротше термін автоблокування користувача');
$L['cfg_turnajax'] = array('Увімкнути Ajax ',' Працює тільки якщо jQuery включений');

/**
 * Config Section
 * Menus Subsection
 */

$L['cfg_banner'] = array('Банер<br />{HEADER_BANNER} в header.tpl', ' ');
$L['cfg_bottomline'] = array('Нижній рядок<br />{FOOTER_BOTTOMLINE} в footer.tpl', ' ');
$L['cfg_topline'] = array('Верхній рядок<br />{HEADER_TOPLINE} в header.tpl', ' ');

$L['cfg_menu1'] = array('Меню #1<br />{PHP.cfg.menu1} у всіх файлах .tpl', ' ');
$L['cfg_menu2'] = array('Меню #2<br />{PHP.cfg.menu2} у всіх файлах .tpl', ' ');
$L['cfg_menu3'] = array('Меню #3<br />{PHP.cfg.menu3} у всіх файлах .tpl', ' ');
$L['cfg_menu4'] = array('Меню #4<br />{PHP.cfg.menu4} у всіх файлах .tpl', ' ');
$L['cfg_menu5'] = array('Меню #5<br />{PHP.cfg.menu5} у всіх файлах .tpl', ' ');
$L['cfg_menu6'] = array('Меню #6<br />{PHP.cfg.menu6} у всіх файлах .tpl', ' ');
$L['cfg_menu7'] = array('Меню #7<br />{PHP.cfg.menu7} у всіх файлах .tpl', ' ');
$L['cfg_menu8'] = array('Меню #8<br />{PHP.cfg.menu8} у всіх файлах .tpl', ' ');
$L['cfg_menu9'] = array('Меню #9<br />{PHP.cfg.menu9} у всіх файлах .tpl', ' ');

$L['cfg_freetext1'] = array('Текст #1<br />{PHP.cfg.freetext1} у всіх файлах .tpl', ' ');
$L['cfg_freetext2'] = array('Текст #2<br />{PHP.cfg.freetext2} у всіх файлах .tpl', ' ');
$L['cfg_freetext3'] = array('Текст #3<br />{PHP.cfg.freetext3} у всіх файлах .tpl', ' ');
$L['cfg_freetext4'] = array('Текст #4<br />{PHP.cfg.freetext4} у всіх файлах .tpl', ' ');
$L['cfg_freetext5'] = array('Текст #5<br />{PHP.cfg.freetext5} у всіх файлах .tpl', ' ');
$L['cfg_freetext6'] = array('Текст #6<br />{PHP.cfg.freetext6} у всіх файлах .tpl', ' ');
$L['cfg_freetext7'] = array('Текст #7<br />{PHP.cfg.freetext7} у всіх файлах .tpl', ' ');
$L['cfg_freetext8'] = array('Текст #8<br />{PHP.cfg.freetext8} у всіх файлах .tpl', ' ');
$L['cfg_freetext9'] = array('Текст #9<br />{PHP.cfg.freetext9} у всіх файлах .tpl', ' ');

/**
 * Config Section
 * Performance Subsection
 */

$L['cfg_gzip'] = array('Gzip', 'Gzip-стиснення для вихідного HTML-коду');
$L['cfg_headrc_consolidate'] = array('Об\'єднувати ресурси header / footer (JS / CSS)');
$L['cfg_headrc_minify'] = array('Мінімізувати об\'єднані JS/CSS');
$L['cfg_jquery_cdn'] = array('Використовувати JQuery з CDN за цим посиланням , Приклад: https://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js');

/**
 * Config Section
 * Skins Subsection
 */

$L['cfg_charset'] = array('Набір символів (кодова сторінка)', ' ');
$L['cfg_disablesysinfos'] = array('Вимкнути час створення сторінки', '(в footer.tpl)');
$L['cfg_doctypeid'] = array('Тип документа', '&lt;!DOCTYPE&gt; в HTML-розмітці');
$L['cfg_forcedefaulttheme'] = array('Примусова встановлення теми за замовчуванням для всіх користувачів', ' ');
$L['cfg_homebreadcrumb'] = array('Посилання на головну сторінку в &laquo;навігаційному ланцюжку&raquo;', 'Встановити посилання на головну сторінку в початку &laquo;навігаційного ланцюжка&raquo;');
$L['cfg_keepcrbottom'] = array('Залишити копірайт в тезі {FOOTER_BOTTOMLINE}', '(в footer.tpl)');
$L['cfg_metakeywords'] = array('Ключові слова ',' (через кому)');
$L['cfg_msg_separate'] = array('Показувати повідомлення окремо для кожного джерела', '');
$L['cfg_separator'] = array('Розділювач ',' (використовується в навігаційній ланцюжку і т. д.)');
$L['cfg_showsqlstats'] = array('Відображати статистику SQL-запитів ',' (в footer.tpl)');

/**
 * Config Section
 * Title Subsection
 */

$L['cfg_maintitle'] = array('Назва сайту ',' Обов\'язково ');
$L['cfg_subtitle'] = array('Опис сайту ',' Необов\'язково');
$L['cfg_title_header'] = array('Основний заголовок ',' Опції: {MAINTITLE}, {DESCRIPTION}, {SUBTITLE}');
$L['cfg_title_header_index'] = array('Заголовок головної сторінки ',' Опції: {MAINTITLE}, {DESCRIPTION}, {SUBTITLE}');
$L['cfg_title_users_details'] = array('Користувачі - перегляд профілю ',' Опції: {USER}, {NAME}');
$L['cfg_subject_mail'] = array('Заголовок email', 'Опції: {SITE_TITLE}, {SITE_DESCRIPTION}, {MAIL_SUBJECT}');
$L['cfg_body_mail'] = array('Текст email', 'Опції: {SITE_TITLE}, {SITE_DESCRIPTION}, {SITE_URL}, {ADMIN_EMAIL}, {MAIL_BODY}, {MAIL_SUBJECT}');
/**
 * Config Section
 * Users Subsection
 */

$L['cfg_disablewhosonline'] = array('Вимкнути статистику &laquo;Хто онлайн&raquo;', 'Вмикається автоматично при вмиканні захисту');
$L['cfg_forcerememberme'] = array('Зафіксувати &quot;запам\'ятати мене&quot;', 'Використовуйте на мультидоменних сайтах або при випадкових виходах із системи');
$L['cfg_timedout'] = array('Затримка очікування в секундах ',' Після закінчення даного терміну користувач вважається що покинув сайт');
$L['cfg_usertextimg'] = array('Дозволити зображення і HTML-код в підписах користувачів ',' З причини безпеки рекомендується &laquo;Ні&raquo;!');

/**
 * Config Section
 * Common strings
 */
$L['cfg_css'] = array('Підключити CSS модуля / плагіна');
$L['cfg_editor'] = array('Редактор розмітки', '');
$L['cfg_markup'] = array('Увімкнути розмітку ',' Вмикає HTML / BBcode або інший парсінг, встановлений у вашій системі');

/**
 * Extension management
 */

$L['ext_already_installed'] = 'Дане розширення вже встановлено: {$name}';
$L['ext_auth_installed'] = 'Значення авторизації за замовчуванням встановлені';
$L['ext_auth_locks_updated'] = 'Блокування авторизації оновлені';
$L['ext_auth_uninstalled'] = 'Опції авторизації видалені';
$L['ext_bindings_installed'] = 'Встановлено зв\'язок хуків: {$cnt}';
$L['ext_bindings_uninstalled'] = 'Видалено зв\'язок хуків: {$cnt}';
$L['ext_config_error'] = 'Помилка налаштування конфігурації';
$L['ext_config_installed'] = 'Конфігурація встановлена';
$L['ext_config_uninstalled'] = 'Конфігурація видалена';
$L['ext_config_updated'] = 'Опції конфігурації оновлені';
$L['ext_config_struct_error'] = 'Помилка налаштування конфігурації структури';
$L['ext_config_struct_installed'] ='Конфігурація структури встановлена';
$L['ext_config_struct_updated'] = 'Опції конфігурації структури оновлені';
$L['ext_dependency_error'] = '{$dep_type} &quot;{$dep_name}&quot; потрібно {$type} &quot;{$name}&quot; не встановлено, жодного не обрано для встановлення';
$L['ext_executed_php'] = 'Виконано частину PHP-хендлера: {$ret}';
$L['ext_executed_sql'] = 'Виконана частина SQL-хендлера: {$ret}';
$L['ext_installing'] = 'Встановлення {$type} &quot;{$name}&quot;';
$L['ext_invalid_format'] = 'Розширення несумісне з Cotonti версії 0.9 і вище. Будь ласка, зв\'яжіться з розробниками.';
$L['ext_old_format'] = 'Це старий плагін для Genoa / Seditio. Він може працювати некоректно або не працювати зовсім.';
$L['ext_patch_applied'] = 'Встановлений патч {$f}: {$msg}';
$L['ext_patch_error'] = 'Помилка встановлення патча {$f}: {$msg}';
$L['ext_setup_not_found'] = 'Файл встановлень не знайдено: {$path}';
$L['ext_uninstall_confirm'] = 'Ви дійсно хочете видалити це розширення? Всі дані, пов\'язані з цим розширенням, будуть видалені без можливості відновлення.<br/><a href="{$url}">Так, видалити разом з даними.</a>';
$L['ext_uninstalling'] = 'Видалення {$type} &quot;{$name}&quot;';
$L['ext_up2date'] = '{$type} &quot;{$name}&quot; не потребує оновлення';
$L['ext_update_error'] = 'Помилка оновлення {$type} &quot;{$name}&quot;';
$L['ext_updated'] = '{$type} &quot;{$name}&quot; оновлено до версії {$ver}';
$L['ext_updating'] = 'Оновлення {$type} &quot;{$name}&quot;';

/**
 * Structure Section
 */

$L['adm_cat_exists'] = 'Категорія з таким кодом вже існує';
$L['adm_tpl_mode'] = 'Встановлення шаблона';
$L['adm_tpl_empty'] = 'За замовчуванням';
$L['adm_tpl_forced'] = 'ЯК';
$L['adm_tpl_parent'] = 'Як коренева категорія';
$L['adm_tpl_resyncalltitle'] = 'Синхронізувати всі лічильники сторінок';
$L['adm_tpl_resynctitle'] = 'Синхронізувати лічильники сторінок в розділі';
$L['adm_help_structure'] = 'Сторінки категорії &laquo;system&raquo; не відображаються в списках сторінок і є окремими, самостійними сторінками';

/**
 * Structure Section
 * Extrafields Subsection
 */

$L['adm_extrafields_desc'] = 'Створення / виправлення додаткових полів';
$L['adm_extrafields_all'] = 'Всі таблиці';
$L['adm_extrafields_table'] = 'Таблиця';
$L['adm_help_structure_extrafield'] = 'HTML-код поля встановиться в значення за умовчанням автоматично, якщо його очистити та оновити<br /><br />
<b>Нові теги в tpl-файлах:</b><br /><br />
<u>list.tpl:</u><br /><br />
&nbsp;&nbsp;&nbsp;{LIST_XXXXX}, {LIST_XXXXX_TITLE}<br /><br />
<u>list.group.tpl:</u><br /><br />
&nbsp;&nbsp;&nbsp;{LIST_XXXXX}, {LIST_XXXXX_TITLE}<br /><br />
<u>admin.structure.inc.tpl :</u><br /><br />
&nbsp;&nbsp;&nbsp;&lt;!-- BEGIN: OPTIONS --&gt; {ADMIN_STRUCTURE_XXXXX}, {ADMIN_STRUCTURE_XXXXX_TITLE} &lt;!-- END: OPTIONS --&gt;<br /><br />
&nbsp;&nbsp;&nbsp;&lt;!-- BEGIN: DEFULT --&gt; {ADMIN_STRUCTURE_FORMADD_XXXXX}, {ADMIN_STRUCTURE_FORMADD_XXXXX_TITLE} &lt;!-- END: DEFULT --&gt;<br /><br />
<br />';

/**
 * Users Section
 */

$L['adm_rightspergroup'] = 'Права груп';
$L['adm_maxsizesingle'] = 'Максимальний розмір одного файлу в розділі &laquo;'.$L['PFS'].'&raquo; (Кб)';
$L['adm_maxsizeallpfs'] = 'Максимальний розмір всіх файлів у роздiлi &laquo;'.$L['PFS'].'&raquo; (Кб)';
$L['adm_copyrightsfrom'] = 'Встановити права як у групі';
$L['adm_rights_maintenance'] = 'Дозволити авторизацію при включеному режимі обслуговування';

/**
 * Users Section
 * Extrafields Subsection
 */

$L['adm_help_users_extrafield'] = 'Поле &laquo;Базовий HTML&raquo; встановлюється в значення за умовчанням автоматично, якщо його очистити та оновити.<br /><br />
<b>Нові теги в tpl-файлах:</b><br /><br />
users.profile.tpl: {USERS_PROFILE_XXXXX}, {USERS_PROFILE_XXXXX_TITLE}<br /><br />
users.edit.tpl: {USERS_EDIT_XXXXX}, {USERS_EDIT_XXXXX_TITLE}<br /><br />
users.details.tpl: {USERS_DETAILS_XXXXX}, {USERS_DETAILS_XXXXX_TITLE}<br /><br />
user.register.tpl: {USERS_REGISTER_XXXXX}, {USERS_REGISTER_XXXXX_TITLE}<br /><br />
forums.posts.tpl: {FORUMS_POSTS_ROW_USERXXXXX}, {FORUMS_POSTS_ROW_USERXXXXX_TITLE}<br />';

/**
 * Plug Section
 */

$L['adm_defauth_guests'] = 'Права гостей за замовчуванням';
$L['adm_deflock_guests'] = 'Блокувати гостей по масці';
$L['adm_defauth_members'] = 'Права користувачів за замовчуванням';
$L['adm_deflock_members'] = 'Блокувати користувачів по масці';

$L['adm_present'] = 'Присутній';
$L['adm_missing'] = 'Відсутній';
$L['adm_paused'] = 'Виконання призупинено';
$L['adm_running'] = 'Запущено';
$L['adm_partrunning'] = 'Запущено частково';
$L['adm_partstopped'] = 'Частково зупинений';
$L['adm_installed'] = 'Встановлений';
$L['adm_notinstalled'] = 'Не встановлено';

$L['adm_plugsetup'] = 'Налаштування плагіна';
$L['adm_override_guests'] = 'Системне блокування: незареєстрованим і неактивованим користувачам доступ до адміністрування заборонений';
$L['adm_override_banned'] = 'Системна блокування: обліковий запис заблоковано';
$L['adm_override_admins'] = 'Системна блокування: адміністратори';

$L['adm_opt_install'] = 'Встановити';
$L['adm_opt_install_explain'] = 'Встановлення або скидання всіх компонентів плагіна в значення за замовчуванням';
$L['adm_opt_pause'] = 'Призупинити';
$L['adm_opt_pauseall'] = 'Призупинити все';
$L['adm_opt_pauseall_explain'] = 'Зупинка виконання всіх компонентів плагіна';
$L['adm_opt_update'] = 'Оновити';
$L['adm_opt_update_explain'] = 'Оновлення конфігурації і даних якщо файли розширення на носії вже оновлені';
$L['adm_opt_uninstall'] = 'Видалити';
$L['adm_opt_uninstall_explain'] = 'Вимкнення всіх компонентів плагіна без фізичного видалення файлів';
$L['adm_opt_unpause'] = 'Продовжити виконання';
$L['adm_opt_unpauseall'] = 'Продовжити виконання всіх';
$L['adm_opt_unpauseall_explain'] = 'Відновлення виконання всіх компонентів плагіна';

$L['adm_opt_setup_missing'] = 'Помилка: відсутній файл налаштувань!';

/**
 * Tools Section
 */

$L['adm_listisempty'] = 'Елементи списку відсутні';

/**
 * Other Section
 * Cache Subsection
 */

$L['adm_delcacheitem'] = 'Елемент кешу видалений';
$L['adm_internalcache'] = 'Внутрішній кеш';
$L['adm_purgeall_done'] = 'Кеш очищений повністю';
$L['adm_diskcache'] = 'Дисковий кеш';
$L['adm_cache_showall'] = 'Показати все';

/**
 * Other Section
 * Log Subsection
 */

$L['adm_log'] = 'Системний протокол';
$L['adm_infos'] = 'Інформація';
$L['adm_versiondclocks'] = 'Версії і таймери';
$L['adm_checkcorethemes'] = 'Перевірити файли ядра і скінів';
$L['adm_checkcorenow'] = 'Перевірити файли ядра!';
$L['adm_checkingcore'] = 'Перевіряю файли ядра ...';
$L['adm_checkthemes'] = 'Перевірити наявність всіх файлів в скін';
$L['adm_checkskin'] = 'Перевірити TPL-файли скіна';
$L['adm_checkingskin'] = 'Перевіряю скін ...';
$L['adm_check_ok'] = 'Ok';
$L['adm_check_missing'] = 'Відсутній';

/**
 * Other Section
 * Infos Subsection
 */

$L['adm_phpver'] = 'Версія PHP';
$L['adm_zendver'] = 'Версія Zend';
$L['adm_interface'] = 'Інтерфейс веб-сервер / PHP';
$L['adm_os'] = 'Операційна система';
$L['adm_clocks'] = 'Таймери';
$L['adm_time1'] = '# 1: Чистий час сервера';
$L['adm_time2'] = '# 2: Час щодо GMT, повертається сервером';
$L['adm_time3'] = '# 3: Час щодо GMT + зрушення сервера (Cotonti reference)';
$L['adm_time4'] = '# 4: Ваш місцевий час з особистих налаштувань';
$L['adm_help_versions'] = 'Змініть часовий пояс сервера для коректного встановлення таймера # 3. <br />
Таймер # 4 залежить від налаштувань часового поясу в вашому профілі. <br />
Таймери # 1 і # 2 ігноруються системою. ';

/**
 * Common Entries
 */

$L['adm_area'] = 'Зона';
$L['adm_clicktoedit'] = '(виправлення)';
$L['adm_confirm'] = 'Підтвердити';
$L['adm_done'] = 'Виконано';
$L['adm_failed'] = 'Помилка';
$L['adm_from'] = 'Від';
$L['adm_more'] = 'Показати все ...';
$L['adm_purgeall'] = 'Очистити все';
$L['adm_queue_unvalidated'] = 'Публікація поставлена в чергу';
$L['adm_queue_validated'] = 'Публікація затверджена';
$L['adm_required'] = '(обов\'язково)';
$L['adm_setby'] = 'Встановлено';
$L['adm_to'] = 'Кому';
$L['adm_totalsize'] = 'Загальний об\'єм';
$L['adm_warnings'] = 'Попередження';

$L['editdeleteentries'] = 'Правка | видалення';
$L['viewdeleteentries'] = 'Перегляд | видалення';

$L['alreadyaddnewentry'] = 'Новий запис додано';
$L['alreadyupdatednewentry'] = 'Запис оновлено';
$L['alreadydeletednewentry'] = 'Запис видалено';

/**
 * Extra Fields (Common Entries for Pages & Structure & Users)
 */

$L['adm_extrafields'] = 'Додаткові поля';
$L['adm_extrafield_added'] = 'Нове поле додано';
$L['adm_extrafield_not_added'] = 'Помилка! Нове поле не додано ';
$L['adm_extrafield_updated'] = 'Поле "%1$s" відредаговано';
$L['adm_extrafield_not_updated'] = 'Помилка! Поле "%1$s" не відредаговано ';
$L['adm_extrafield_removed'] = 'Поле видалено';
$L['adm_extrafield_not_removed'] = 'Помилка! Поле не видалено ';
$L['adm_extrafield_confirmdel'] = 'Ви справді хочете видалити поле? Всі дані цього поля будуть втрачені! ';
$L['adm_extrafield_confirmupd'] = 'Ви справді хочете редагувати поле? Деякі дані цього поля можуть бути втрачені. ';
$L['adm_extrafield_default'] = 'Значення за замовчуванням';
$L['adm_extrafield_required'] = 'Обов\'язкове';
$L['adm_extrafield_parse'] = 'Парсsнг';
$L['adm_extrafield_enable'] = 'Дозволити';
$L['adm_extrafield_params'] = 'Параметри поля';

$L['extf_Name'] = 'Назва поля';
$L['extf_Type'] = 'Тип поля';
$L['extf_Base_HTML'] = 'HTML-код поля';
$L['extf_Page_tags'] = 'Теги';
$L['extf_Description'] = 'Опис поля (_TITLE)';

$L['adm_extrafield_new'] = 'Нове поле';
$L['adm_extrafield_noalter'] = 'Не додавати нове поле в БД, тільки зареєструвати як додаткове';
$L['adm_extrafield_selectable_values'] = 'Значення для select і radio (через кому)';
$L['adm_help_extrafield'] = 'HTML-код поля встановлюється в значення за умовчанням автоматично, якщо його очистити та оновити';

/**
 * Help messages that still don't work
 */

$L['adm_help_cache'] = 'Недоступно';
$L['adm_help_check1'] = 'Недоступно';
$L['adm_help_check2'] = 'Недоступно';
$L['adm_help_config']= 'Недоступно';

?>