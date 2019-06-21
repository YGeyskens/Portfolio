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
define( 'DB_NAME', 'user20' );

/** MySQL database username */
define( 'DB_USER', 'user20' );

/** MySQL database password */
define( 'DB_PASSWORD', 'HzFCdxV7' );

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
define( 'AUTH_KEY',         ']6@AhqotjtG%LMF,MBQG0]386M1A*T<0Uxg>^}7i[h7TZD4x#auQ=NZ&63FlAVb;' );
define( 'SECURE_AUTH_KEY',  'e=gO/YJqgI4~?SU698`.XHtS:Rayyu:!Y#,HS: u=A-oGGM=5K.GBDR%Icd2d-c]' );
define( 'LOGGED_IN_KEY',    'yIanM{dZ|M?FVMYsJ{~NFWAGnv/410_z`z855ShTQz%yT9dw Xo(a3/ObD+6yhZh' );
define( 'NONCE_KEY',        'xmh,<](`*MX,H`EwA<_A=_(85VFD#m&@IAn4nZ3Zw)SltBp=a?h!O9|B{bpAkMSC' );
define( 'AUTH_SALT',        '7~|VHQRTuT5I:BVO%GkB^)Tn{fd2b@@Zch0 -/e(1Dtkxz64,h.,>u6^3%)cENQu' );
define( 'SECURE_AUTH_SALT', 'XG#(rj{0ur[7rd65DP84Z2:}7fu?~QRUpw<Ev7wxOmmL!Eo_yZ?8.cEWmwh/*ZHa' );
define( 'LOGGED_IN_SALT',   'j0SUN2*gRA%6?;wnLcXKM.heYke~huQ^#v?xn*h2|r =jQo8inK%@p}Q&*f8T!_#' );
define( 'NONCE_SALT',       'J}1c:1s4%j*ic:Mom5K O4i&=%-^18R(H1KEw$q)AxBny9M1)ZZr`+T=1yKlZ3CL' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pf_';

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
