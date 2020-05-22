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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'agencia' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Oj7WEZxC#cl/P&+]h?B]8bYI+tF&!VqLsWF i^Bk!$P;Qxfu[*gj^1lG)O@ED1;-' );
define( 'SECURE_AUTH_KEY',  '5=Dq8#n: Ssp2q-s;B@Q#@(#vb[:g@ry^4BmF{u;J!+bP!|i~J oB4pF({6~R?37' );
define( 'LOGGED_IN_KEY',    'Vr$sd*^RlJ>aeE6i2Cm-gm6d3T*:B>UO6!a*!YfL`GpF3LZCrs6n2ZxrHcy`D+6+' );
define( 'NONCE_KEY',        '}pc{Rh~)sCd*T*q:pY>3;^60uRDla(Dn0]mGD+B%a]|Ax{IgoXs^0^*UN|5y)*t&' );
define( 'AUTH_SALT',        'l@Ik,elI8ZF7kPiBL2H%5hMWV {],2G]PB#^<02:flpEt`l0C=lq1*=-~QNY6]nf' );
define( 'SECURE_AUTH_SALT', 'm.-ca(|C0(D0[ks&djkwkZG,#5qhyZseUiHn}s@_ZC6F2>ZP8eU`OK|ql:LxlYDQ' );
define( 'LOGGED_IN_SALT',   '+@ivJ$(9m*0QixoBX+!;WdF)OG:*TRE{~,{vhtzW3YXCa}3YK^SvJdUKI2tOc8*K' );
define( 'NONCE_SALT',       'H,5}>QyJ#jW]P-_P1yo6)3,AZ{IrBl<h}tQ`Q7 qs+>^-|-oNs5mwT47*GO%OC91' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
