<?php

/**
 * Ukrainian Language File for the Admin Module (admin.ua.lang.php)
 *
 * @package Cotonti
 * @copyright (c) Cotonti Translators Team
 * @license https://github.com/Cotonti/Cotonti/blob/master/License.txt
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Common words
 */
$L['Extension'] = 'Розширення';
$L['Extensions'] = 'Розширення';
$L['Parameter'] = 'Параметр';
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
$L['home_ql_b1_5'] = 'Мова сайту';
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
$L['core_locale_desc'] = 'Установка мови та часового поясу за замовчуванням';
$L['core_main'] = 'Налаштування сайту';
$L['core_main_desc'] = 'Налаштування сайту, глобальні налаштування списків';
$L['core_menus'] = &$L['Menus'];
$L['core_menus_desc'] = 'Слоти для публікації простої текстової інформації';
$L['core_page'] = &$L['Pages'];
$L['core_parser'] = &$L['Parser'];
$L['core_performance'] = 'Продуктивність';
$L['core_performance_desc'] = 'Gzip-стиснення, консолідатор ресурсів, включення Ajax і jQuery';
$L['core_pfs'] = &$L['PFS'];
$L['core_plug'] = &$L['Plugins'];
$L['core_pm'] = &$L['Private_Messages'];
$L['core_polls'] = &$L['Polls'];
$L['core_rss'] = &$L['RSS_Feeds'];
$L['core_security'] = &$L['Security'];
$L['core_security_desc'] = 'Захист, CAPTCHA, режими налагодження та обслуговування';
$L['core_sessions'] = 'Сесії';
$L['core_sessions_desc'] = 'Налаштування cookies та фіксування авторизаций';
$L['core_structure'] = &$L['Categories'];
$L['core_theme'] = &$L['Themes'];
$L['core_theme_desc'] = 'Налаштування теми та елементів її розмітки';
$L['core_time'] = 'Час і дата';
$L['core_title'] = 'Заголовки і мета-теги';
$L['core_title_desc'] = 'Налаштування META Title для головної та внутрішніх сторінок сайту';

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
$L['cfg_forcedefaultlang'] = 'Примусове встановлення мови за замовчуванням для всіх користувачів';
$L['cfg_forcedefaultlang_hint'] = '';
$L['cfg_defaulttimezone'] = 'Часовий пояс за замовчуванням';
$L['cfg_defaulttimezone_hint'] = 'Для гостей і при реєстрації, від -12 до +12';

/**
 * Config Section
 * Main Subsection
 */
$L['cfg_adminemail'] = 'E-mail адміністратора сайту';
$L['cfg_adminemail_hint'] = 'Обов’язково!';
$L['cfg_clustermode'] = 'Серверний кластер';
$L['cfg_clustermode_hint'] = 'Виберіть Так, якщо використовується кластерна система балансування навантажень.';
$L['cfg_confirmlinks'] = 'Підтверджувати потенційно небезпечні дії';
$L['cfg_default_show_installed'] = 'Показувати тільки встановлені розширення за замовчуванням';
$L['cfg_easypagenav'] = 'Дружня паджінація';
$L['cfg_easypagenav_hint'] = 'Використовує номери сторінок в посиланнях замість зсувів БД';
$L['cfg_hostip'] = 'IP-адреса сервера';
$L['cfg_hostip_hint'] = 'Необов’язково';
$L['cfg_maxrowsperpage'] = 'Макс. кількість елементів на сторінку';
$L['cfg_maxrowsperpage_hint'] = 'Стандартний ліміт елементів для паджінаціі';
$L['cfg_parser'] = 'Парсер розмітки';
$L['cfg_parser_hint'] = 'За замовчуванням: звичайний текст';

/**
 * Config Section
 * Menus Subsection
 */
$L['cfg_banner'] = 'Банер<br />{HEADER_BANNER} в header.tpl';
$L['cfg_banner_hint'] = '';
$L['cfg_bottomline'] = 'Нижній рядок<br />{FOOTER_BOTTOMLINE} в footer.tpl';
$L['cfg_bottomline_hint'] = '';
$L['cfg_topline'] = 'Верхній рядок<br />{HEADER_TOPLINE} в header.tpl';
$L['cfg_topline_hint'] = '';

