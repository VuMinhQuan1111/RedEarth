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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'stonerealestate' );

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
define( 'AUTH_KEY',         'iw1J6!Yg|KWcb|d{3(pf{sAXUekmAJY < I)mIQ(7__w5oJeAX``]fQy#FJfxaoU' );
define( 'SECURE_AUTH_KEY',  'ETa ya-U#!y32zkwMJ4{DX[Emd&FO)7RA.-D=+Dgs#wnUh|p{kh5&eKv6~+9|GU8' );
define( 'LOGGED_IN_KEY',    '=l;wxZ<,c(qND<~&+1KB`)#e=O$>VNh|Y*8!4ws;=olzO}+=`MBFb*dV cj=+VC2' );
define( 'NONCE_KEY',        'ibCAt&Ir qJXyp`nE8V)L-EWU:C<^<-MG(=F*wI2__M<9H|pM g`.}8]~vA_5}OJ' );
define( 'AUTH_SALT',        'n.()H4_*;3)}t0.]zJVtj.q8&t8g|#L,Yg&S4YC4`]|<*KyyMqE#AYb@.C[3 [Ph' );
define( 'SECURE_AUTH_SALT', '-wViB(h@JR{s:fD]}j$f9^A.O}iU4n-3GGXA?u-So+MOI9$6d094[O5r*hU;[bkb' );
define( 'LOGGED_IN_SALT',   '11l`[C5*uI81EHpUPIV.Pi7Z]05_h[EI_XzYoN8vt@!kFjZ[Xw.P{tE`5gqCc#j@' );
define( 'NONCE_SALT',       'q^~t=-QA$Dp0[)!Wj#|$,sO-/|pPO $?2pbm3-{I-%1Zgcw}fakGDSaff=n7|GZw' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
