<?php

/**
 * Ukrainian Language File for the Users Module (users.ua.lang.php)
 *
 * @package Cotonti
 * @copyright (c) Cotonti Translators Team
 * @license https://github.com/Cotonti/Cotonti/blob/master/License.txt
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * User authentication
 */
$L['users_nameormail'] = 'Ім’я або email';
$L['users_rememberme'] = 'Запам’ятати мене';
$L['users_lostpass'] = 'Відновити пароль';
$L['users_maintenance1'] = 'Сайт в режимі обслуговування';
$L['users_maintenance2'] = 'Вхід тільки для адміністраторів і дозволених груп';
$L['users_loggedinas'] = 'Ви увійшли як';
$L['users_logoutfirst'] = 'Щоб увійти в інший аккаунт, вам потрібно спочатку вийти.';

/**
 * User registration
 */
$L['users_validemail'] = 'Реальний e-mail';
$L['users_validemailhint'] = '(необхідний для підтвердження реєстрації)';
$L['users_confirmpass'] = 'Підтвердити пароль';

$L['aut_contactadmin'] = 'У разі необхідності зверніться до адміністратора';
$L['aut_emailalreadyindb'] = 'Такий e-mail вже існує в базі даних';
$L['aut_emailbanned'] = 'Схоже e-mail (або хост) заблокований. Причина: ';
$L['aut_emailtooshort'] = 'Помилковий e-mail';
$L['aut_invalidloginchars'] = 'Логін містить неприпустимі символи';
$L['aut_logintitle'] = 'Авторизація';
$L['aut_mailnoticetitle'] = 'Зміна e-mail';
$L['aut_passwordmismatch'] = 'Введені паролі не співпадають';
$L['aut_passwordtooshort'] = 'Пароль повинен складатися з 4 або більше символів: букв, цифр і символу підкреслення';
$L['aut_registersubtitle'] = 'Заповніть реєстраційну форму відповідно до зазначених вимог';
$L['aut_registertitle'] = 'Реєстрація нового користувача';
$L['aut_regreqnoticetitle'] = 'Запит на реєстрацію нового облікового запису';
$L['aut_regrequesttitle'] = 'Реєстрація нового користувача';
$L['aut_usernamealreadyindb'] = 'Користувач з таким ім’ям вже зареєстрований в базі даних';
$L['aut_usernametooshort'] = 'Ім’я користувача має складатися з 2 або більше символів';

/**
 * User registration: messages
 */
$L['aut_regrequest'] = "Вітаємо, %1\$s,\nВаш обліковий запис в даний момент ще не активний. Перш ніж ви зможете авторизуватися, адміністратор сайту повинен активувати ваш обліковий запис, після чого вам буде направлено ще одне підтвердження.";

$L['aut_regreqnotice'] = "Цей лист надіслано вам після запиту реєстрації облікового запису користувача %1\$s.\nКористувач %1\$s не зможе авторизуватися до тих пір, поки його обліковий запис не буде активовано за наступним посиланням:\n%2\$s";

$L['aut_emailreg'] = "Вітаємо, %1\$s,\nВам необхідно активувати обліковий запис, використовуючи наступне посилання:\n%2\$s\nЩоб скасувати активацію облікового запису скористайтеся наступним посиланням:\n%3\$s";

$L['aut_emailchange'] = "Вітаємо, %1\$s,\nЩоб змінити ваш e-mail адрес, скористайтеся наступним посиланням:\n%2\$s";

/**
 * User list
 */
$L['users_usersperpage'] = 'Користувачів на сторінку';
$L['users_usersinthissection'] = 'Всього користувачів';

$L['pro_emailandpass'] = 'Ви не можете змінити і e-mail та пароль одночасно';
$L['pro_passdiffer'] = 'Введені паролі не співпадають';
$L['pro_passtoshort'] = 'Пароль повинен складатися з 4 або більше символів: букв, цифр і символу підкреслення';
$L['pro_subtitle'] = 'Налаштування ваших особистих даних';
$L['pro_title'] = 'Ваш обліковий запис';
$L['pro_wrongpass'] = 'Ви не ввели поточний пароль або він невірний';
$L['pro_invalidbirthdate'] = 'Неправильна дата народження';

$L['useed_accountactivated'] = 'Обліковий запис активовано';
$L['useed_email'] = 'Цей лист надіслано вам після активації облікового запису. Тепер ви можете авторизуватися на сайті, використовуючи ім’я користувача та пароль, отримані в попередньому листі.';
$L['useed_subtitle'] = '&nbsp;';
$L['useed_title'] = 'Змінити';