$L['cfg_menu1'] = 'Меню #1<br />{PHP.cfg.menu1} у всіх файлах .tpl';
$L['cfg_menu1_hint'] = '';
$L['cfg_menu2'] = 'Меню #2<br />{PHP.cfg.menu2} у всіх файлах .tpl';
$L['cfg_menu2_hint'] = '';
$L['cfg_menu3'] = 'Меню #3<br />{PHP.cfg.menu3} у всіх файлах .tpl';
$L['cfg_menu3_hint'] = '';
$L['cfg_menu4'] = 'Меню #4<br />{PHP.cfg.menu4} у всіх файлах .tpl';
$L['cfg_menu4_hint'] = '';
$L['cfg_menu5'] = 'Меню #5<br />{PHP.cfg.menu5} у всіх файлах .tpl';
$L['cfg_menu5_hint'] = '';
$L['cfg_menu6'] = 'Меню #6<br />{PHP.cfg.menu6} у всіх файлах .tpl';
$L['cfg_menu6_hint'] = '';
$L['cfg_menu7'] = 'Меню #7<br />{PHP.cfg.menu7} у всіх файлах .tpl';
$L['cfg_menu7_hint'] = '';
$L['cfg_menu8'] = 'Меню #8<br />{PHP.cfg.menu8} у всіх файлах .tpl';
$L['cfg_menu8_hint'] = '';
$L['cfg_menu9'] = 'Меню #9<br />{PHP.cfg.menu9} у всіх файлах .tpl';
$L['cfg_menu9_hint'] = '';

$L['cfg_freetext1'] = 'Текст #1<br />{PHP.cfg.freetext1} у всіх файлах .tpl';
$L['cfg_freetext1_hint'] = '';
$L['cfg_freetext2'] = 'Текст #2<br />{PHP.cfg.freetext2} у всіх файлах .tpl';
$L['cfg_freetext2_hint'] = '';
$L['cfg_freetext3'] = 'Текст #3<br />{PHP.cfg.freetext3} у всіх файлах .tpl';
$L['cfg_freetext3_hint'] = '';
$L['cfg_freetext4'] = 'Текст #4<br />{PHP.cfg.freetext4} у всіх файлах .tpl';
$L['cfg_freetext4_hint'] = '';
$L['cfg_freetext5'] = 'Текст #5<br />{PHP.cfg.freetext5} у всіх файлах .tpl';
$L['cfg_freetext5_hint'] = '';
$L['cfg_freetext6'] = 'Текст #6<br />{PHP.cfg.freetext6} у всіх файлах .tpl';
$L['cfg_freetext6_hint'] = '';
$L['cfg_freetext7'] = 'Текст #7<br />{PHP.cfg.freetext7} у всіх файлах .tpl';
$L['cfg_freetext7_hint'] = '';
$L['cfg_freetext8'] = 'Текст #8<br />{PHP.cfg.freetext8} у всіх файлах .tpl';
$L['cfg_freetext8_hint'] = '';
$L['cfg_freetext9'] = 'Текст #9<br />{PHP.cfg.freetext9} у всіх файлах .tpl';
$L['cfg_freetext9_hint'] = '';

/**
 * Config Section
 * Performance Subsection
 */
$L['cfg_gzip'] = 'Gzip';
$L['cfg_gzip_hint'] = 'Gzip-стиснення для вихідного HTML-коду. Не вмикайте цю опцію, якщо ваш сервер вже застосовує Gzip до сторінок сайту. Перевірте, чи включено Gzip-стиснення на вашому сайті, за допомогою цього інструменту: <a target="_blank" href="http://www.whatsmyip.org/http-compression-test/">HTTP Compression Test</a>';
$L['cfg_headrc_consolidate'] = 'Об’єднувати ресурси header/footer (JS/CSS)';
$L['cfg_headrc_minify'] = 'Мінімізувати об’єднані JS/CSS';
$L['cfg_jquery_cdn'] = 'Використовувати jQuery з CDN за цим посиланням';
$L['cfg_jquery_cdn_hint'] = 'Приклад: https://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js';
$L['cfg_jquery'] = 'Увімкнути jQuery';
$L['cfg_jquery_hint'] = '';
$L['cfg_turnajax'] = 'Увімкнути Ajax';
$L['cfg_turnajax_hint'] = 'Працює тільки якщо jQuery включений';

