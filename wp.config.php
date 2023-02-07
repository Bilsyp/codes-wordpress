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
define( 'AUTH_KEY',         'ooC`$3N1>#7JpJCMbbZu`4xXap-FgJ%yS5i-@gKi1Gwbwm,KQHUjos1n+s89[4fb' );
define( 'SECURE_AUTH_KEY',  'J3N [U#Sq/2]r(WcW=Rd!a/?!?Klug4Gd@3agF(dUeh~})Svhpa`Wqw~$gPlQ$$8' );
define( 'LOGGED_IN_KEY',    '(0ntnp-giDYNwagsD.(j0zD_?ks3UFFMgA#14:;*Glzcl8?-xVxiiwd8#!l(#,Bs' );
define( 'NONCE_KEY',        '=f+>$MOg};Y3vLw=N^q*1(`*5zn!y|QNR7f0+od8R](T|x|_q-[Qh21U 9My#536' );
define( 'AUTH_SALT',        'nVu-]Q675V1%B6gd+-D6-Mbpil14t(lS{(J(,9n&l?7-W!$v6vc/u[hrA9i(.EY<' );
define( 'SECURE_AUTH_SALT', '.Fuy@#2E;GCrJMDlB!rbqwRSi PQm)<y9u=Viw6g#un,5{c(qWAYmoEjLNuw{,zf' );
define( 'LOGGED_IN_SALT',   '%|yiQh}E03_7L}TMY`h3o`CU(/$}A{0r-? >CS2^3tg<1:no?`O5Jq|[*M{.>GZ>' );
define( 'NONCE_SALT',       'Z+k^)Id9cqm6A?modowSmj);+*&Q>H|Fr)l`,`~D0Bmf8R^~US%8{M;%77Sf5Hdg' );

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
