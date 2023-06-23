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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'proyectodb' );

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
define( 'AUTH_KEY',         'F/h.G?rPDEG;?wY*Ha4e%N[o`$=|+S}ROK!6[=iNI$#sLrn$W(a%W6aLrBBw=,Av' );
define( 'SECURE_AUTH_KEY',  ',tsukypyPLroyl-#*9~5K/(<-#RVf;Un<wqwW,,g]O0zpUH$)4U<G8pKnKpXNuFP' );
define( 'LOGGED_IN_KEY',    '{~M^L?]9d eF1tOZcj??S&KMdzpSmx&dU{fX!{u{;)cKgR@UYTgIS*9<Z[^Go~KX' );
define( 'NONCE_KEY',        '6QwqGz{6:>&SD`CSUvs $.0bxG#`]MuoC$q#F-u+G#,~,HtBp!g}f9>_cOe=hu}[' );
define( 'AUTH_SALT',        '7Tq?Nh3^V[yoSv]-cjNY38*kvl5:WJ]`B=E}R4SAi<D_D%E@;kn8K+IY-vx-0{}e' );
define( 'SECURE_AUTH_SALT', ':5Zrs9TlUUvonv@r;,r3`0}+PICGkXvpoD_*Q]slf*0kzp!1`;jcfIJA+Y 4LPzT' );
define( 'LOGGED_IN_SALT',   'R~On&^2UJ-Pi?VW&a (6bM4.$Yk4vRU{PA9VahflIod5W$(Jc^%DeNt~w.na~M&?' );
define( 'NONCE_SALT',       'N5|]uLe #&J8bdyRqL290Lw3.Dc.%;$x#O6Rx]z3O.#oGmzK3;(}j#O9mm<(DBpM' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
