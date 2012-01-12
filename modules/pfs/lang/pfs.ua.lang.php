<?php
/**
 * Ukrainian Language File for the PFS Module (pfs.ua.lang.php)
 *
 * @package pfs
 * @version 0.9.5
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2011
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Module Config
 */

$L['cfg_maxpfsperpage'] = array('Макс. кількість елементів на сторінці', ' ');
$L['cfg_pfsfilecheck'] = array('Перевірка файлів ',' Перевіряти файли які завантажуються (&laquo;'.$L['PFS'].'&raquo; і профіль) на відповідність їх формату розширенню. Рекомендується включити в цілях безпеки.');
$L['cfg_pfsmaxuploads'] = array('Макс. кількість паралельних завантажень за раз', '');
$L['cfg_pfsnomimepass'] = array('Ігнорувати MIME-типи ',' Дозволити завантаження файлів, MIME-тип яких не вказано в конфігурації.');
$L['cfg_pfstimename'] = array('Імена файлів на основі шаблону часу ',' Генерувати імена файлів за шаблоном часу. За замовчуванням використовується маска ІМЯФАЙЛА_UDERID.');
$L['cfg_pfsuserfolder'] = array('Режим зберігання за каталогами ',' Файли користувачів будуть зберігатися в каталогах / datas / users / USERID / замість / datas / users / та додається USERID до імені файлу. Встановлюється <u> тільки при початковому налаштуванні сайту </ u>. Міняти налаштування після першого завантаження будь-якого файлу не рекомендується!');
$L['cfg_flashupload'] = array('Використовувати flash-завантаження файлів ',' Дозволяє одночасно завантажувати декілька файлів.'); // New in 1.0.0
$L['cfg_pfs_winclose'] = array('Закрити спливаюче вікно після вставки бб коду');
$L['cfg_th_amode'] = array('Метод створення мініатюр зображень (thumbnails)', ' ');
$L['cfg_th_border'] = array('Ширина рамки мініатюри, px ',' За замовчуванням: 4px');
$L['cfg_th_colorbg'] = array('Колір рамки мініатюри ',' За замовчуванням: # 000000');
$L['cfg_th_colortext'] = array('Колір тексту мініатюри ',' За замовчуванням: # FFFFFF');
$L['cfg_th_dimpriority'] = array('Пріоритет розмірів мініатюр (thumbnails)', ' ');
$L['cfg_th_jpeg_quality'] = array('Коефіцієнт JPEG-стиснення мініатюри ',' За замовчуванням: 85');
$L['cfg_th_keepratio'] = array('Коефіцієнт JPEG-стиснення мініатюри ',' За замовчуванням: 85', ' ');
$L['cfg_th_separator'] = 'Налаштування мініатюр';
$L['cfg_th_textsize'] = array('Розмір шрифту мініатюри', ' ');
$L['cfg_th_x'] = array('Ширина мініатюри, px ',' За замовчуванням: 112px');
$L['cfg_th_y'] = array('Висота мініатюри, px ',' За замовчуванням: 84px (рекомендується: ширина x 0.75)');

/**
 * Other
 */

$L['adm_gd'] = 'Графічна бібліотека GD';
$L['adm_allpfs'] = 'Розділи &laquo;'.$L['PFS'].'&raquo; всіх користувачів';
$L['adm_allfiles'] = 'Всі файли';
$L['adm_thumbnails'] = 'Мініатюри';
$L['adm_orphandbentries'] = 'Втрачені записи БД';
$L['adm_orphanfiles'] = 'Втрачені файли';
$L['adm_delallthumbs'] = 'Видалити всі мініатюри';
$L['adm_rebuildallthumbs']= 'Видалити і згенерувати всі мініатюри';
$L['adm_help_allpfs'] = 'Розділи &laquo;'.$L['PFS'].'&raquo; всіх зареєстрованих користувачів';
$L['adm_nogd'] = 'Графічна бібліотека GD не підтримується даними хостом. Створення мініатюр для зображень неможливе. Встановіть перемінну &laquo;Метод створення мініатюр&raquo; ('.$L['Configuration'].' &gt; '.$L['PFS'].') в значення &laquo;'.$L['Disabled'].'&raquo;';
$L['adm_help_pfsfiles'] = 'Недоступно';
$L['adm_help_pfsthumbs'] = 'Недоступно';
$L['info_desc'] = 'Організоване сховище для файлів які завантажуються на сайт, надається зареєстрованим користувачам (Особистий файловий простір) і для всього сайту (Файловий простір сайту)';

/**
 * Main
 */

$L['pfs_cancelall'] = 'Виділити все';
$L['pfs_direxists'] = 'Такий каталог вже існує. <br /> Старий шлях: %1$s<br />Новий шлях: %2$s';
$L['pfs_extallowed'] = 'Дозволені розширення';
$L['pfs_filecheckfail'] = 'Увага: помилка розширення файлу 2$s.%1$s';
$L['pfs_filechecknomime'] = 'Увага: не знайдений MIME-тип для файлу 2$s.%1$s';
$L['pfs_fileexists'] = 'Помилка завантаження: файл з таким ім\'ям вже існує';
$L['pfs_filelistempty'] = 'Список порожній';
$L['pfs_filemimemissing'] = 'Помилка завантаження: відсутній MIME-тип для розширення %1$s';
$L['pfs_filenotmoved'] = 'Помилка завантаження: тимчасовий файл не може бути переміщений.';
$L['pfs_filenotvalid'] = 'Помилка перевірки  %1$s-файлу';
$L['pfs_filesintheroot'] = 'Файлів в кореневому каталозі';
$L['pfs_filesinthisfolder'] = 'Файлів в поточному каталозі';
$L['pfs_filetoobigorext'] = 'Помилка завантаження: файл занадто великий або неприпустиме розширення';
$L['pfs_folderistempty'] = 'Каталог порожній';
$L['pfs_foldertitlemissing'] = 'Відсутній заголовок каталогу';
$L['pfs_isgallery'] = 'Галерея?';
$L['pfs_ispublic'] = 'Відкритий доступ?';
$L['pfs_maxsize'] = 'Максимальний розмір файла';
$L['pfs_maxspace'] = 'Максимальний дозволений об\'єм';
$L['pfs_newfile'] = 'Завантажити файл';
$L['pfs_newfolder'] = 'Створити новий каталог';
$L['pfs_onpage'] = 'На цій сторінці';
$L['pfs_parentfolder'] = 'Кореневий каталог';
$L['pfs_pastefile'] = 'Вставити як посилання на файл';
$L['pfs_pasteimage'] = 'Вставити як зображення';
$L['pfs_pastethumb'] = 'Вставити мініатюру';
$L['pfs_resizeimages'] = 'Масштабувати зображення?';
$L['pfs_title'] = 'Мої файли';
$L['pfs_totalsize'] = 'Загальний об\'єм';
$L['pfs_uploadfiles'] = 'Завантажити файли';

$L['pfs_insertasthumbnail'] = 'Вставити мініатюру';
$L['pfs_insertasimage'] = 'Вставити повнорозмірне зображення';
$L['pfs_insertaslink'] = 'Вставити у вигляді посилання на файл';
$L['pfs_dimensions'] = 'Розміри';

$L['pfs_confirm_delete_file'] = 'Ви дійсно хочете видалити цей файл?';
$L['pfs_confirm_delete_folder'] = 'Ви дійсно хочете видалити цю папку і весь її вміст?';

?>