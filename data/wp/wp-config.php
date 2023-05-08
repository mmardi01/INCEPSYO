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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mariadb' );

/** Database username */
define( 'DB_USER', 'mmardi' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '509u}*=AvT)%YVN:%@B[Q7PR*dD&i(nsxy>r5u-O=IxKr,[tC05eU$OXwZG]?DCR' );
define( 'SECURE_AUTH_KEY',   'gFsI)_Mr|G9`i~&+d@L}pCukhO-7m2[j9jmuatYfigWNF?;I{T=&v+]cEY`*4B=t' );
define( 'LOGGED_IN_KEY',     '@d$!rw?+MKt}6F9Q2tK)n}u_G~fB)dEbw} 1w#[x;JiTo6_$Dz`3ThT4^X#N<X29' );
define( 'NONCE_KEY',         'R#+eaNzfi_(Ih96LdY2H/a7%4#NWTG0,3#^HT1bT]Hk,qC=JV#F%d&B[mhE()cy9' );
define( 'AUTH_SALT',         '@lzNz#[Bf~RA$ryb!)p52*vH%rlG]%?I|l1aV9S?20W!t(h=vq[Zloj;U&}?82^B' );
define( 'SECURE_AUTH_SALT',  'ju*|sSqKhRks8$$j,D6Dw(qYHvBI<#uM-IHR~t{wW~inN(5sqhAeg<UV8|vq^*7G' );
define( 'LOGGED_IN_SALT',    ' j)Ci.g@zfq.xdP}MP@8sN.-8:NrQ;=&SD{8i&8dHiso%)NSv<AZS_?r3k ,duF|' );
define( 'NONCE_SALT',        'SrkXu|j7qFl(4q0nM:Bv[&P83cj`Q!p2{ei{((G*aVX)kaU72U%SsvO>J >mJsG?' );
define( 'WP_CACHE_KEY_SALT', 'd7WxA=YP ORi#/Mp|4-$z99KXmm[[lWbz}K]$&8:jGd@/-A?lx]qq9MQ>&MeC-0D' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
