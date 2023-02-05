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
define( 'DB_NAME', 'solberg' );

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
define( 'AUTH_KEY',         'Nrn)*DmK|}js7zzIQT}!)t:l~lKJSqB917M[A-gom Zs_uC:?*bfk!}!@6NqKD~r' );
define( 'SECURE_AUTH_KEY',  'X_#9(XzG0Kjxn*f7Sk,b~;c ,COV#RRig1~Jk-,!Bn>=iCC/Rm[h.(UheQYo>8<C' );
define( 'LOGGED_IN_KEY',    ' =aJi~/V9;ZA*#jQyuI5ukY$^EyC3]0.1}MKnqJ|YEo{?_q7i~6+r+]dB%w[}9:6' );
define( 'NONCE_KEY',        'vsPw#:lv Op*`+.YuhMapxz,8o}Bw.Db+PIg;SP[{Ir4`J6SxPo!jr$D36bB7qao' );
define( 'AUTH_SALT',        '[5ox_3FexzP/k`siQY?HJUyUyH#!]@RN^@eGig>f2KSQ8j~gg3N-(h`(9i>bo*_b' );
define( 'SECURE_AUTH_SALT', '&x|FVx>Q%*CRQ`HE,5_.!Bo)cW@XJ:!w%WSwBlo_GgY!mnP| zYj|Q_ZSH|,xo^}' );
define( 'LOGGED_IN_SALT',   'P^[OZbYH<SyaPb*GbA)44F!Ba^ctLzBhN#+X84grUU[z@OHyJn}y_s?:*V |2=61' );
define( 'NONCE_SALT',       'QpW(n{H:?zKrwd&,7=_GRb|CO[v#jOhQ !Vyl8a/a2;kb|93%ilL4m:b5aq1I#5h' );

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
