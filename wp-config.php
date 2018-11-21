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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'carrent');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'ltcoM|qw~k^mtZal/LyGw%(ek<hc}xPG{,[EtECY%6m!6:}WlId-[YT_R5WX?5 +');
define('SECURE_AUTH_KEY',  'NI/_i]MHh<Z|uzLY3-1W)!(uMr7mPgv]Y4vB:hwu0PkYP;}js[$l?WX^6yp=VyY>');
define('LOGGED_IN_KEY',    'z!(y3wq4}bvIAGvfW-j7USNX@d.obNhx:j#Z1`J`=g4i`XJh.CVn+wmd;$:/EJ;4');
define('NONCE_KEY',        '>>3CZa3Jc(mZ`0#VwdE}QQ8?RQCmkN55`W0qM<?5<]Z&2-iLmQ2VXHrD{y),638d');
define('AUTH_SALT',        '6ahCy^YA>}2yd_dV*u+T=:mEk||%h5nJFye^~4Bt[s)p#JkiQmZ_fX];;H1 TE:I');
define('SECURE_AUTH_SALT', ',<I9K$1(}#a$1>DrTZ6h@=.20P`Opb5y*`05d8}b)7O8DcaR~=lNCGO=2yFns6vH');
define('LOGGED_IN_SALT',   'yI^0(,hPM(!R)M:;N@C*m^TBad!^v,q!iPM|DW5ucZRQ(jh q?uw%Ask$w1.)j=e');
define('NONCE_SALT',       'f>@`).!f{8)14m|L[2Z/8g#pD^K*Z;d(:S1u}qm1`py^I,EQyijE1 [YHWb)TiEa');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