/**
 * Config Section
 * Security Subsection
 */
$L['cfg_captchamain'] = 'Captcha за замовчуванням';
$L['cfg_captcharandom'] = 'Випадковий вибір captcha';
$L['cfg_hashfunc'] = 'Функція хешування за замовчуванням';
$L['cfg_hashfunc_hint'] = 'Використовується для хешурвання паролів';
$L['cfg_referercheck'] = 'Перевірка referer для форм';
$L['cfg_referercheck_hint'] = 'Запобігає междоменной постинг';
$L['cfg_shieldenabled'] = 'Увімкнути захист';
$L['cfg_shieldenabled_hint'] = 'Захист проти спаму і хаммерінга';
$L['cfg_shieldtadjust'] = 'Налаштування таймерів захисту (у %)';
$L['cfg_shieldtadjust_hint'] = 'Чим вище, тим сильніше захист проти спаму';
$L['cfg_shieldzhammer'] = 'Анти-хаммер після * хітів';
$L['cfg_shieldzhammer_hint'] = 'Чим менше, тим коротше термін автоблокування користувача';
$L['cfg_devmode'] = 'Режим налагодження';
$L['cfg_devmode_hint'] = 'Тільки для налагодження під localhost';
$L['cfg_maintenance'] = 'Режим обслуговування';
$L['cfg_maintenance_hint'] = 'Доступу до сайту дозволено тільки адміністраторам';
$L['cfg_maintenancereason'] = 'Причина режиму обслуговування';
$L['cfg_maintenancereason_hint'] = 'Коротко опишіть чому сайт знаходиться в режимі обслуговування';

/**
 * Config Section
 * Sessions Subsection
 */
$L['cfg_cookiedomain'] = 'Домен для cookies';
$L['cfg_cookiedomain_hint'] = 'За замовчуванням порожньо';
$L['cfg_cookielifetime'] = 'Термін дії cookies';
$L['cfg_cookielifetime_hint'] = 'В секундах';
$L['cfg_cookiepath'] = 'Шлях для cookies';
$L['cfg_cookiepath_hint'] = 'За замовчуванням порожньо';
$L['cfg_forcerememberme'] = 'Зафіксувати &quot; запам’ятати мене &quot;';
$L['cfg_forcerememberme_hint'] = 'Використовуйте на Мультидоменні сайтах або при випадкових виходах з системи';
$L['cfg_timedout'] = 'Затримка очікування в секундах';
$L['cfg_timedout_hint'] = 'Після закінчення даного терміну користувач вважається покинув сайт';
$L['cfg_redirbkonlogin'] = 'Повернення після авторизації';
$L['cfg_redirbkonlogin_hint'] = 'Назад на сторінку, відвіданих перед авторизацією';
$L['cfg_redirbkonlogout'] = 'Повернення після виходу';
$L['cfg_redirbkonlogout_hint'] = 'Назад на сторінку, відвіданих перед виходом';

/**
 * Config Section
 * Themes Subsection
 */
