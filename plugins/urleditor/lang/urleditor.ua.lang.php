<?php
/**
 * Ukrainian Language File for URL management tool
 *
 * @package Urleditor
 * @copyright (c) Cotonti Translators Team
 * @license https://github.com/Cotonti/Cotonti/blob/master/License.txt
 */

defined('COT_CODE') or die('Wrong URL.');

$L['adm_urls'] = 'Посилання';
$L['adm_urls_area'] = 'Модуль';
$L['adm_urls_custom_htaccess'] = 'Додаткові правила .htaccess';
$L['adm_urls_error_dat'] = 'Помилка: datas / urltrans.dat недоступний для запису! Створіть його і встановіть CHMOD 666.';
$L['adm_urls_format'] = 'Формат';
$L['adm_urls_htaccess'] = 'Перезаписати .htaccess?';
$L['adm_urls_new'] = 'Нове правило';
$L['adm_urls_parameters'] = 'Параметри';
$L['adm_urls_rules'] = 'Правила перетворення URL';
$L['adm_urls_save'] = 'Зберегти';
$L['adm_urls_your'] = 'Ваш';
$L['adm_urls_callbacks'] = 'Правило містить callback-виклики';
$L['adm_urls_errors'] = 'Вам доведеться додати опції rewrite для них власноруч.';
$L['adm_help_urls'] = "На цій сторінці ви можете налаштувати формат посилань, використовуючи прості правила перетворення. Переконайтеся в коректності та відсутності правил що повторюються. Не використовуйте пробіли, символи табуляції та інші спеціальні символи в правилах. Розділи і параметри пояснені нижче.\n<ol>\n<li><strong>Модуль</strong> - назва скрипта, до якого відноситься правило. Метасимвол (*) означає &laquo;будь який скрипт&raquo;.</li>\n<li><strong> параметри</strong> - умова, що перевіряється на параметрах посилання. Це рядок, що містить пари ім’я-значення, розділені символом &amp; і символом = між ім’ям і значенням. Знак питання (?) на початку рядка ставити не слід. Якщо ви задаєте тут деяку змінну, то для роботи правила вона повинна бути присутня в параметрах посилання. Символ * означає будь-яке значення, одиночне значення або список можливих значень, розділених вертикальною рискою (|). Всі значення повинні бути URL-кодовані. <em>Приклад: name=Val|Josh&amp;id=124&amp;page=*</em>.</li>\n<li><strong>формат</strong> задає формат формування посилань. Це рядок, що містить спеціальні послідовності, замінювані їх значеннями. Звичайна послідовність виглядає як {\$name}, де &quot;name&quot; - Ім’я параметра посилання (GET-змінної), значення якої буде вставлено в місце цієї послідовності (або {!\$name} якщо її вставка не потрібно). Є кілька спеціальних послідовностей, які не містяться в параметрах посилання (&quot;query string&quot;):\n<ul>\n<li><em>{\$_area}</em> - ім’я скрипта;</li>\n<li><em>{\$_host}</em> - ім’я хоста з головного посилання сайту;</li>\n<li><em>{\$_rhost}</em> - ім’я хоста з поточного HTTP-запита;</li>\n<li><em>{\$_path}</em> - шлях сайту щодо кореня сервера, / якщо сайт у корені.</li>\n</ul>\nВи можете також використовувати параметризовані піддомени, якщо вкажете абсолютне посилання виду: <em>http://{\$c}.site.com/{\$al}.html</em>. На даний момент піддомени підтримуються тільки для серверів Apache.</li>\n<li><strong>Нове правило</strong> - додає нове правило в таблицю.</li>\n<li><strong>Послідовність</strong> - пам’ятайте, що послідовність проходження правил має значення. Алгоритм перетворення посилань шукає відповідне правило наступним чином: спочатку він шукає правила для поточного скрипта, потім він намагається знайти <em>перше</em> правило, відповідно параметрам; якщо відповідне правило не знайдено, відбувається повернення до універсальних правил (модуль *) і перше підходяще правило шукається там. Рекомендується правило за замовчуванням (з * модулем та * параметрами) ставити останніму серед усіх правил для *-модуля або навіть останнім у таблиці.<br />\nВи можете поміняти порядок правил простим перетягуванням потрібних рядків у таблиці. Рекомендується зберегти нові правила перед зміною порядку, інакше перетягування для них працювати не буде.</li>\n<li><strong>Query String</strong> - це те, що ви бачите в більшості посилань після знака питання. Вона використовується для передачі решти GET-параметрів, які ви не використали при складанні Формату, і автоматично приєднується до посилання в такому випадку.</li>\n<li><strong>Зберегти</strong> - ця кнопка збереже правила, і зміни вступлять в силу негайно. Також буде змінено ваш .htaccess (якщо можливо), і вам будуть надані директиви для .htaccess/IsapiRewrite4.ini/nginx.conf (залежно від сервера що використовується).</li>\n</ol>";

$L['cfg_preset'] = 'Набір предустановок';
$L['cfg_preset_params'] = 'handy: Зручний, compat: Сумісний з Genoa/Seditio, custom: Власний urltrans.dat, none: Відключено';
$L['info_desc'] = 'За допомогою цього плагіна ви можете задавати розширені правила перетворення URL у панелі Адміністрування, або вибрати просту у використанні передустановку для дружніх людині та пошуковим системам посилань';
