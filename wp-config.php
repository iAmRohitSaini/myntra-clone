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
define( 'DB_NAME', 'rajwinder' );

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
define( 'AUTH_KEY',         'XK~;PgM;G,rsuCuV`+R:vdm>]pB5x0`1@(=yA/;z,;g]Ow{qG*O^sRFGLZ7r,R@q' );
define( 'SECURE_AUTH_KEY',  '*LKM!-$*XtvfEGBc]aKi_+yn#`p;o<mn5*+m@?:_QG:l%J(%gDT@R{G1`:Y.RDi@' );
define( 'LOGGED_IN_KEY',    'gl&w9f:+nGW;YKF=V:98gaCLInZe~?K%)/3Neo(`rRoB$O#6+-:`CH(#,}qkqicd' );
define( 'NONCE_KEY',        '~xL0];9YI=JF{_]+EUKH2>3*(6l9>DEQ9.uoen#^ADk1.>DfvAcP(K#OQHB* < e' );
define( 'AUTH_SALT',        '-&J2slx=54nGE*Fz_gfS)Fwd4R;w?s=)b|LXC.]7}VHYigcJkZ>`ZaGC!?Y70ZtD' );
define( 'SECURE_AUTH_SALT', 'wDn$U[hD/@re*$u}ig2b}gOkE<+/8~PVgkGQqC`>1$}#nzvy7%tC0WU/73?0oRV5' );
define( 'LOGGED_IN_SALT',   'S5-{20$q*D.$K7V%A#w3w:Z6_KwUt=(v?d?v_2<p<N?O#u7tmTQ8?_GsaC9N]CUM' );
define( 'NONCE_SALT',       '}.0/%O0*n3@D,<}>=>A$P<BU)`TIw Q}2.rL>C64l$pc$C(a*1-@?|0&pJNI&snu' );

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