$L['use_allbannedusers'] = 'Заблоковані облікові записи';
$L['use_allinactiveusers'] = 'Неактивовані облікові записи';
$L['use_allusers'] = 'Всі користувачі';
$L['use_byfirstletter'] = 'Імена користувачів на';
$L['use_subtitle'] = 'Зареєстровані користувачі';
$L['use_title'] = 'Користувачі';

$L['pasrec_title'] = 'Відновлення пароля';
$L['pasrec_email1'] = "Привіт %1\$s,\nВикористовуйте зазначену нижче посилання для зміни пароля:\n%2\$s\n\nУвага: якщо ви не зверталися за зміною пароля, повідомляємо вам, що запит був зроблений %4\$s з IP-адреси %3\$s.";
$L['pasrec_email2'] = 'По вашому запиту створено новий пароль. Змініть його при першій нагоді і видаліть цей лист. Ваш новий пароль: ';
$L['pasrec_explain1'] = 'Введіть ваш email.';
$L['pasrec_explain2'] = 'Отримавши листа, скористайтесь посиланням для зміни пароля.';
$L['pasrec_explain3'] = 'Двічі підтвердивши зміну пароля, ви отримаєте email з паролем, згенерованим випадковим чином.';
$L['pasrec_explain4'] = 'Якщо ви очистили поле для email’у в своєму профілі, відновити пароль самостійно ви не зможете. У цьому випадку вам необхідно звернутись до адміністратора сайту.';
$L['pasrec_mailsent'] = 'Лист надіслано. Перевірте свою поштову скриньку і скористайтеся надісланим вам посиланням. Потім дотримуйтесь інструкцій по установці нового пароля.';
$L['pasrec_mailsent2'] = 'Пароль змінений. Будь ласка, перевірте вашу поштову скриньку через кілька хвилин, щоб отримати новий пароль.';
$L['pasrec_request'] = 'Запит';
$L['pasrec_youremail'] = 'Ваш email: ';

/**
 * User details
 */
$L['users_sendpm'] = 'Надіслати приватне повідомлення';

/**
 * User profile & edit
 */
$L['users_id'] = 'ID користувача';
$L['users_hideemail'] = 'Приховувати e-mail';
$L['users_pmnotify'] = 'Повідомляти про нові приватні повідомлення';
$L['users_pmnotifyhint'] = '(отримувати e-mail повідомлення при отриманні нового приватного повідомлення)';
$L['users_newpass'] = 'Встановити новий пароль';
$L['users_newpasshint1'] = '(залиште порожнім щоб зберегти поточний)';
$L['users_newpasshint2'] = '(введіть новий пароль двічі)';
$L['users_oldpasshint'] = '(введіть свій поточний пароль щоб встановити новий)';
$L['users_lastip'] = 'Останній IP';
$L['users_logcounter'] = 'Всього авторизацій';
$L['users_deleteuser'] = 'Видалити користувача';
$L['users_changeemail'] = 'Змінити E-mail';

/**
 * Miscellaneous
 */
$L['users_group_not_found'] = 'Група не знайдена';

/**
 * Moved from theme.lang
 */
$themelang['usersprofile_Emailpassword'] = 'Ваш поточний пароль';
$themelang['usersprofile_Emailnotes'] = '<p><b>Порядок зміни e-mail (якщо дозволено адміністратором і при обов’язковому підтвердженні нового e-mail):</b></p><ol><li>Дія вашого поточного e-mail буде призупинено</li><li>В цілях безпеки вам необхідно вказати поточний пароль для доступу до облікового запису</li><li>для підтвердження нового e-mail вам необхідно повторно активувати обліковий запис по електронній пошті</li><li>до підтвердження нового e -mail дію вашого облікового запису буде припинено</li><li>Після підтвердження нового e-mail ваш обліковий запис буде знову активована</li><li>Будьте обережні при введенні нового e-mail: в разі помилки ви не зможете його виправити</li><li>Якщо ви все-таки допустили помилку при введенні нового e-mail, зверніться до адміністратора.</li></ol><p><b>при відсутності обов’язкового підтвердження нового e-mail, зміни набувають чинності негайно.</b></p>';

/**
 * Users full name display format
 */
$R['users_full_name'] = '{$lastname} {$firstname} {$middlename}';
