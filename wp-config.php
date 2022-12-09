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
define( 'DB_NAME', 'platzigift' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '=A[*_?A;)mBkB+Hk:vYUL{Ne3wJ0io^`G*AhWc9/@XR4-H$)`W>-F{BdtpIb2ZfW');
	define('SECURE_AUTH_KEY',  'HKnHOxOn<<mzG,UjI+Ab60y5|b6+9v2a=U]Vh#Q3}XbO<#rb#k]<6k{vSDE6,G6*');
	define('LOGGED_IN_KEY',    'L-)/QI-KXctoEdANN)?#xx5<FK05U8QSzbnC,n3|`fwo|h}__#O5S3<-2dNq?(Xh');
	define('NONCE_KEY',        'X|CMlcwNGO@-]6/V3Y_H!-R]pHb.+xtFhWJgWUl3UN@iDrW#vEe9|rIf5u0 adu0');
	define('AUTH_SALT',        'U9kq$W|wSd %Mhmrk7k$=gzzvst)U]T$044wH84X|y2zFNx-|<`nl^2x8t.(,<Z:');
	define('SECURE_AUTH_SALT', 'E0xc<x++Ue?TfBBB#+lW=)+Q$^0uw,o2[$_~7O[l)Vw7%0|&- J3*E;X^v0P)d[t');
	define('LOGGED_IN_SALT',   '$)6q/f=%won+rQVe).)oV~Yg9nOf<wH|6eV*Y;?_j%2uV`dhB8y<nhQv@(l}1rx1');
	define('NONCE_SALT',       'g>$6+p<A,:kofJuLJE>-1[Wu|<*d/uzc,z~sfn]J|5:DerjywG0%{/_mA7YLW/Xh');

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
