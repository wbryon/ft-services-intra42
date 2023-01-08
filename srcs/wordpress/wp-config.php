<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wbryon' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345' );

/** MySQL hostname */
define( 'DB_HOST', '10.99.100.100' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '):Oz/wEEa{+ZMMuIJ}HaSK1ouzZH]nC8}Cu@ODvLz|r+~;Q:*`iRMY:h++HcMv$0');
define('SECURE_AUTH_KEY',  'PgpDT^^Tc~33:OSCssefC$)4VW]c|(gWBn%([L`VD{kaEg.wpe$xIk<K-O/(=BL$');
define('LOGGED_IN_KEY',    'QpL@}%=p13h90ChSleOX#mQ:5.Rvx*&jDj.i^it!B@L<`O<5,bD`P:0-qo~1_t-3');
define('NONCE_KEY',        'Kv@>unV+s=6BCuE>T|U6ov:mhld]`#+:*!PTM<8[NYG;|D$0hb5&4=.p& myZBI>');
define('AUTH_SALT',        'Wbu1MIDrvfz,!o+LQ?8v>/=>4Dm~E];JX6|/cr#+@qv=EL;{#xEHESZaVvoti7tR');
define('SECURE_AUTH_SALT', '}K}O3#:Bc6-/-`L7 9r^/t% n^.p][NVt_$cenuB8rI?2&uZ[rCv@ShzOdn#0?`S');
define('LOGGED_IN_SALT',   'v(pO>@CPobz-7M|he$~~xfr,4=2[>XP>#8I2G:R-)MTVp3XB>iB[_@SN]K!|3)~5');
define('NONCE_SALT',       '(n!Zq-T`~d(5c+;_JLuw@+v=*  j|Kjx+).3yypk!)CW(+_3Q&wDjx7S=6iaA4$J');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
