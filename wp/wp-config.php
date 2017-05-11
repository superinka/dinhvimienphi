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
define('DB_NAME', 'dinhviwp');

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
define('AUTH_KEY',         'WU`k2z_d]!&#F`C~peWa*@[&^2U0bLD>ZPPvlm*U6t~M+8CK/bXQS-7{UGwMaT3[');
define('SECURE_AUTH_KEY',  '$9{A_NmR,};^ Bd@)YNxV5^)vr@OeI ^E@jOj}17q4wMY@z0`2;%N:ju1*~_|$cZ');
define('LOGGED_IN_KEY',    '>~n6Hnr8H(n,KqkGE=f?cjE]wdwr(BUzYo&)u`,xc#C`oEyO;9|kgXykj.$JoJC=');
define('NONCE_KEY',        'ucVg0z%B`utCu Xh(lYV`T h2~;Q1[dS,S_SjO8SMHq3<Cn/bTeU}?SV_i0(#!%C');
define('AUTH_SALT',        'l9pbK5NjUNotr2+_en>Mu#Z&2;5]l.BLM&wEHqo+.f:F.q2D3/rVx)l$?3X#5W^o');
define('SECURE_AUTH_SALT', 'AAp@!bUbo^~GH^(ZqP0Ci?Xp;{zY)^DpD&1?Irbp?2,+KBMKn~`Z_kICfv:IGbo9');
define('LOGGED_IN_SALT',   '-4?rkR&Zxw51j+xM|?x%$y0&1*zz9|;=unC~qf0vx0,}xKe]3F<}ps9~9IEczd@m');
define('NONCE_SALT',       'dL{<.sL~vJA{0;(?%Wk6gKLRL%-4!uh}_1*hLYfy0Quwsr]5Pe|lGax)fWfQQRNH');

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
