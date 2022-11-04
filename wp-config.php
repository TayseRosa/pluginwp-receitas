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
define( 'DB_NAME', 'plugin_wp' );

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
define( 'AUTH_KEY',         ' $qJoVEmFeyI_H68E:^ hI(`Sa!({2W|<fLzb)j@:O<)cs_Y,m~T2=`cgHv+:I3x' );
define( 'SECURE_AUTH_KEY',  'cO%RkyNW}Jd$_6kTHl$5;CdA8-;O`{Iyq=+(NSDm_i|]6FuxiY3c9F^9`J;EwY(D' );
define( 'LOGGED_IN_KEY',    '_Q]}%?2gIAFw]DaPCu&h2[;]P^V30KqAov}8{U=#bWOABGuGhS26ed8e/wg}Ak)/' );
define( 'NONCE_KEY',        '8kl aP5/!,mL0#]RLJv$)xY~l C@F$8ii %5na!:vH(*hH9al>myzr*DVXWFD<My' );
define( 'AUTH_SALT',        '>l;~.&|lMX8fbT[IzZw f.nP0I)[6(inie1!.TmaSnIb{B{Aam8E:1--%&gY<#`x' );
define( 'SECURE_AUTH_SALT', 'lUuJd~FUM$O8:Tg:X@ab~ZY:mrA v@997hU|{XjV a`XcoElf^ZEqw# 9X94rpqc' );
define( 'LOGGED_IN_SALT',   'T}UnZPLzk--$w$(col96G[u)j9BC.#{?#9)*HJ 1)bx:Xg[&l~o`MV,P|IgL-2oG' );
define( 'NONCE_SALT',       'oqKQy3$dn%v~lcSF~8r8cd27dVg`XB?=5/HvY<|O.WKhh{S, u}(l(<PiuB];U|i' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'plwp_';

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
