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
define( 'AUTH_KEY',         '-?*|N5Tp;k(ZykB[ tUo ,LCC-9zm&|v~D36|@8t#}>u9}EwgHj8H8OGge({Q$r=' );
define( 'SECURE_AUTH_KEY',  '?]k).]~B^|&V?ERdf)j%1lTi;n!ykgig`9tW^`Odo5Kews4s>%U.oym|N?%jE2J0' );
define( 'LOGGED_IN_KEY',    ')^%Jl1DA!lKik>P~$:%YW@?]P7kbgx fb|Pv0>Pm~dMRPxqkZ7f+=K:VuI+f/Bt ' );
define( 'NONCE_KEY',        'l*tQkzPKXZB$<K&PDeS<>,>m!zx4;N3K+8_uJW%4OEHm^;McEcss]EuI2acQ(Z[$' );
define( 'AUTH_SALT',        'z!Bcg93O3pH_<$rm,2{[5P]74v_3V{[jXdJ4BD?7lNRFGtdAwxV4nh:p0YgG^tjg' );
define( 'SECURE_AUTH_SALT', 'b4w%N:lkj{}+/E/m97UCw[_2~fn=gEk=)>[6Vl%qkH,zfXLP -56%2`k~H6WMG[b' );
define( 'LOGGED_IN_SALT',   'Hwdz6svN(r7n`FU[[2P9qz> zd$jRPDKu4*0u;o!JD#B1Cq=%)>9JN5x~N&5sm`v' );
define( 'NONCE_SALT',       'Ns^V= XF+k72dm/nG+3ysoxNCV1[f&3+u7TTye=GWtEeD4X[p#m{M2tZnV7dB!A]' );

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