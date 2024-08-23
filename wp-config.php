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
define( 'DB_NAME', 'wordpressaugust' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '@h1ghKOW@Bxg;~~mOlhnhI{pQ%G^wJf/`QM%+c|kZ]5Y>K9`{rl|_H_ a382:a+F' );
define( 'SECURE_AUTH_KEY',  '$O lm-/__#Kv9avEc|-Ov%l3Qh!ceU,D)[&>JgJRW!h<;e^uJ*Lcd*9IY$XmTD-(' );
define( 'LOGGED_IN_KEY',    'LIpVq?)h Fm{A?V!A+t$q1wnRC<y-T.}Vppx>$P_r/d%+#}-KOGO;B.t6kDu&%3-' );
define( 'NONCE_KEY',        'K1%[!fi2Vn6e@YIU,T_RT<u8~GDIfL]}&mV$-PRJg,GyY#`-c`[Y}o#z}J`M!%+ ' );
define( 'AUTH_SALT',        'x/djPPD<oU&egHqym&s_b~k}#&^xfQX!0duO/#+0=WI7L*&n1D:HMvqM*d0C}b@z' );
define( 'SECURE_AUTH_SALT', '1!G=3YNziiq9|CUVh?a5liwTc8uBrkLAYQk5mh)4i. $MES03{@z[Qz|?_1Mi?Q}' );
define( 'LOGGED_IN_SALT',   'l,Nl bw}6npS+*jE/oRbjk]=L8)I{lQ$RQMTX].z]kvkj?p!}*vv2(sUZ~}<ELva' );
define( 'NONCE_SALT',       'BuuyOQ{*&Zg1H[2%%G^vviI8q{YvwQ9So`AF Kfym;KB^;j:F|T $#Gv/+]]k8t5' );

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
