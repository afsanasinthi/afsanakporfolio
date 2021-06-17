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
define( 'DB_NAME', 'sportfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '@<-xvS]5xq5iX}$lO~n>ws}B(]h9#w?quOefdd2HxAao`eIKp/zE?x5B*+_iOv@>' );
define( 'SECURE_AUTH_KEY',  'FN5Z7bEJjX|p8MqvzZu7@beVVRg>w2]%1m^V0BQ5sPzhsBK~7[Drjboq6DdB==B6' );
define( 'LOGGED_IN_KEY',    ',svTh,p30j/`c4#R[g#G;L[~9b/XBbR0+3 =WEiY07bNvE~GgjPqV>{~=E.ew6_&' );
define( 'NONCE_KEY',        'FlCkk:g6-!z4uV#NLMCUM0._1J;3e)|fL@veb&.5iddh.}r=+:(_jTlMD^/_#D+4' );
define( 'AUTH_SALT',        'et{JWpjipOF?4@P5KY#p}cpdrzt4(.8[mQ7}d5rqU&_C|Z7`&EBm6p-%<b/-f$&%' );
define( 'SECURE_AUTH_SALT', '1O}z)IM#!-N]&EPB2ad~u7]OiH&@BSFV~;Ez#%`nb2<#W+%EdFX^sA,y*:HbGl)Q' );
define( 'LOGGED_IN_SALT',   '8aQN@MEsyr`EL]=!O|]u0n,Vk1^85MA = !XhZ6D5nj|)8LC:joE*+OR}KVZ0N$R' );
define( 'NONCE_SALT',       '`2v7VV5xo#P&;IbrwfRoIx_HvjGl 1~ZFJ_`J+A0iEb3duZ74}H-YnoX|}a{UOm6' );

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
