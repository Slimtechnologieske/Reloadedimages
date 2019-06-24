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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'reloadedimages' );

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
define( 'AUTH_KEY',         'z/vy.z8opr`@>gYqXa9z.6!bCFMFix;)sQqZLb5u[5G_d69blMcnPMx4?796U>1q' );
define( 'SECURE_AUTH_KEY',  'V3|op3$}mO}]~9tBdlt P|7:?b2&;oG}y%zCXLnA^+$Lp,b:Yq|Ejwxkt+c>k0+a' );
define( 'LOGGED_IN_KEY',    'OIwK 0Bi~)?*hDAIlU#R6,dv<&&]Ip0-fjjjt{SK9>M|gAr2_W06:pD=6fNj@/GE' );
define( 'NONCE_KEY',        '+CnM-L~MV10*016om&-pOLk;M,.*O,C L-lFLh}u /Ba3?3ymM .Q,-oYx.So|qO' );
define( 'AUTH_SALT',        'SRT=6$6FZ^L^xUza)ZmqGYDZ!)+>%!pXTF%Y@WvyA g?q@}YgJ+h!t*{I6:2k@Lw' );
define( 'SECURE_AUTH_SALT', 'JCp2O65cMEw/cA,C6;aJhFE<`^~TFSG/O>!7hHH@W$Dh4%1R1ZK6nNxv[SXWZ[t8' );
define( 'LOGGED_IN_SALT',   '](dt!;$8_kHP;5rqR7Go`qQDz4H|h6P-0*xVo>i$Nr9r_gvD6MF% t TcVRbk_u(' );
define( 'NONCE_SALT',       'M=h!C&L6Ru`nz^[_sI_I{bV{T?QS7isbB[.y^q^~-9OwpV3Oq-_pChK=b[{DYXD~' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
