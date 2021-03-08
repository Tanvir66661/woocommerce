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
define( 'DB_NAME', 'woocommerce' );

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
define( 'AUTH_KEY',         '.8Y=S8Li52YZ95zj[J5C#@_`)8eYu}b%oJ1TK^kX6}(q2g?YI8D4e*`&h#Zw}_V_' );
define( 'SECURE_AUTH_KEY',  '+w;B?O5p(7R4T$=kW[~~$HOhFZlWT7QppfW/eR%;5V=k-!(!Qlpc9o~uh/Xr-&x4' );
define( 'LOGGED_IN_KEY',    '`Y2i=b~oruPVZ}RF.B31:U65juc0Gp}q_oy8Y,v@(O e>>qpcgz_0pnwE{U8c_&S' );
define( 'NONCE_KEY',        'iad!W_)vhOZ`:5:T]MI/r{X*aVZ,fw$b[ZUz&55=n:j1Dz{ChHPkl$lK^{RQYncA' );
define( 'AUTH_SALT',        't[GfR29q(wX2z4k|/|n{S*R8;PG^UiQ^aGv.$k8Rfp5cXxAcVRPizYC;/_oSU;op' );
define( 'SECURE_AUTH_SALT', 'g5A9OkKt5C`;Y$W|h98r_:IWnxW$638i:qhsQ:3&m?!{]_kqm2y:]oZE1;<KtA)r' );
define( 'LOGGED_IN_SALT',   'LzC(?lKW(B?7ygj&lcA,&$sqt)6Y])v5Z_cbY~EO[{hvUA^,Q-J5GBAnFC WL8yE' );
define( 'NONCE_SALT',       'YPbB_Bl><{>6WE8zJlOg bPVaXatY/l{oMq--0Yft$,5nnY1UwzRR??bN+)C@t2z' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'woc_';

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
