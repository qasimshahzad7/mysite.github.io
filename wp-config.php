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
define( 'DB_NAME', 'mysite' );

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
define( 'AUTH_KEY',         'Q;}}waH%kPwf |uO*%w/JtFVRri`o3T0[H1/<kiSjfF8Ax6Qi@k/ET(_G.RdLq4G' );
define( 'SECURE_AUTH_KEY',  'Ne_+S@,ZUN37.~>#ht2R|8t5fQVmH[eRHsg~3Q2<@qoQ.Lf^1` 3ri!HPfAsv5]%' );
define( 'LOGGED_IN_KEY',    '`_4A/oW_43._fUjS/>qN<PDO^[0L/K-e6f9RO3^jzhKjB7?(6c!S^JVx*gE]qONV' );
define( 'NONCE_KEY',        'R/IM1SaDXL}[s|3ygF+dQAZ.uxisBE8.Z?mVSLUV.l{{X>wd=-<3RLQXTrPAVFK~' );
define( 'AUTH_SALT',        '88+@*;zrOVatnDHQ$b?HbG?r+e,Z S{~ae2&pCQg~1C[.bt_*5Z/x,T>2hYAQOn=' );
define( 'SECURE_AUTH_SALT', 'O=3h9.5K0<U-E-@)P8JQ&fO$dHc`E*xXh7UBUe.2Pf3Se26l_X^/kU``LA$TNw.;' );
define( 'LOGGED_IN_SALT',   '3&2ytpZ&vcY@OOD7|<<oci/+q(q]q5DA8]+$VD1.YHT#WkE@U)P@Nbr$&AMNgvM#' );
define( 'NONCE_SALT',       '73BVecmP>t^10vICEW:TxC@(LS1%,gVj`wZ+VV(<H8Tz[u3coHHw[1RakFoY;Sy)' );

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