$L['cfg_charset'] = 'Набір символів (кодова сторінка)';
$L['cfg_charset_hint'] = '';
$L['cfg_disablesysinfos'] = 'Вимкнути час створення сторінки';
$L['cfg_disablesysinfos_hint'] = '(у footer.tpl)';
$L['cfg_doctypeid'] = 'Тип документа';
$L['cfg_doctypeid_hint'] = '&lt;!DOCTYPE&gt; в HTML-розмітці';
$L['cfg_forcedefaulttheme'] = 'Примусове встановлення теми за замовчуванням для всіх користувачів';
$L['cfg_forcedefaulttheme_hint'] = '';
$L['cfg_homebreadcrumb'] = 'Посилання на головну сторінку в &laquo;навігаційному ланцюжку&raquo;';
$L['cfg_homebreadcrumb_hint'] = 'Встановити посилання на головну сторінку на початку &laquo;навігаційного ланцюжка&raquo;';
$L['cfg_keepcrbottom'] = 'Залишити копірайт в тегу {FOOTER_BOTTOMLINE}';
$L['cfg_keepcrbottom_hint'] = '(у footer.tpl)';
$L['cfg_metakeywords'] = 'Ключові слова';
$L['cfg_metakeywords_hint'] = '(через кому)';
$L['cfg_msg_separate'] = 'Показувати повідомлення окремо для кожного джерела';
$L['cfg_msg_separate_hint'] = '';
$L['cfg_separator'] = 'Роздільник';
$L['cfg_separator_hint'] = '(використовується в навігаційній ланцюжку і т. Д.)';
$L['cfg_showsqlstats'] = 'Відображати статистику SQL-запитів';
$L['cfg_showsqlstats_hint'] = '(у footer.tpl)';

/**
 * Config Section
 * Title Subsection
 */
$L['cfg_maintitle'] = 'Назва сайту';
$L['cfg_maintitle_hint'] = 'Обов’язково';
$L['cfg_subtitle'] = 'Опис сайту';
$L['cfg_subtitle_hint'] = 'Необов’язково';
$L['cfg_title_header'] = 'Основний заголовок';
$L['cfg_title_header_hint'] = 'Опції: {MAINTITLE}, {DESCRIPTION}, {SUBTITLE}';
$L['cfg_title_header_index'] = 'Заголовок головної сторінки';
$L['cfg_title_header_index_hint'] = 'Опції: {MAINTITLE}, {DESCRIPTION}, {SUBTITLE}';
$L['cfg_title_users_details'] = 'Користувачі - перегляд профілю';
$L['cfg_title_users_details_hint'] = 'Опції: {USER}, {NAME}';
$L['cfg_subject_mail'] = 'Заголовок email';
$L['cfg_subject_mail_hint'] = 'Опції: {SITE_TITLE}, {SITE_DESCRIPTION}, {MAIL_SUBJECT}';
$L['cfg_body_mail'] = 'Текст email';
$L['cfg_body_mail_hint'] = 'Опції: {SITE_TITLE}, {SITE_DESCRIPTION}, {SITE_URL}, {ADMIN_EMAIL}, {MAIL_BODY}, {MAIL_SUBJECT}';

/**
 * Config Section
 * Common strings
 */
$L['cfg_css'] = 'Підключити CSS модуля/плагіна';
$L['cfg_editor'] = 'Редактор розмітки';
$L['cfg_editor_hint'] = '';
$L['cfg_markup'] = 'Увімкнути розмітку';
$L['cfg_markup_hint'] = 'Вмикає HTML/BBcode або інший парсінг, встановлений у вашій системі';

/**
 * Extension management
 */
