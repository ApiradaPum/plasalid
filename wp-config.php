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
define('DB_NAME', 'plasalid_db');

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
define('AUTH_KEY',         'Jh[1jplP#,6fX0|OwJS[H<WXTCbet5JF %zFO?~[`wyQ>-X(Upv@1vp*XF0$5x2]');
define('SECURE_AUTH_KEY',  'dLrXV+W*J*R4<k4IpPecqp,-s-}vG`/zE]U>.UE(;DNW}mfOC4Ge34q2c$uc}y}$');
define('LOGGED_IN_KEY',    'H<M/tS1mX:rJ,[3iW|cJ39z#3=fK_X=Dr.s{+XfV]^*KEOZ`::NS@@y8Vprc4k*o');
define('NONCE_KEY',        '#l]~oFY]266DPztaZ^,]nowq>QNwv-&[>[_}!s$Uy7cyJS/_[vDd;,Eq(r=f5i&r');
define('AUTH_SALT',        '?8bm9}O?1{i6ybx8^xBI!$^Qq/-MtretuehVpHgEyl.alv!ONg)SABlsVuXexdI9');
define('SECURE_AUTH_SALT', 'Ba4S<6W7Y,[FbLoi)+Kg5-Y@nS#2;)4IAwPl=`/q%L#i_[)bP&Ot1ns5|wjCBw[~');
define('LOGGED_IN_SALT',   'r1D[Xq,3|n Wn7987W8pe>uHR;/Oh.P8z?^Jfdy2fX5960 vCt8]n`|35w/2$Sx#');
define('NONCE_SALT',       '2?or/Zsl$Q*zfZhl%[T[>VK^vtE^Eshaw.+dOQPd+rhD1vIMnR|McsQT}kQ^3W]a');

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
