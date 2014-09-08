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
define('DB_NAME', 'one');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

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
define('AUTH_KEY',         'M^z;t+Sk6Lb$U+[sy{|`i.SnQqW{~-#K_Nj~V/LF<)i_wB]*-[QQIiOSU:IQ.hs>');
define('SECURE_AUTH_KEY',  'tcdH@7fb-//g1=brb(5pIR-&cg!tp`2>N*{Fw3^,J!r?u5P4toNEd:Y:ZaD8`cY-');
define('LOGGED_IN_KEY',    '<4i}-J0VAnl,i&.irL:)t^NQ.G@H5oO8M|*UsehA[lt>fKwT.3nmWgD8w+uoR/uY');
define('NONCE_KEY',        '1d glV8f2+Q.^QdN^hs,Cqpo-^Pn_~9(SzXY3:D(^^X-Lvdel+V)M(7+-46,k*>z');
define('AUTH_SALT',        'W/ogdw]B-[Rl70kDpd(N7ntl<A[1f@K~oEbC(Gk`5dUEh!&if-oY%D{*TV|<q?k}');
define('SECURE_AUTH_SALT', 'O4D{U|Yo9oFNekNm>Gk+U9%3:LUR9I?!{MFjZ}TYRT;D4UGsD$![Hl*~n4SPT(*]');
define('LOGGED_IN_SALT',   'cg;$]d&*0fprO/0JiC$^t,J4xL)&f6OWFk~xBHAasyU|u~ ?X m7RZzMO3Q|pGSy');
define('NONCE_SALT',       'aBrzCivn}P}:fhpC+A-Al?8[hNJ7JCUGIr)TyZa.`fP!Z!)-:c@Y6/.64Yr||wza');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
