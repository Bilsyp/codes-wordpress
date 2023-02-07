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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         'Uww=8`7W[>PCK//?Uksv ~ZE +>_coWFv~{pzVs3Q;>E#7OXx;s[[EzEYE890RZ$' );
define( 'SECURE_AUTH_KEY',  ',R+!n;s]E*1CYu%7zh91GHRH3$jZnJ[_v]W.6=47bw@;vJZ.<D]~JF4@&j`?w(?X' );
define( 'LOGGED_IN_KEY',    'j7FB9oa^42Abcko&_!&s] !j {`;ie_R^2>}o~Tk<8.5yvS[8=!Rz@<3KA*k{=Od' );
define( 'NONCE_KEY',        '9)ful1wY2Tvyb;k^C%8S&g?Fyz8MXJ]K%T~cDU,xZw3oSA.f8_w^B{SL-a-C3Xqj' );
define( 'AUTH_SALT',        '>GpR%v&pKF//rW#S@ u=Srpr-$(H[kG6>Q%=e(vk]rnh>=]A5Nuz?GTQ11$#:2><' );
define( 'SECURE_AUTH_SALT', 'V~ln |c)abFc7&Om;Q<dRVh1o6r,Qa;,%^+feq1n)F?S_{$K,X*i<x~Cc/Y/k)A/' );
define( 'LOGGED_IN_SALT',   'x#=]}nj#+sf7pbnw6^.Gl9pJsgfJbSw8kIni;Gk!5^%%2DDFT=$fBT^dc9~A|08T' );
define( 'NONCE_SALT',       ':U[I`oyLH],>Bv?]qGFEl&]Mm8u*:YIRPK8C%:}6v!)C[9IcprH*oVZZXocD#i^&' );

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
