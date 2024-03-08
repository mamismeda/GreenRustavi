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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'a9w&r*;#K6V9Y=.8KTVR}a]a<FM]5_`MZ(ju`f1k.W!Bs{FOxB)e&n3dzHI4&CSv' );
define( 'SECURE_AUTH_KEY',   ' KvuJSgA(ZKaRK:k/`,<4w#|k/~;m*{YOfz-l]QPN{BRnCu5b$$++3^fbp}.MplF' );
define( 'LOGGED_IN_KEY',     'r7brf_A4e+&.r0&EeueX>O~Cv6wADEviur&m=wpd5U(dy&LVlj{%/xf|^AWCvw<|' );
define( 'NONCE_KEY',         '.Nj[`-k.P~X2A+aNj!dEy]Ud87&6lh((.sK:7Qd]ZXUcw/g[`E*HUvz#hIxAgn!}' );
define( 'AUTH_SALT',         '[^o2-7Ju;T/QUVy]Qm*mRw~SZ&#4[3u#Pd$X0ztc9`Kevp!x!.mpiC<Qb`_L~/6L' );
define( 'SECURE_AUTH_SALT',  'aNY3|j20OFtd/OsF>;4GX^|a>.)cTFWn2-xpaZUR2W+^hBG:~OG-L1QKAC@&gukR' );
define( 'LOGGED_IN_SALT',    'fj4  MGH4OC~Z!.iQRo_&ine2n!Gj&I07tl,Gp;^Y)m o73kgM_dny/7StM!cu|T' );
define( 'NONCE_SALT',        's&}<uFlt!Cm=,7W7q[.19>vd/Dqlr:QX$dnrfA}h/F~L?fiC|B+b,+)#6sy884X|' );
define( 'WP_CACHE_KEY_SALT', '_|z=3+SdSq`$:Dqaeo_,qW3/<gPtG+B``VOp{Zj8GHz&*:xM__Cz9SskPS-Ixb2C' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
