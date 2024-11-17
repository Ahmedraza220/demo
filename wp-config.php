<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6sWz&h_#Q]lqo>B)m=v7SNw= 0w2|fkO&i*4=yH!4|BD)1)yP,orK!?1^b-])}o<' );
define( 'SECURE_AUTH_KEY',  'mh#e(H`|iuS|7rX=S:H+8xgti@q.:2zUn]eq*y_`x$qstd.s5>f%-G}l>#4c]wT$' );
define( 'LOGGED_IN_KEY',    'r@Qwb i|rgrkB|S9U%lBd$Yq)G7luR+@hpmyJ?1k,.|7:&xaUgr>acJrWY&R}hX%' );
define( 'NONCE_KEY',        ';ub_kb#+EA?l/P/smT64h8m9k?@eC_}LSSP4=tEvUjN28@L!,OYJ*!J*Wy)NCh20' );
define( 'AUTH_SALT',        'O;o*h0W[g 9R^rkTjNxX6m_{tY:-nBZcYkacSEKz089v*_Sx?+DpVx4= +]r[zGJ' );
define( 'SECURE_AUTH_SALT', ']n4$s79,5y/_*6VW)_+*uk+nTpn;y*~f~fZHX%,/?I9g`6cJ7=;B1B%;qU[-LXCQ' );
define( 'LOGGED_IN_SALT',   '}XNB |N[i*r@z9 5zNYIAUJnxLW./m<W{OJJ.]BQ!u9#Pw=q9j<)!<U_JrH:k$Fy' );
define( 'NONCE_SALT',       'Uk(uiyrJ%eKJ; GIHV>zec`?DSUq=EO~uwykX3>xLVd@LDj$EB/ y8YC{d<UI|Z(' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
