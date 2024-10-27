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
define( 'DB_NAME', 'bhismaericanuptial' );

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
define( 'AUTH_KEY',         '$03~>-J3U8mrl2Cyvm*X~0Lax0vVWBT@cL>xsH5vp*.^4~$W<pc<T/lXS8J#i$Wk' );
define( 'SECURE_AUTH_KEY',  'QBQCVf<^U|kWdCB0tEitMc~7VR6-&[}+g:+gxAw7<wDV_KP;:i)@^%{]~P<DDkCy' );
define( 'LOGGED_IN_KEY',    'm6Omf0-0#4:vFl;?:<MOq#y53.#5*B.5v)AI8w[:9GK]n-6wt@$RiQ0JUj?0?a9q' );
define( 'NONCE_KEY',        '_VZ7Vh.1Ewou;37q`).hqO#s,R;G`<!LEgg4Lm6dfv(Oq@~0&fQ&2orS/>,.kvkN' );
define( 'AUTH_SALT',        'WQ{Rc@55@_UY,>)9;_.u6bBzAaX(dBY]E.|!?T6xM9CpmuM(:KB)Yno!05)>dP7,' );
define( 'SECURE_AUTH_SALT', 'pO{R;:2Xp )LgS/V`BcX8EFK+8O4>y|RQheU>|gS<atRe1D!8Q/OgL6h2yrlKQ)^' );
define( 'LOGGED_IN_SALT',   'h_3[QS<M2~B)#_]3/UP>If;&8K4PQBAo8W9mUizbnrsTqne)(r%-7rYJoW4??Jz3' );
define( 'NONCE_SALT',       'QNSl]ub!VAGU<qTg0;cR&pHnl2R3vY4lEA$j;>a]_Y74|PS?>Rs=t$eR`Nn2|6-l' );

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
