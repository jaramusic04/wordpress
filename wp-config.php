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
define( 'DB_NAME', 'bd_andreslina' );

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
define( 'AUTH_KEY',         'osv9%Q<x`|,d!]3B*S?Oc_OySGvgpo?%Q~qe/_n%(e`USJ@H:nZ93z*bHL=d!cMu' );
define( 'SECURE_AUTH_KEY',  'BzkN?4]yA_}kD>>tRBoWnCYUEYh(EbVhz3H}P8nyjgu{0nVIB7W_YRD(-42whBPS' );
define( 'LOGGED_IN_KEY',    'fw}k81O=zUA[S:YiPPP<i+!F9]Sx*yjwp 7^0U)*4>8-bbE|89BmX+Cl W;Gy%^e' );
define( 'NONCE_KEY',        'NHQxbe,sSsPO9Afk3/:W<%byVNEbV{w`(@<a?h,3uOWK_p9fbPe[vm0sU~Q9t;jC' );
define( 'AUTH_SALT',        '}s !k(NJ?{L7zim@oH0+&&QiM!A3Hm2gZtWgo#lfd2~hw:F$6C7z:*g[}A]|t^Nc' );
define( 'SECURE_AUTH_SALT', 'P)=}uQt9N&W/zec8N7tiM1@`uGtvk4X/&}w[u#I(/,$PqNjk)tD}  05~[{sY+*7' );
define( 'LOGGED_IN_SALT',   '%L,cL0QNJqaB7aQ@W+}Lwp-Ln,EI2M_$aP6Lf|QD=bOQ,jUBc.n-6e%0?eUN1hN3' );
define( 'NONCE_SALT',       'i8-7X/:3bNaXPoBO~=?i;N&SGl[qAfR6L|rA;MnWF~.x2UFIxVG.Bv//%*:N5Uh8' );

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
