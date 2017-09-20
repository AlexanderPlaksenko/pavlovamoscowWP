<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'pav_msc');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4@b][gW`]#tMVo||y,f[ft*^oxu_pons:9v3Zs2ZF}jur5CZ*x;Wpevi}YjM82cO');
define('SECURE_AUTH_KEY',  '`njtD_a9BC^lC_/~InFwsm[,FP<CTRS|H9*5K#=m)[PhB57^k_lR:Yt-Qld4r!oR');
define('LOGGED_IN_KEY',    '(~/wlj+|MMqVMt+pL^%hGp>F@Opi#IGf|0Cdq(s!C{u[iXXE-`D4/?O(Ukr6r$Eo');
define('NONCE_KEY',        'Ua+iAzi_SaYLK[3S{E2>nQP]fnMGj={7]_W+Y7FV yE7r9!Bg?<xF8T)>;#~044d');
define('AUTH_SALT',        '/^#=Pnv*w~3&&s~#(s@i[N>PY{$zUq@D/LpUk&_EGgJqJYY6`;f|im:)I%*x!-$[');
define('SECURE_AUTH_SALT', ',6-J6s3=#+@v-&D^kJWNKMoi4TB`O54#?`8PK_-pL-xi.TWn??,=.WT0W6Lx/]}9');
define('LOGGED_IN_SALT',   'sEf*oHRkzl$WJ`L2z=L/DlQi%0k%FCjm *4`s$U}2^/su:(+]}xU<WDs:1HuKJ9q');
define('NONCE_SALT',       '@f*f|U1DqcrY`;zTJr b3sA;AMPo7/Zy@g:$x(fwYab XrrL&E^<YFWzsn4! 0CA');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
