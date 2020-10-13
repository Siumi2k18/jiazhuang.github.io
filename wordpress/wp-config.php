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
define( 'DB_NAME', 'jay_jiazhuang' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'GXRd`x9eXBHGP%=w!i[ZbV.=!t(}B=U`>+A|=rk6Up,N6]rM<f5)mUE;SXx]{O4s' );
define( 'SECURE_AUTH_KEY',  'N,Qv,_L|X/oeiO*f1o=N4y]ODM3c&$+nak`5&t89OYF1)}R$UnKW720#.o&5&X]r' );
define( 'LOGGED_IN_KEY',    '_84^[B(uh?Eid;feQ j=7q#2^bnBn.ZvH#;,j_MKBs^Z,cS``RqdHKV$h/FX?Bp2' );
define( 'NONCE_KEY',        'bKlS/?u(p,T5m ub38zx{$XkW~o_}([}|>2?FwNaEf@NuO9J9P^Mi4|Cxx.h[BsR' );
define( 'AUTH_SALT',        '_3fhwbgTBQX?!ctg2kvv?GV=bM|q U.Fz>G(-U;BBVp;_<: M1I&*z1X!fRN9pT[' );
define( 'SECURE_AUTH_SALT', '2ME$0$dHoFU26*]DO7m(auaxs7`|s~;Qk-S5.0F@D_AV+sJTQ<+z8VP%{b Zs(&T' );
define( 'LOGGED_IN_SALT',   '^9wEEs{_;7~6kE3?Se%92_cx&![)dpq<|+S^elUP`F7kC[Gja+L ||x1e/`;^WMN' );
define( 'NONCE_SALT',       'R)ea7;n:Y;S!;:eFG[%-6efj1>e3_BOBsBAo)J&Dc*O(hQ[y/#ouklyz/PD4R5j)' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ts_';

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
