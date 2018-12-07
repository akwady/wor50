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
define('DB_NAME', 'wor50');

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
define('AUTH_KEY',         'g0zfcf}Z<17D@8DjY(PrCH3Z`ek7(|nAI3E%VSfQ*oTs_-alm5sT7>6Q,15uh&c=');
define('SECURE_AUTH_KEY',  ' X4%av*s,zeNP7HDxO6(w$sFSe`:{t;R(^M1mK}>,nNS;5?}5Jf(3dpr.Vuk$;<(');
define('LOGGED_IN_KEY',    ':/^UoH;e~Pe*w?l=q{ax`cavVsSF4{vZ^}5U3Bp%.O-nuJnQ)gW-J?R3z,oWiHnK');
define('NONCE_KEY',        'fU#S~~[&k8G7L(Bcy+y*D|%3Mf:Ru1*_![x3^SS2[ Rn)[#MDbW<~~}:TVUQ`:*]');
define('AUTH_SALT',        '>iA.<8j8hv,%=/dHGKxN[V(Hv5m7E/o30|>~-t]+k0P;Ge`pZn^l}^P3W}ux{w};');
define('SECURE_AUTH_SALT', 'd6%6E:O9.>sV95{a3lWn%h;n7|Zx9|zY,c;M]WZIA[.bbZedB[^e~ksP_,|p65Vk');
define('LOGGED_IN_SALT',   '6xqEfR^=h8JKNTE7=ZY:jr}k2$48u9X`!31*p^bH7uvE?A;9(2k>38i/h~E.PkGS');
define('NONCE_SALT',       'st61yJDV<X,|$qQ(f-!Bl%^6Yid:e}.4jNc;T!c~/*d]`3<!|~Bs<li1v!g9oh7}');

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
