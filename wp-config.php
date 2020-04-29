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
define( 'DB_NAME', 'fala_end' );

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
define( 'AUTH_KEY',         '`L?G3CISP_(&j1!dUWAY[u[s=(F<9Vf9p>v]Bu/cBH 28sgF@xYQBw8.H/BjTSE3' );
define( 'SECURE_AUTH_KEY',  '$B&1m9,n|~O[c3tMDDv&)+^GzO+h;uVwn#1bg}|hB{h%*= pXpgK)gN1EQ]UhOPo' );
define( 'LOGGED_IN_KEY',    '@%2Ilmb#Xe!oXjHXrry9THNc3Z,^%1u:R2q^g5A,qzjBMu&{A!~~qsWP9?u{g88^' );
define( 'NONCE_KEY',        't=r7q:dQm`F6~f0f~C;wVXJ% u)vmG^}Q6 sB*EisH<w#rJ%dI=6r$h.`jL]58n#' );
define( 'AUTH_SALT',        '}/,_l+qfm=l?;/um#KzV~`sTh7)XF^E|UUF`/hAG-=](::m#eM=x^pqUS/1WM9d.' );
define( 'SECURE_AUTH_SALT', 'n?(jl?Z |> l&_m-.bBHc4;3!ltW=<H/()00{$FGyB}~MB{OI@(%w,TKoHgDRN:~' );
define( 'LOGGED_IN_SALT',   'BWZ!(ta@7GUc{~$Q&4Kzrv:CT-)>yy`B;(FHC&i|>ohma%f^X(EL_kby^6;p1=L$' );
define( 'NONCE_SALT',       '[RW[^lm>FD+kCW(uT.%qn10&xL@+`qSuI2AP7@VlpdcFk<f;c[F-hDT+o&ZH$;.p' );

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
define('FS_METHOD','direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
