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
define( 'DB_NAME', 'Jeans' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '#)@4^oB]u6[p{JS/JH(;O.))8 eHG%&0i(Mx,%fN5i@XtYG6Pgzu9mp&nVu| _]D' );
define( 'SECURE_AUTH_KEY',  '=l+}o+7k3&J9fMn2n/{4B6<;&.M7!-M4!k0%@#0JxTSZ.?Ol;&Mo4)b9Si;eEg)D' );
define( 'LOGGED_IN_KEY',    'y.Ag-lM;5H,1^8 H4nQII`Vo:4Wh13:aM>E0TO<wXc-h[j~xE)z-dl*e2W?j+&wv' );
define( 'NONCE_KEY',        'bz ~LTrF)Dpj922Q,$ItzTb=qGJXZ*o_h+t^bjxmgmDDRQ;adUeqy6L<y]O~Zq:}' );
define( 'AUTH_SALT',        'M.$pCOa5</m?oOe) 50|I.Mg`ZZ;12[s7_1Cq[sSys@5v&:,~hK}Y Qi85~]&H#1' );
define( 'SECURE_AUTH_SALT', '#T+v]jfK^wJS2n{DU`0wn1>4(o=?`?`18FvT{Q/Ga7);=hVS(PIu0b)jT^,c)aho' );
define( 'LOGGED_IN_SALT',   'Ji%# 49M|Ux+kZ$z0gSABU*)GUvO0]d$8A.prlibl|,8T%ysoOplNYsGw<C/5,uG' );
define( 'NONCE_SALT',       '#2>AzdTpg-a(]A!lga*9Ek+qIs6lVjf79q1k.fHUh`rS-fyD=e(0@k)R$rzDH>%T' );

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
