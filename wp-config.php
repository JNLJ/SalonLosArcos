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
define( 'DB_NAME', 'salon-los-arcos' );

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
define( 'AUTH_KEY',         'k$ U`<)ru])`#{Vx0%(WxY+QztOHp/Q}>t3LZ[GDXr6XUVm&K8#1dMp-n*aP f(Z' );
define( 'SECURE_AUTH_KEY',  'WS|&> xG9<<V/T7KSKgwW{P@Z[Id:+J0?fT?Zlxynr1rC!>U|KTpJ,Hzo? /L4m-' );
define( 'LOGGED_IN_KEY',    '$8_u9To-c&uCmdNyr?#g<,)#YzsL%~CkH,r+f#*NYs7&W+_ObQs`h*K-LN8X9*Y ' );
define( 'NONCE_KEY',        '&_6[Df }qB^0s]/2OdU@rPKjgKa>0f}R(|VDN[8&,% Aa/-dO]tpFcA+iu7~9N`A' );
define( 'AUTH_SALT',        '50i:j)=7C$}W?Kqx/nUJlRen<k_}f=s_QCX;7 b0*b{9|44Y|rB1H%J]bkvo>;LJ' );
define( 'SECURE_AUTH_SALT', 'z[sE~E1KV!qFt^/+%j1oQk:.Vg[f%!jLlPFKJem/wzCgC&B4sVCG:.tU|iM^n,8N' );
define( 'LOGGED_IN_SALT',   'oicT6:,9%Yz#Xie>po[y}.Xd^8`}1MsR5;<=O-Rk=GR;zhrG=LkWVb^=1a0.(k).' );
define( 'NONCE_SALT',       'p:9e7|8.P/:O6+qR:*6)k3z. HVwn/cE`h@gcsmk*y};?sV)|`tJi]-uZ)X!!(`/' );

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
