<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'eamonncoDBb28s');

/** MySQL database username */
define('DB_USER', 'eamonncoDBb28s');

/** MySQL database password */
define('DB_PASSWORD', 'yit1kit1L3');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'HDTXq*Pim*.q*.2L]9SWpHaet#Wqt#6t#]9T59SWptZdw-:ex#]D-:1KOCKOhl~ho');
define('SECURE_AUTH_KEY',  'ptx#9[1GKd5OSh-Watx]h-~15[:GKRkNVgwVZh_1o~14O8CVkoUko@Zz@04v|8CRo');
define('LOGGED_IN_KEY',    '|-:CG48NgkRUo@!ck@!4s|[8RUYrv>}v>}B^04Nc3MQjnbqu,3$7AU,3MbfIXn^q');
define('NONCE_KEY',        'S_l+~;HGVp~_l~!1w#[DS[9SWpNdw-:wz}0J|[8O48RVkYcv|>v,>BF|48RVBFYos');
define('AUTH_SALT',        'LLa+~p~1G~:GKZ5OdhOdhw[-[:C|8CRgGVZsVko~1gkz}v|48R!0JZdFVoscv,>7,');
define('SECURE_AUTH_SALT', 'ha_#ix]9_#5LeOSl-~hw[:p~1HK:GWaKdsw|sw|4-[8CV8CRhv,>BF}BFUoJNgwzc');
define('LOGGED_IN_SALT',   '!z>7B{BUjnQjy$Yr^,3^3MQbq.<q.26L<AQT6PTjymq*2+*;DW<6PeiLeuxh+];D');
define('NONCE_SALT',       'SxSWpt.l*_2L[DSWpGZps#Wpt#]w-:1KOCGZdwNdw-[os_5~!5KO8NcsYckz}0w|4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
