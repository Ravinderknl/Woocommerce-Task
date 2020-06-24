<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wptask' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'uYR=-|>BhJ2ZRi!qC6vFG^.5fv.tJ#~Tl-N(z5D5n^m9Vh&ZF;*xgO$p^-Ef#^$P' );
define( 'SECURE_AUTH_KEY',  'RWXFM(a6,5v5Xy)!co]%rVfFQnGJn,w.OD+.jRW]p~Jg@X_G3G$?l*kXEoi>#SKd' );
define( 'LOGGED_IN_KEY',    '86AOI &YqT[RL`?Kup};<OjADjP E[WT*]Q#f5!xVUxU!YxV:Cr<FjBF9)_bI}E?' );
define( 'NONCE_KEY',        '@HaYS<YWd5LMUN[dCWu(9N.S4dACI13<@x}cDl4U#c)pWv~c75W@C/ADP!Nvvox@' );
define( 'AUTH_SALT',        'vOHR*-_uk3!03``1x{J`*5Hbm(9kkjxwIwSqIdn&o*[|GzB:HX4>E-w[LGV!8p4A' );
define( 'SECURE_AUTH_SALT', '^E,}pC7}1V^~xs.}f)pkO170%m3*a*lm5BSfBTFfpE`ReRj[A;OgRYFas|.8N}Rv' );
define( 'LOGGED_IN_SALT',   '0aa?W{eS$kgwl5eZmF9f48:x228T!azm~,D|RbS=ZWl-9iUi1Q~i.6WyEQhH#mMG' );
define( 'NONCE_SALT',       'me;9enj7Tf k62_#M<!&r`{)n7bu@~lV)~hj#_]q1`bm?%VyxOWbLVR,-C5pIEDT' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
