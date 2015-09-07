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
define('DB_NAME', 'learn_wordpress');

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
define('AUTH_KEY',         'hW:6V3C?q|jswV!<)./Wu8LfRNi?EQOw_*{u4u7:1Y!6A)GazA+Z[-^E#eu+v6$p');
define('SECURE_AUTH_KEY',  'ty>!*6BCM#-D dBqckn+L7)KN|ry3@I`oN7^[(N3`||HX +<Tk>/Ql9?!iEi49Ib');
define('LOGGED_IN_KEY',    'kHq,N+fU0`!PX*>51qn5(CC;[AQ-]J!g:v`p`neYhbSj?wF%Oy+;(3wXb}^!]Y$(');
define('NONCE_KEY',        ')g*Am_kdemAfWE:_W||F_:eLSXNo5G>Z?Ontc_XZ6h&fvRbFXOyYq+CLhRWc<T~f');
define('AUTH_SALT',        '/c/s:r:qd8o(?2Lggv=,ZtTkcW[?e$T)5),,P*v@hq/67nq?&p9d@0y w-+PY@$=');
define('SECURE_AUTH_SALT', 'k+JS[k;!x*xg}9A?nao3_ZozJgsq.LQ&9^sdf$[3 ^?gJq%ftrtu#sm9f~SxhbC0');
define('LOGGED_IN_SALT',   'X-B(5=ZjN=hWP>AsPjxL!U#wN1ONIy?sfNK4Jd5%#X+5wMxg-A7CY|=uep@W6Nax');
define('NONCE_SALT',       'ld[;M;k3aa5jckvZR1U_,e=| ,k1),J;:U,NMjlC)Q-Og_NKeFF.M!5zp[$m2`B?');

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