$L['ext_already_installed'] = 'Дане розширення вже встановлено: {$name}';
$L['ext_auth_installed'] = 'Значення авторизації за замовчуванням встановлені';
$L['ext_auth_locks_updated'] = 'Блокування авторизації оновлені';
$L['ext_auth_uninstalled'] = 'Опції авторизації видалені';
$L['ext_bindings_installed'] = 'Встановлено зв’язок хуків: {$cnt}';
$L['ext_bindings_uninstalled'] = 'Видалено зв’язок хуків: {$cnt}';
$L['ext_config_error'] = 'Помилка налаштування конфігурації';
$L['ext_config_installed'] = 'Конфігурація встановлена';
$L['ext_config_uninstalled'] = 'Конфігурація видалена';
$L['ext_config_updated'] = 'Опції конфігурації оновлені';
$L['ext_config_struct_error'] = 'Помилка налаштування конфігурації структури';
$L['ext_config_struct_installed'] = 'Конфігурація структури встановлена';
$L['ext_config_struct_updated'] = 'Опції конфігурації структури оновлені';
$L['ext_dependency_error'] = '{$dep_type} &quot;{$dep_name}&quot; потрібно {$type} &quot;{$name}&quot; не встановлено, жодного не обрано для встановлення';
$L['ext_dependency_uninstall_error'] = '{$type} &quot;{$name}&quot; використовує дане розширення і повинен бути вилучений в першу чергу';
$L['ext_executed_php'] = 'Виконано частину PHP-хендлера: {$ret}';
$L['ext_executed_sql'] = 'Виконана частина SQL-хендлера: {$ret}';
$L['ext_installing'] = 'Встановлення {$type} &quot;{$name}&quot;';
$L['ext_invalid_format'] = 'Розширення несумісне з Cotonti версії 0.9 і вище. Будь ласка, зв’яжіться з розробниками.';
$L['ext_old_format'] = 'Це старий плагін для Genoa / Seditio. Він може працювати некоректно або не працювати зовсім.';
$L['ext_patch_applied'] = 'Встановлений патч {$f}: {$msg}';
$L['ext_patch_error'] = 'Помилка встановлення патча {$f}: {$msg}';
$L['ext_requires_modules'] = 'Необхідні модулі';
$L['ext_requires_plugins'] = 'Необхідні плагіни';
$L['ext_recommends_modules'] = 'Рекомендовані модулі';
$L['ext_recommends_plugins'] = 'Рекомендовані плагіни';
$L['ext_setup_not_found'] = 'Файл встановлень не знайдено: {$path}';
$L['ext_uninstall_confirm'] = 'Ви дійсно хочете видалити це розширення? Всі дані, пов’язані з цим розширенням, будуть видалені без можливості відновлення.<br /><a href="{$url}">Так, видалити разом з даними.</a>';
$L['ext_uninstalling'] = 'Видалення {$type} &quot;{$name}&quot;';
$L['ext_up2date'] = '{$type} &quot;{$name}&quot; не потребує оновлення';
$L['ext_update_error'] = 'Помилка оновлення {$type} &quot;{$name}&quot;';
$L['ext_updated'] = '{$type} &quot;{$name}&quot; оновлено до версії {$ver}';
$L['ext_updating'] = 'Оновлення {$type} &quot;{$name}&quot;';

/**
 * Extension categories
 */
$L['ext_cat_administration-management'] = 'Адміністрування і управління';
$L['ext_cat_commerce'] = 'Електронна комерція';
$L['ext_cat_community-social'] = 'Співтовариства та соціальне';
$L['ext_cat_customization-i18n'] = 'Тонка настройка і I18n';
$L['ext_cat_data-apis'] = 'Потоки даних і API';
$L['ext_cat_development-maintenance'] = 'Розробка та підтримка';
$L['ext_cat_editor-parser'] = 'Редактори і розмітка';
$L['ext_cat_files-media'] = 'Файли та медіа';
$L['ext_cat_forms-feedback'] = 'Форми і зворотний зв’язок';
$L['ext_cat_gaming-clans'] = 'Ігри та клани';
$L['ext_cat_intranet-groupware'] = 'Корпоративний сектор';
$L['ext_cat_misc-ext'] = 'Інше';
$L['ext_cat_mobile-geolocation'] = 'Мобільність і геолокація';
$L['ext_cat_navigation-structure'] = 'Навігація і структура';
$L['ext_cat_performance-seo'] = 'Продуктивність і SEO';
$L['ext_cat_publications-events'] = 'Публікації та події';
$L['ext_cat_security-authentication'] = 'Безпека та аутентифікація';
$L['ext_cat_utilities-tools'] = 'Інструменти';
$L['ext_cat_post-install'] = 'Пост-установочні скрипти';

/**
 * Structure Section
 */
