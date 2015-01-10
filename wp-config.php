<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'condo_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '.B^#|ui(`q5QWadB^Ah.TD`$1]z/b+WuXh7|+MpSGV2@?dU~;v(OV8~d;atcosEU');
define('SECURE_AUTH_KEY',  '&Yp6y2j[@9Y?LFA^P4}bGaB=|l0u|+}F[W:|;Ej0Z?a8 ptw-s%^.d|%*0`7+X!V');
define('LOGGED_IN_KEY',    'O--Akis`_@d:gw)wilO#j{79He_A)ERB[TF>k.q%x3|Kj*0;j}b%ClPS{J?y]{Zd');
define('NONCE_KEY',        '!hg@~gtMkK|zx#}53WT+SpT#-655= >kKMCwb.-_hw[mSSf8+uINrJ-9x^w+znkR');
define('AUTH_SALT',        ',Bs*[8^c*#HGVxo-!wjsHS1AiGW#Srn,x.<7|R]LeLIE/q/oEb86H5_:NXIh.^f2');
define('SECURE_AUTH_SALT', 'n0-F:BgTVBSf_-LRi3eY3JPG:P$@` o%]?m=G/LY$EyoP-X$;{44h[thk{]XKk8(');
define('LOGGED_IN_SALT',   '_m89JPUP&{J4]UXsv&v7?}#UM?&,s@}0in}2[r:8ERU*0H8-APa<PI_Z. 3AF&K>');
define('NONCE_SALT',       '?X>ASU%vgU-VYC&K-3L-yo CLFou?=~3^N(vy6rA(,iI=%O<T11oPzIO-l{iJ3_n');

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
