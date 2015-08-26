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
define('DB_NAME', 'eamonncoDBpe2nm');

/** MySQL database username */
define('DB_USER', 'eamonncoDBpe2nm');

/** MySQL database password */
define('DB_PASSWORD', 'Kt31QcCNnk');

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
define('AUTH_KEY',         'XjyEUBU^,72LP*;$2imjm$MPMQj6Aor8RVRV|4848os|@!RVojzJMgNgk3747Rr');
define('SECURE_AUTH_KEY',  'OZ!C#]imetDTLae]A6Lx<_1dtp~KOeWl2LDS*_Mn<7IM${,3Ujcr7QXmq6LEX.2^');
define('LOGGED_IN_KEY',    'Sp5P<7nq.r^QUnUj37Q7M$^;Euy{.<XmqmqAPTQf*3615lo~-~OSldh:GKGK-~1:');
define('NONCE_KEY',        'BJY|>!48osos|GZfj$JMJNg^3747nr,@!RUnGZd[C[CGw-w-]Zdadx1GRVo[CGCGw');
define('AUTH_SALT',        'CKw#~1dho!|VkRko8N5OR!1~15l-Tm26P6PT*2*2ei+i+HLeatxHKDW_#9#9Dt_p*');
define('SECURE_AUTH_SALT', 'jQfMb<B37My{2Iixq.PfibqAPIMy{UYo4NFJv>!04gzs!NRYr7MQJY>70Fgvr!NQg');
define('LOGGED_IN_SALT',   'P*;<6m+_#Shat5OHLa#925ixEUX<73jun^Mbfjn3ITi;2{Am*y<{XmjuET8Bn!z>');
define('NONCE_SALT',       'D#+]Xqix+HXhtDS9O+]_5ix+t_Si{Bb$uyEUQfjIBFr,<Am+uy<TifuAE7M${@}');

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
