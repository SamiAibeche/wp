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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         'oaJmn3 ((S^PS-Q4=8(sa2,SG{u1TeTI<wk5^ wNfuJ3t)Ls@E/,%X-/e)#Kf][E');
define('SECURE_AUTH_KEY',  '86`gYZG}vJ=QI%EVR|;g$`|r%({KB-cGo4?:5E9chfJTO[|,p0Dvp5As-[^HHKF.');
define('LOGGED_IN_KEY',    '_4j%F#]S-c3g4n}gY-KlSpMBm8F5&H8iK&:D%nJADoOiVNY]z3<Y+_-S4>Nwj&!M');
define('NONCE_KEY',        '9M&}8g/whjg7fTw>+MuW|YK67}A_v, SN0u9|kn+/[+d+,:{+N0V!paF)RD3G+Oo');
define('AUTH_SALT',        '/R&PiOcDA/6HqV(RUrhKRnlsR9r^xe.3dF7Y*Bi7+qfOrnWT}<f4Q=-R5L,<klRq');
define('SECURE_AUTH_SALT', '1zeA6Xa*5N#^#3PQO(W|PX{%}b);o-2`Tv8[Zv/b*#Qyz_6Xq2%t(uSs $ lE*Y?');
define('LOGGED_IN_SALT',   'W/2Mlp3X`3dF+d^UsiHY>[i[~vX0v<2.TQzw:6U.5=<C+AVW>^+5&A6NZ0|CYRp5');
define('NONCE_SALT',       'P*,V%:Lv btmTPQ_.(@RN3]L=J)l])Q{&3@lr(v=&0U%a[_F-O3~}WRtiI?|~u39');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
