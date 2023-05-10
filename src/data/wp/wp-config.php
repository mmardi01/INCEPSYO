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
define( 'AUTH_KEY',          'b?h4uZr_r2?Pf^7EK=O.V{4B2DA8LDg`~*,[D9N[Y?Dv6c5A4#R tq7xR/D?>a{I' );
define( 'SECURE_AUTH_KEY',   ')n(dQE+0;*jTgb7^ese5zjCt ExXi+M)$6I&HbhK0kcph1Q:qYUMoNxJCMMF?<mp' );
define( 'LOGGED_IN_KEY',     'u{c.HA<a*c@}3Q~g4{]PoO/dT+VCEekdJFVL,-D{m6pClTc=rskgT?9;phUaV0Nj' );
define( 'NONCE_KEY',         'PoPP@OH+x. X;Y*lW|$$7Jt#R}jnY-0RnWQX,z8U`0rHeyRT9Qg5r!!buL/`MJ3m' );
define( 'AUTH_SALT',         '2,p}VmE@w)tM2%+MlI,gpS/x6PItD[2fqX,=F4n+5d7;gIVs;rgB`KJ85)Jh4A2?' );
define( 'SECURE_AUTH_SALT',  'JAXEh!91z/ZR>.S_{FPlJM2kBtqdL~jxO:gUBql$qOhRr{Q?MK9~]7)m>-MO:-6&' );
define( 'LOGGED_IN_SALT',    '^{pH6>V[]y&?*gI5+N!)&]g8sxO5pzJWz1]1y.UWlh-kEp:+yt2jI%D;Y+d,Q9,.' );
define( 'NONCE_SALT',        '~pf8yDkVSsJIN>JU]1[NO)O51F;yoi^JR@tnwGI9`i?pQJh 0+Roa>oBOo#^tNM6' );
define( 'WP_CACHE_KEY_SALT', '2n S1eKtgU6IY_Eq3gR:;z4:/Ac[&Bj=]IKe/66cfAlPQ.LJB3Q083`OD2j$7+aw' );


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
