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
define( 'DB_NAME', 'wolfinsightss' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '8807cb50362e0abf984e6dbe831af4cbe746a2af18ac5579' );

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
define( 'AUTH_KEY',         'fE=tWElvSww-}C<Cek0_UnQJe3k]l-77[5SW~ S4w1Z{gV#p97&g2*acQ|Kz1rBs' );
define( 'SECURE_AUTH_KEY',  ';X1>Hjm}gU>QOwDyy(D-6qX7k-Z}t0?iL}U}~:02Wt23g,rKc-z%7Q|Y6//Ho[`C' );
define( 'LOGGED_IN_KEY',    'CW79@a~jFZ#*LOAUAyDT&whZ*P?TJWXLX1/!!RJ~LT3Nhg$gA+ixJIMbP[w:X;UM' );
define( 'NONCE_KEY',        '-^PmRFizh>E#T;(~@GQC%DC>@4VF>kyR;,1n2HfM8X*<C$^l{F@%6wm|7gymlM+3' );
define( 'AUTH_SALT',        ';Kv?UNk` 59vAa_MhYUPGS5[t(# oFj*dD<I=[2fEV{Bw&VN#mT{e/+YK|{OK7C|' );
define( 'SECURE_AUTH_SALT', 'UIv0Zzea1#/xHau8L,pX9(c:3zVkZn{+!P2^6l}uI~]:]{L_qfq{_9#!n0XYP)pi' );
define( 'LOGGED_IN_SALT',   '3W^c7C0Z%2JNFnI%bCzmtZ_(iLy`ZJS}:vwBF`CwgnR-8>_|F?jxG`L*:MY9BX!W' );
define( 'NONCE_SALT',       '>Q[)PHBOCVO=YR3f#]@2O/~~| ;mc5B::?y!P(9)Xf7t=h|gdN[CkJS7ct`8#:FJ' );

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

@ini_set( ‘upload_max_size’ , ‘64M’ );
@ini_set( ‘post_max_size’ , ‘64M’ );
@ini_set( ‘memory_limit’ , ‘90M’ );
@ini_set ( ‘file_uploads’ , ‘On’ );

