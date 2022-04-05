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
define( 'DB_NAME', 'globalestate' );

/** Database username */
define( 'DB_USER', 'forge' );

/** Database password */
define( 'DB_PASSWORD', 'fR7ZbKrA0ULfnIR8kslk' );

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
define( 'AUTH_KEY',         'T;<es2}dKJrjoZf6I^f/[r@;dI}eI2NN%lkB;fz/|2fK,jSCG*0CResPV`towbyG' );
define( 'SECURE_AUTH_KEY',  'oP(`_zEV+srw:: 13Qbq6j-,wHxt~uWD@:qhK+@3Io_ufr>RaE8*T*tO*5vn._5x' );
define( 'LOGGED_IN_KEY',    '/Cnj:w6L:*Neh[Gu@< L8B1Gk9JM8vmN|A[AobZfMQz56[KgMY{e~UM&|1f]Vv+ ' );
define( 'NONCE_KEY',        '@O=jfk7(y(XH0sTk`Mh`<a-[67K17y9l&eD)O2_MoHitzH%Z|o|=JcAG_|rUEoL?' );
define( 'AUTH_SALT',        'Y&nNi7-[,=[V8C<CG-mZIsmlNe&a%,W26*].gEOP*a59D^9z<S1,@+!nj[12rYR9' );
define( 'SECURE_AUTH_SALT', '0P|~yQ/-Z+WakO|b/1!u|SCB^zsD}^RnZH+n4>qjN6QD0e9Zg S@;{$xYX#VDfm/' );
define( 'LOGGED_IN_SALT',   '>`i3F[9{oS y?p<bsjrpEN:dhFg}(TR!1Cfguyj=!!IVUCp fO^&2~r}@MjSEO4C' );
define( 'NONCE_SALT',       '+NiR3Y=,#zh^Gk5M@(t4[Q;sN%]hS1%y16XZc Nj1j m)f59ywYzK?R@jq5K#6t&' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gls_';

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
