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
define( 'DB_NAME', 'test' );

/** MySQL database username */
define( 'DB_USER', 'randee' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Shoppinglist!' );

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
define( 'AUTH_KEY',         ' jFj@1vW.>R1]6cUI}BIc#KwiShvj0HE{_zvEu$<l*9@Ef08MA<68:)gP_@P~>d4' );
define( 'SECURE_AUTH_KEY',  'Vtap*G#`{d_|8OSf(x NyR]`hMo!I[LIjW:c_CqF[~zmi?4,laHY(KK%)z(CNr($' );
define( 'LOGGED_IN_KEY',    'S_!U+gCGzmr[z;+c9tYE-FVet_@R,g#X^48>ycN/OcG`}.Uj}oT?(nU%l8b(RYC>' );
define( 'NONCE_KEY',        'ptIrBUsJ56]vIYz|Ra}kA*yisR 1|Y|~k`jWa%F*wJi,si@pc;lgvZ6A^hdmD(pt' );
define( 'AUTH_SALT',        '6(GwdaK)pPUD5&Y2e[oKG;2sr7[5>a<mS]F34`N-HSCTHrggKBVj-Cx:9U]Ng#<h' );
define( 'SECURE_AUTH_SALT', 'Fv%:uJ+Fy7P&M!@}@tXyNqH33JI?X~xdOv0bK[U{PSnv}#a!QW.E:7GGdF;:fz=H' );
define( 'LOGGED_IN_SALT',   'n%q[UN=8{Ud*E6S~FETjFmLKH~UgFcRR.Gb,&jSDN47hkJ/bWLh3huW2J;jfANKG' );
define( 'NONCE_SALT',       '{8ZjP $#re*oD^}DR(=*i<MJb7EEQ`_EK7wbqC=VldDOR7K/15^Hh|>hI-)O}Y_7' );

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
