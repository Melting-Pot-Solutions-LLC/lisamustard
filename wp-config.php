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
define('DB_NAME', 'u620551323_lisa');

/** MySQL database username */
define('DB_USER', 'u620551323_lisa');

/** MySQL database password */
define('DB_PASSWORD', 'qwerty1');

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
define('AUTH_KEY',         'kHwJVe&$GQvN&1Bx,7Ts;)ay3EM7d`%H%1^No5Q+]2RJWHE`zYEuO~La9<$lcN!y');
define('SECURE_AUTH_KEY',  'Mxs/682hG!ETM=RS$)xR}G~?cOhM1c4D:oAdLelA0/Kk[$.XKmyj<{I=6an-H@7z');
define('LOGGED_IN_KEY',    '%2Y>29ue~i:t&I/Ab:VmyTuQBo?L21[:A=01~O:u3P-,1|R*=;mY#zpAw2|B#_-q');
define('NONCE_KEY',        'F;s^)B>zYM2u64@wdo|_V!sn@h]JO8,PF)BJd`{d8o6,oz.}!|smN^[,th$4XwO9');
define('AUTH_SALT',        'fT3ew#dLLq)~EN#B13A|KoX7rDP/G1%2|.ZRDduTvq;~3ve!)&H}=f;Ut2]^cz+n');
define('SECURE_AUTH_SALT', 'jb(Mu)CaQyhv3_OU.m^$J2dVuz5h~OtKcqa_n&xJ??~:No=1(8,R<bnb:{camR3Z');
define('LOGGED_IN_SALT',   'a;/D~-s!^GGfhc2lk,Iwo<I,;cS@os7>}MTje|:qlGbRKFDHzX1ZYbi=m=TJmdvd');
define('NONCE_SALT',       '>*eUss@.B~n#&!ZX!C@I8s*nh9,]By-YPk*:Vi*Ezn@}%1fGtH`W(RP0]CdASu(;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'lisa_wp_';

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
