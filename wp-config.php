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
define( 'DB_NAME', 'wordpress_prueba' );

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
define( 'AUTH_KEY',         '#%#6:mT*IL,=qqm-G-MkKwaf}G4%=d#yIH9p[O0+b<}h_<|dV/!*uEQ=I=(rR* ~' );
define( 'SECURE_AUTH_KEY',  '*9pHan3N3}_P;Qer(Tj]0psq9kRuU#)/CVCEhCL{X,3TXgJb6((/?mvW~}I#nV5t' );
define( 'LOGGED_IN_KEY',    'w<>^@GS1bCrUq%jopI/mvwjnq:&U4>uo_gs`+|Z&E)~0yyM6rz[>oHpH|)/2NYh^' );
define( 'NONCE_KEY',        'L-s/v!-Z+G?,,7.8f(JNAg0w~K(%}:!W%Qp//~}3kVSI4FUV*~b;=m+]XN)9HIKp' );
define( 'AUTH_SALT',        'a^8:X-`fu!MR)_LtNfzeKT_~1*=T8:AHb[lC`fm7CF2Dh&o&f;ti{2{(hOvOMy41' );
define( 'SECURE_AUTH_SALT', ';uXgnJPm@;r/CONy>8G^L_n=Q*(YEq.T[ZS0R}SD-.GE B{fg3=+bo!<~F*7hPAX' );
define( 'LOGGED_IN_SALT',   'Ku6`=n8:o-rAyAHZbd|4[uzOYV@`s(S1(;QWZ!MRI05.8$=_Adk7r#Si`6Mr,vks' );
define( 'NONCE_SALT',       'jOZ|#.zJZ&;k#2-)?$y<4jn1S-bfO~HzPE>Ia1i4Z F,N !FdJxLX8~-)z#!3u7J' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
