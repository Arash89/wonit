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
define('DB_NAME', 'aduadmin_ownit');

/** MySQL database username */
define('DB_USER', 'aduadmin_373f_cg');

/** MySQL database password */
define('DB_PASSWORD', 'fK6yGKHy3H3Y');

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
define('AUTH_KEY',         'I`03=IuuDLRbVCWXzRm^nH-0BWv UA]SjEOAX9Wu631Xy>3=hCfqocNhPDEZ1r<?');
define('SECURE_AUTH_KEY',  'g/_6r4WOL1hzv w~GRqhoYT&:3&Py-^>CRY XA#ijTrlErT=|nO8mJ}9>Xm=k$<#');
define('LOGGED_IN_KEY',    '1UH@KG>wLO0-*0N38J:0iH|aBY<&JQv[bfWw*U}u&%jE`:59P58u@rMeXj7VHO(}');
define('NONCE_KEY',        '@*z$-UbqL#(ou[/sl_P=ff]v0WT]rqk[`5Gl{N&k0U*9%bQ,HJ?iAQHxs1qP7uS`');
define('AUTH_SALT',        '^E{LV7/{JnH+L_Ngou0sT6(3/wu7N;M-O),[yOD>]Pc0*mAVT-<_FnoJUV`XrLi^');
define('SECURE_AUTH_SALT', 'd_d {_c#C_boF&0Z$lnAo(q@)5#bx(4Ge^+;hz3zC&$(&iP&Y>fp@Bu0PN2w0-:2');
define('LOGGED_IN_SALT',   '(blMWJ&>8>2E-E``]M(b} |?x@wv<-xkcoj8;A~j`6J.8#]5abp*j/JUJ.$WP=Q/');
define('NONCE_SALT',       '_BJODuCQ}*BkP+_#EYTWLnz#{kjeKgsuq1{%R~$u(fcUvFkipx,}:{aI5h4PUz.R');

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
