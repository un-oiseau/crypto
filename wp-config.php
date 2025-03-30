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
define( 'DB_NAME', 'crypto_db' );

/** MySQL database username */
define( 'DB_USER', 'phpmyadmin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

// Upload size

@ini_set('upload_max_size' , '256M' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'o}S<f>4 pCZKGv0]_9|#}cC%1$xU0Z2b!F<:MfU1EzkFfv@cgjh v$-ht[aS7G*{' );
define( 'SECURE_AUTH_KEY',  'k@t4R6dXgv;,^Vc|q;dC]3PcfR[$^8sNra8Ff+[.#AJWECqnbk^U&N9fu?B#5wB1' );
define( 'LOGGED_IN_KEY',    'Rk^7DNf:*,lK[^(Wf6T`jw<&p#qS?ohWBT].3omkp7>0FZ-wP/kTL3=2t4V27v[(' );
define( 'NONCE_KEY',        ']lGZ}Z#1K~zX)5f:Kf570c@%u-Q^JtON]uZ!jX^-P,;YSkI 0=4;dZ`EmOljI08w' );
define( 'AUTH_SALT',        'Ea4c6As8?:%VIO&,#q{|AXMENb#lR#1%z>*r:wd:60Z;N.@6knn6j_ngJmyU,Yi+' );
define( 'SECURE_AUTH_SALT', 'Z?%t.*/-s#Xm&GJ4.!rkP8U(Uf(;+0VJbfC8J>oN8)W{$ReS@I&9O&YcHOk/!OCe' );
define( 'LOGGED_IN_SALT',   '?X%?aXqc)}kQ{Yy*x<3:qy;d~lVrZ4hHu!CaF.;wYBNG|],}8d(T}sQAos3;4CtM' );
define( 'NONCE_SALT',       '5nQ.Su8nQFEdZ2TrYN5Uj=$jHUo!^j;z,,*9`e`j$k`BsP6HDcF<PJ+3zY[?_yFe' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
