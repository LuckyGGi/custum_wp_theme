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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'projektasej' );

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
define( 'AUTH_KEY',         '>%*qd-Ym}2@9lVoi,p:{O2+~b^(J<4?vWxI,nfoQ31r{CGevV}ZB1U:9*?gcyXIN' );
define( 'SECURE_AUTH_KEY',  '_s&!8f06TN~VQ4d]Q,{R#_zP zEYP6a92-!H)+Eqr?W{U-l`*)g2n;7<fyP0$yC*' );
define( 'LOGGED_IN_KEY',    'Ho=Zb;]QhKVfSyuv5 h)1 zI<9]9GvFb*N[aCQ{$WdA$^/!MI>lYy<,s+@-((Lvw' );
define( 'NONCE_KEY',        '4%bzj9y[i^~4[rs.|~MGHt0B>3`NL46TgZ[ot6egyPL)goq)%K@O,6F2]8xVgQO+' );
define( 'AUTH_SALT',        '_$52y*_5u7>}-um7P::*=*W0}| Nz(?r+XK0|dhu^48CQgE9G5ds4mZj:{<`q%;l' );
define( 'SECURE_AUTH_SALT', '_%%_],=*]<p6+V9-44is}a1MJu[:YfGASS .ew6>=}`_dJU l%CT8Td9mq3.p.JK' );
define( 'LOGGED_IN_SALT',   '&dNF_{+Y!*[NX)h2y2Zk8]chn<7=K<x{K92nh&oC6w(ZqrZ;#Yzo.)n/se+m%RP&' );
define( 'NONCE_SALT',       'n]4-zz+W+dwPMal<#pZViErora>b8?V[N1|SLNjxJ~|kP)1CV$@O#@~tHO1*~QeK' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
