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
define( 'DB_NAME', "f99638e7_test" );


/** Имя пользователя MySQL */
define( 'DB_USER', "f99638e7_test" );


/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', "*TLCxt2m" );


/** Имя сервера MySQL */
define( 'DB_HOST', "localhost" );


/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );


/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3F#KY~`t-ls|2+Ws~Fdfx87P~;dcwPRb],CwSA|o65s`Zo>H_6f=3a!U#YGH>:b9' );

define( 'SECURE_AUTH_KEY',  '9;65iZGnwDZ7D?2rG&]~Jg9j8xpsPwWjS}KPv5L6WB~<[Kw*{s0VsV//JS{.WgoK' );

define( 'LOGGED_IN_KEY',    'A$@+.=N@]K/5eAlCmxbcC|B1EPVwoUrO?^7!j%Sgyl_>za,J8(Hr+X} !,_4FxNs' );

define( 'NONCE_KEY',        '^DAx<s6o1}p,kTBcW4lED;[ATr)4;AvD5sL+g?,M0,B4urbyXM0(AUT0c8unuPu!' );

define( 'AUTH_SALT',        'r&#qk~!vRcn%=m_.vdX5+zNof@mY+q06tH^p|E^BWhoc.b_Nj%T*dk)y$>:}2lgK' );

define( 'SECURE_AUTH_SALT', 'zTtr>aCcJ/J:=)+KE+?LgvM*H4{c;lrU+.VlJvEf2~^7wz[+@cFTf.Qc@T{[q{e/' );

define( 'LOGGED_IN_SALT',   'i!J_^@*f,]ylYTFm.1Zf6__tY@PkaUgq^1iT7$PW@&S(=G?l&9)%$JsJRb~H~.ku' );

define( 'NONCE_SALT',       'i1E6@ClsH=3jV(Ajs@335v- /,;@95Z}<$VTo;A,9VmtSD_]guKo!o+|Orv55xj_' );


/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';


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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
