<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'waqas3' );

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
define( 'AUTH_KEY',         'A><E>h;.ewXe!9k6/y8e%>Mxc-& :U(s[:_P>1xfknt;{PBps!cyh@@i:tT_w1pT' );
define( 'SECURE_AUTH_KEY',  '%e}Bm4mo:+Hqm8mnUI%X5P&tk7;pu4<Q#P9!(A[el^$gW:O;vfV0.-s~4vYVT8g!' );
define( 'LOGGED_IN_KEY',    'oW;NC2bGWxm}XZpo@TV5i!n=JsGtkqM>/[4HJOW<iOm3GTIu/Jop:6/UOy>,(h%j' );
define( 'NONCE_KEY',        '8[mkDG|t8eCTmaJN_H*Z|-3gG-1F9i?dudX)Y;H:p.>z%V2zBdRm)h-OTd.^NktO' );
define( 'AUTH_SALT',        '|$+a8jL22Vn[7d]sD/[V^IOM<hwMF.wzkDY7Ya<=Va>4AF[l8of)OZ&BZ[><A;>^' );
define( 'SECURE_AUTH_SALT', 'Iklex3!MM<uqCF#;u-Pc) V6Wyr8:yx$)40 >yRWRzJwO^(~a$.%kzUi@5;AqC8C' );
define( 'LOGGED_IN_SALT',   'uXX1jYG 2T>ul!U}Vgzg|Gu4auF-+!W,tR4Krl%G1X,} 3=SJp~<=$|H]R+gmsn8' );
define( 'NONCE_SALT',       'J|Gp=8^9ue!:(iR+W2!IZDM[}Aylh9$Ekr166xjb;Ha&GxKJg[h6O&*T=+@@1%&z' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
