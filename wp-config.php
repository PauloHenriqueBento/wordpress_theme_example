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
define( 'DB_NAME', 'origamid' );

/** Database username */
define( 'DB_USER', 'bento' );

/** Database password */
define( 'DB_PASSWORD', 'bento' );

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
define( 'AUTH_KEY',         '!`b?FFER&qHXooB@7F7]KBz+;E65[`|t2SZs}[iFHi6lmin;N*K)EGN{Hq9&v8ah' );
define( 'SECURE_AUTH_KEY',  '~/]^t(vn1$BzRp9GofbBjAwbviDk8:=$*/%FMj|p;?e4l}:OD.4dF]+|^w?7.VKm' );
define( 'LOGGED_IN_KEY',    '5@;6MF5/V8Px1g09o[[q yZos+tIXTxPizt#xEtD-#Y-GO#Uy!-](jZHUk.{Z)/=' );
define( 'NONCE_KEY',        'w8jbb*ca|z]+)0E}YNLu!$z<pY7$a|$~kW:s%77U@o}<VwHVpvdU[/P4]c#f@|_%' );
define( 'AUTH_SALT',        '03P.C+5]{b^ewb#f(2uwvlfA^NVDFcN*i,FisXJiccN=wx^y!q~yi7F6 8RpJT38' );
define( 'SECURE_AUTH_SALT', 'iLg[k]7[Koe/)JUb^a]y7bVvJbE9e%[3(;3_Y@)ex!mm!9lo86 9#wRP*d_q`fO}' );
define( 'LOGGED_IN_SALT',   'Y^thed#fN2<N8b1ga2D I$ xpYIxiIh5iboN+B3E.^@R:G}T3|~)VhFK*U3I+KnV' );
define( 'NONCE_SALT',       '<YkQ]>/@RLfoo*v4p>?$L/(It_U/^#8{jvDz)=JkLb~`q2E^z4c@<}>Uj:yP(v}-' );

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

define('FS_METHOD','direct');

