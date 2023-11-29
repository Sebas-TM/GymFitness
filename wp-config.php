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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\gymfitness\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'gymfitness' );

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
define( 'AUTH_KEY',         'w9Q*n1yXL1j9U9v]<m4/~cDKHFEl2QZ5%zP5S!goX1k7`yV[sSvfe=CORqdv}Hw>' );
define( 'SECURE_AUTH_KEY',  'ch*U,w/A&-X[ZI,Ob[I2``KPZdm;C=Ej}cm:%M3X>hk$xgK#g^(^wdcxQ.;k+4p#' );
define( 'LOGGED_IN_KEY',    'dF)qeh`i5cSItRDEHau(P5MK 7_#Av*~lJ&tHkAX_jvs(2Wm,W=aZ}=qMSIS`lwp' );
define( 'NONCE_KEY',        'gP?M/E]$9J$UbHYU(j-4XvGC*|!bwJ(P)P+()7>ZshgP#AJiQBy|65}Ww%+?s> @' );
define( 'AUTH_SALT',        ']P+*p<m<]iw w1M!(%hQBF%g1 Qemns.A1Km{vGvswL%)!]H44Cfa6J`3|iWtsrl' );
define( 'SECURE_AUTH_SALT', 'lVuALM?W:T_.g-(?<V@&UO%4Pa+KZ6+9]{{>gblg/_BAG9x;d;u?hyZ!Jj8&AD2p' );
define( 'LOGGED_IN_SALT',   '5A#qGRaV`6R nBc_j^|peDCK!%8GM,PS=n{k_Z1)W/hG/Y,di.HBCX?1SUP1+B9C' );
define( 'NONCE_SALT',       'i@M&lXCnk|`+XiYxg^u,lcR8_&QfisG!5wgm5xw#3v+wP,x5.0%V[]y?`W,KM%c|' );

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
