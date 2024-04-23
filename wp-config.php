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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_donador' );

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
define( 'AUTH_KEY',         'u&5Uwf:ozx3lXO[!d526t,kp$s4KybdOcd=(R716fUsN#(E|FR>sOgmPxWseR+H+' );
define( 'SECURE_AUTH_KEY',  'FT1r<?.O~q%[/+q{du}bE8j0t2bDW8H@<=$UBDl2MSPL<pa)8?j+sy[_TO&_iiwn' );
define( 'LOGGED_IN_KEY',    'qKJD.}/LQ@8}In^Nj/;Y%<HjW?37CgVurm*7Y/dXLVmO;goyue|0ThtN7jm0yNaG' );
define( 'NONCE_KEY',        '$Nol99r>n;1KiVgjaB!c-%Mi!oP]_,M+$I!$0|k0r(W,IMCBc+<1L~I1eN)YiKK ' );
define( 'AUTH_SALT',        '%zjn6;j6oQn_b%Dxj[^VFXbJtq%y& Cx:HH~K]:m{x1C*JpdKRrF#L:B;olCE@k:' );
define( 'SECURE_AUTH_SALT', 'XNa8zN7fXv.NWMi)qAKjMgfB,I9Nhmrdl~_BNah_%SIpUSS`I=*5J$f!;?7XU(7>' );
define( 'LOGGED_IN_SALT',   'ISD5p6f7Fh(zK/RkUdhjQ#mwaU->/brZi%o4 7`uO{W^)TghxGZN?H/DJR*#T=`E' );
define( 'NONCE_SALT',       '.HaGB1K{$5GsT|6(53s}3v*UI^!F4OyH4)MkYFza;iEEx#VU`rI1F^((BpF0%oSk' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_2_';

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
