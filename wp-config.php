<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'pope');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '!k-,ZP?wO ?q%QubmE(4Muo+_2E7SJ>x6Iu|Dn?|q|Yyb-|:ybG2*MT3~/]mQ~|~');
define('SECURE_AUTH_KEY',  'EfGUf;5.oD_];k_jQmSdT;GPN$t-IX;enHbXb9-Rlw3Gsn:nc+YQ/-l+2$UrQa:I');
define('LOGGED_IN_KEY',    'bekUl.qQqNAV{!^h+wYQ;F0}]Y*LuvJkMQ|(2_4?EXnR?j1np7BT,8`W[^,2RH;f');
define('NONCE_KEY',        ')Rq3H<Q%25>}DRqPk^I~P@}Ne1<* mw*RRw1OpA{oQKHO_V!bY#ZNe`t-r#*6KS{');
define('AUTH_SALT',        'Hu|dQt<_gN.UTNiuB`l)k5R.[4o6Z8vK7s1.: c~]~>3M:.~bi]_*{E%:PcKqX+Z');
define('SECURE_AUTH_SALT', 'u9RI#3vDwCu9#WQ&i+kJJ-57Y_)n^?L=?Mi$*UJ<PRYF=TDX+spwoXb|Nct9*4|H');
define('LOGGED_IN_SALT',   '4@.|2i?%vn)Tg@hN$/K{;@];(wRDoS7SgTaM.&P!L2[@[DF qlNssHMw?D2m@%T%');
define('NONCE_SALT',       'BV&J&8}_}qH{+a5TB,(UkMb!=)XI4Kyk_/A-u(Cqw}Q_R=TUkx3O8>*# |BX>wa ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
