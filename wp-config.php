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
define( 'DB_NAME', 'realhost' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '=De0% 5iYB@f-9p0e^?nhYspa^%6D-ra*o,Hl#y9oih#kA;t|_l1dgmthz=F@ kk' );
define( 'SECURE_AUTH_KEY',  '8MS3*]lTZMwvqJ;RzoAFfz~c56}`BVK01v}~^W&-j|5Wm&FLAB{7x&s]!_h!d+t#' );
define( 'LOGGED_IN_KEY',    'wnam,+p-@V[u 9f}Jy<d3w:ExH_2$#gON%yJ bCS?LZCM|{]VP^77?EI5U}VVRRV' );
define( 'NONCE_KEY',        'PvHFRTBuwHadxi)gJaZ^00+GT4$xZ*-Z=bzBN20!hpS^*`CM}[Lf>x6YHBLfxPUY' );
define( 'AUTH_SALT',        ' w}]@^~HY7xAf=,wxoKCo@z1O8%rr0/.j!,<iTP,j[x(FXVR|c+l@UGnf_PyX5XP' );
define( 'SECURE_AUTH_SALT', '70G,h}[I7oE!v8Tus~ZP2_#1NaMQj}WfjE!:^%5Bs;[sOc;s_K{yPoz&a>V+{u)l' );
define( 'LOGGED_IN_SALT',   '}v$aM+%fuYmD]sGc~bL7-u?YLDfO]vXR79,!Up8jMSn@Vw~JWA`jN*?FqZ:O5JE0' );
define( 'NONCE_SALT',       '?h(5<yXh9u]pM<0GOsV?@^JXf}eJslZ+2ovI3GI=A&iF{ PDd:n^p vT~R^+#jb3' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
