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
define( 'DB_NAME', 'wp_site' );

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
define( 'AUTH_KEY',         'Lk2!5a7W(FA|GN1}DX@X7IK_0cZTHV8]sDM[!StJn0*IDdO(GuIR>XRk?]BbKMs.' );
define( 'SECURE_AUTH_KEY',  ':$ryS- R0L:e[E>&TAoGphUGH<B8y+wZE5R,0~ag2SJ%Di#fc`},W)lwGv5yun?s' );
define( 'LOGGED_IN_KEY',    'R#/TnRAX*(Ch][U`.krNxfx$RF#g7:Jp$OCJO6DKIfV5cE`52cB>sDsqdNdm,]xA' );
define( 'NONCE_KEY',        '0UwC9*wgOXMewC2J&(]> 6eqH^k{buzgMl+YRN#X4,M(!s@5EL7sH_LG$IYOk+9J' );
define( 'AUTH_SALT',        'JI Dp2B<g9Zl2`y+1beO4R=(|mBjpzykPZHj,X^XbZ=@JZ=&x4ZZRn0_@yu[6,|;' );
define( 'SECURE_AUTH_SALT', '&rnE7+,A}8*|gX].sjstovAPG;^D/_K,Q^AQN[k?gu%Am7(_,IyhD39e%KMcK|%c' );
define( 'LOGGED_IN_SALT',   'a<DD2V&Zt`&DNRx.CBpiNzH/E$m^3ep%#dH4N_bF7Y;&}Dxrs0.;OU:~e);3~,kE' );
define( 'NONCE_SALT',       'fMD@_V^&5FZ@N{BCn?+0hOX<A |]ynEH>w1MPVS=Q9~uecP %*xID)JB+(f?C>oM' );

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
