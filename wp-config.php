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
define( 'DB_NAME', 'usfl-wp' );

/** Database username */
define( 'DB_USER', 'usfl-wp' );

/** Database password */
define( 'DB_PASSWORD', 'usfl-wp' );

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
define( 'AUTH_KEY',         'EQ-`_97:;kb8h>f28XMC}m=Bv.aB0-|KVOt@m?Y?<jfkvj &Ppd<;MRvY!!:icku' );
define( 'SECURE_AUTH_KEY',  '2{}kc`T[T+DgH[H=2el^$}:k@$X-`@}g-,hIn3[QehMtqsJ4,/WA)-C3Y|S|uG/w' );
define( 'LOGGED_IN_KEY',    'HPj*r(?|zawRl~?*EXfrK}RjHLADn{&KfOa<IS11w@4OzDR7oqJKNRX8V6.Q1}c@' );
define( 'NONCE_KEY',        '^ZCCW4C9[QIb3Xe~Lzo%LRSZ)X9Nkp7jKWYhXi*?<He,50E/YgU<&$QpaNsBje1e' );
define( 'AUTH_SALT',        'fbO^D)1v?p8;YF=-Asp5SK1HmUcLr0vw6/EtWf;f=vUyX{U2YPEv5e)=%8(2[4}^' );
define( 'SECURE_AUTH_SALT', '_nUvx7`!Q5fKn0)b$pz<(-J>`QA~5^=@&)ZeW%w)Ku0,x.!E%jf!H(&Cy=okcWza' );
define( 'LOGGED_IN_SALT',   'J4jqN/iTR5U{p|}8b8)GqeRNAw,A)*.0otPu3p<Y`R7iIq5lcv]!;J<hvqXT1RpE' );
define( 'NONCE_SALT',       'xCBqw7v.9x0{GQI9O8RS9s;(rvUUuci$p=F_wCn(8JzaVN^sg-aDsjye9]X-sJNx' );

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