$L['adm_structure_code_reserved'] = "Код категорії 'all' не може бути використаний.";
$L['adm_structure_code_required'] = 'Не задано поле: Код';
$L['adm_structure_path_required'] = 'Не задано поле: Шлях';
$L['adm_structure_title_required'] = 'Не задано поле: Тема';
$L['adm_structure_somenotupdated'] = 'Увага! Деякі значення не збережені.';
$L['adm_cat_exists'] = 'Категорія з таким кодом вже існує';
$L['adm_tpl_mode'] = 'Встановлення шаблона';
$L['adm_tpl_empty'] = 'За замовчуванням';
$L['adm_tpl_forced'] = 'Як';
$L['adm_tpl_parent'] = 'Як коренева категорія';
$L['adm_tpl_quickcat'] = 'Код категорії';
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
$L['adm_extrafields_help_notused'] = 'Не використовується';
$L['adm_extrafields_help_variants'] = '{значення1},{значення2},{значеніє3},...';
$L['adm_extrafields_help_range'] = '{мін_значення}, {макс_значення}';
$L['adm_extrafields_help_data'] = '{мін_рік}, {макс_рік}, {формат_дати}. Якщо не вказано {формат_дати}, виводиться stamp';
$L['adm_extrafields_help_regex'] = 'Регулярний вираз для введення значення';
$L['adm_extrafields_help_file'] = 'Директорія для завантаження файлів';
$L['adm_extrafields_help_separator'] = 'Роздільник значень';
$L['adm_help_info'] = 'HTML-код поля встановиться в значення за замовчуванням автоматично, якщо його очистити і оновити';
$L['adm_help_newtags'] = '<br /><br /><b>Нові теги в tpl-файлах:</ b>';

/**
 * Users Section
 */
$L['adm_rightspergroup'] = 'Права груп';
$L['adm_maxsizesingle'] = 'Максимальний розмір одного файлу в розділі &laquo;'.$L['PFS'].'&raquo; (Кб)';
$L['adm_maxsizeallpfs'] = 'Максимальний розмір всіх файлів у роздiлi &laquo;'.$L['PFS'].'&raquo; (Кб)';
$L['adm_copyrightsfrom'] = 'Встановити права як у групі';
$L['adm_rights_maintenance'] = 'Дозволити авторизацію при включеному режимі обслуговування';
$L['adm_skiprights'] = 'Пропустити права для цієї групи';
$L['adm_group_has_no_rights'] = 'Група не має прав';
$L['adm_groups_name_empty'] = 'Назва групи не повинна бути порожньою';
$L['adm_groups_title_empty'] = 'Титул члена групи (заголовок) не повинен бути порожнім';
$L['users_grp_5_title'] = 'Адміністратори';
$L['users_grp_5_desc'] = 'Адміністратори і користувачі з максимальним рівнем доступу';
$L['users_grp_6_title'] = 'Модератори';
$L['users_grp_6_desc'] = 'Контент-менеджери та довірені автори';
$L['users_grp_4_title'] = 'Користувачі';
$L['users_grp_4_desc'] = 'Зареєстровані користувачі з базовим рівнем доступу';
$L['users_grp_3_title'] = 'Заблоковані';
$L['users_grp_3_desc'] = 'Заблоковані користувача облікові записи';
$L['users_grp_2_title'] = 'Користувачі';
$L['users_grp_2_desc'] = 'Облікові записи з незавершеною процедурою реєстрації';
$L['users_grp_1_title'] = 'Відвідувачі';
$L['users_grp_1_desc'] = 'Незареєстровані і неавторизовані користувачі';

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

$L['adm_sort_alphabet'] = 'За алфавітом';
$L['adm_sort_category'] = 'За категоріями';

$L['adm_only_installed'] = 'Встановлені';

$L['adm_hook_changed'] = 'Увага! Це файл встановлений неправильно, або був змінений з моменту установки.<br />';
$L['adm_hook_notregistered'] = ' — Хук(и): <b>{$hooks}</b> не зареєстрований(і)<br />';
$L['adm_hook_notfound'] = ' — Хук(и): <b>{$hooks}</b> встановлений(і) але не знайдений(і) у файлі<br />';
$L['adm_hook_filenotfound'] = ' — Файл: <b>{$file}</b>, не знайдений!<br />';
$L['adm_hook_updatenote'] = 'Оновіть розширення, натиснувши кнопку «<b>Оновити</b>».';

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
$L['adm_internalcache_desc'] = 'Кеш для тимчасового зберігання часто змінюваних об’єктів';
$L['adm_purgeall_done'] = 'Кеш очищений повністю';
$L['adm_diskcache'] = 'Дисковий кеш';
$L['adm_diskcache_desc'] = 'Кеш для зберігання сформованих даних у вигляді файлів';
$L['adm_cache_showall'] = 'Показати все';

