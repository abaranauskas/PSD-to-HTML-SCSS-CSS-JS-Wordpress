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
define('DB_NAME', 'dolorest');

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
define('AUTH_KEY',         '6@`/Fz6a}!SUp<YrS^1N|WwCDOQ+]4cE#xdvcw2Ye/.W$!1s>_$d)<ZR&VQF88h=');
define('SECURE_AUTH_KEY',  'w[V|cUaQ2_9/ki4E7(;H`O{fPe6{pYgt~H^uo_`?JO:Gx?92~`%lTN7BqdybKOEk');
define('LOGGED_IN_KEY',    'ES0Wi.~vLl[&n#~3+Il7:x(lI{miC16}o{lO=CkRRPXBX0b P>BkHIxC%(Ki!u/s');
define('NONCE_KEY',        'CA+,EM,A&wYAb GH2~rgs@kw!],uVH3f-b&CgEBRRTh]o~u%xLU%-](W9gfuDOQd');
define('AUTH_SALT',        '*qndqez;!<:g$e RaGXegg$KY..OuS@BGt_cz=)G^`t9A~U+ECKz-E-oA4n^!AIW');
define('SECURE_AUTH_SALT', 'AQ~7%Ry)7n/S&z:9-/Xrb DmnS oO9750@t2]d?dgZN44WRlHA$CTQ^/m|n!cbXT');
define('LOGGED_IN_SALT',   'bQEJ]kDHc.Lx?(b?nKZ?81DO4^[roF8o:_|]l3itBL-t]e`=L#K#&+K{ [Z=kHk6');
define('NONCE_SALT',       '2_O`+G51j;i9U^[{``]NJ#d-y#d460Hz!5;& }MD#n KwgTaqkDhcya?tv%hb?O4');

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
