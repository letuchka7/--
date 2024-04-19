<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', '031-22_29864' );

/** Имя пользователя базы данных */
define( 'DB_USER', '031-22_29864' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '14974e7f4e10bcd794dc' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '>`rqs>@9pd$7.i5fX9g?GtclOu%Vj(?~~_h#0uA`@i`4e%%wftY#]ju0813)Cs!i' );
define( 'SECURE_AUTH_KEY',  '1I*H<[puQ~/rov5H7yKqbk+c#=ir?-H-QXEaG<#NFA!GDp1f-Htn5De/*r<rv~h]' );
define( 'LOGGED_IN_KEY',    'YWrGuN{w|=<5iy(l,7v0lV^3@R^@s5}mGWW$x%wDm}6kl73^z:@B)in<P-O3`~Fu' );
define( 'NONCE_KEY',        '0U#eTyJa3c7,1Y]nB+Q@[-hk?Asa(!W&Q2pNU:y&/l{n0b;<S@haC^dIfD1Dqiy ' );
define( 'AUTH_SALT',        '8zHq%qW1BWQ#XM[79DVxkD0Hqp5#ju?%]2?g{+)~m$Z0g%-pjUx4w>0y[-qaL4Dh' );
define( 'SECURE_AUTH_SALT', 'jr&5qUj6CD)8Q*u! Jc+oz53PPTM}=}1(N-R$Pu9n4?o?:`xj*t^79#SB*H;aK1t' );
define( 'LOGGED_IN_SALT',   '|aHLY8eRd{K;6QdiKs=h[hj3z/Bmfzqde,:OobdT4tV@Z|?RaKnKqENy.E75u.Ln' );
define( 'NONCE_SALT',       'z:W.!,CR2N1tr<*<}YwMs^ec:spOlmu9)-(CH5H?EYtX;<GIkhn){$h!KP3o|hxJ' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'o3hdQ_';


/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';