/**
 * Other Section
 * Log Subsection
 */
$L['adm_log'] = 'Системний протокол';
$L['adm_log_desc'] = 'Інформація про активність користувачів на сайті';
$L['adm_infos'] = 'Інформація';
$L['adm_infos_desc'] = 'Версії PHP/Zend, ОС, часові пояси сервера';
$L['adm_versiondclocks'] = 'Версії і таймери';
$L['adm_checkcorethemes'] = 'Перевірити файли ядра і скінів';
$L['adm_checkcorenow'] = 'Перевірити файли ядра!';
$L['adm_checkingcore'] = 'Перевіряю файли ядра...';
$L['adm_checkthemes'] = 'Перевірити наявність всіх файлів в скін';
$L['adm_checkskin'] = 'Перевірити TPL-файли скіна';
$L['adm_checkingskin'] = 'Перевіряю скін...';
$L['adm_check_ok'] = 'Ok';
$L['adm_check_missing'] = 'Відсутній';
$L['adm_ref_prune'] = 'Очищено';

/**
 * Other Section
 * Infos Subsection
 */
$L['adm_phpver'] = 'Версія PHP';
$L['adm_zendver'] = 'Версія Zend';
$L['adm_interface'] = 'Інтерфейс веб-сервер / PHP';
$L['adm_cachedrivers'] = 'Драйвери кеша';
$L['adm_os'] = 'Операційна система';
$L['adm_clocks'] = 'Таймери';
$L['adm_time1'] = '# 1: Чистий час сервера';
$L['adm_time2'] = '# 2: Час щодо GMT, повертається сервером';
$L['adm_time3'] = '# 3: Час щодо GMT + зрушення сервера (Cotonti reference)';
$L['adm_time4'] = '# 4: Ваш місцевий час з особистих налаштувань';
$L['adm_help_versions'] = "Змініть часовий пояс сервера для коректного встановлення таймера #3.<br />\nТаймер #4 залежить від налаштувань часового поясу в вашому профілі.<br />\nТаймери #1 і #2 ігноруються системою.";

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
$L['adm_required'] = '(обов’язково)';
$L['adm_setby'] = 'Встановлено';
$L['adm_to'] = 'Кому';
$L['adm_totalsize'] = 'Загальний об’єм';
$L['adm_warnings'] = 'Попередження';

$L['editdeleteentries'] = 'Правка | видалення';
$L['viewdeleteentries'] = 'Перегляд | видалення';

$L['alreadyaddnewentry'] = 'Новий запис додано';
$L['alreadyupdatednewentry'] = 'Запис оновлено';
$L['alreadydeletednewentry'] = 'Запис видалено';

$L['adm_invalid_input'] = 'Неприпустиме значення "{$value}" для змінної "{$field_name}"';
$L['adm_set_default'] = 'Встановлено значення за замовчуванням';
$L['adm_int_max'] = 'Максимально допустиме значення "{$max}"';
$L['adm_int_min'] = 'Мінімально допустиме значення "{$min}"';

/**
 * Extra Fields (Common Entries for Pages & Structure & Users)
 */
$L['adm_extrafields'] = 'Додаткові поля';
$L['adm_extrafield_added'] = 'Нове поле додано';
$L['adm_extrafield_not_added'] = 'Помилка! Нове поле не додано';
$L['adm_extrafield_updated'] = 'Поле "%1$s" відредаговано';
$L['adm_extrafield_not_updated'] = 'Помилка! Поле "%1$s" не відредаговано';
$L['adm_extrafield_removed'] = 'Поле видалено';
$L['adm_extrafield_not_removed'] = 'Помилка! Поле не видалено';
$L['adm_extrafield_confirmdel'] = 'Ви справді хочете видалити поле? Всі дані цього поля будуть втрачені!';
$L['adm_extrafield_confirmupd'] = 'Ви справді хочете редагувати поле? Деякі дані цього поля можуть бути втрачені.';
$L['adm_extrafield_default'] = 'Значення за замовчуванням';
$L['adm_extrafield_required'] = 'Обов’язкове';
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
