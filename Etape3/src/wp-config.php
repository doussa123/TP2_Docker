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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'wppassword' );

/** Database hostname */
define( 'DB_HOST', 'f5e72d2337b3' );

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
define( 'AUTH_KEY',         '+rVjSk;iMif}R%jt#$UPj3DYlP(yPw6X/Ypz:Ku!4G44Y@x>zuZgD19Cy:~0G6aM' );
define( 'SECURE_AUTH_KEY',  'ICaJo%%r6xWm#oru:ElB+ 6okzA!ryXQMnY[gr U%}5+j&.TS6$ziu(/V~AM/F#.' );
define( 'LOGGED_IN_KEY',    ' a*eZ[N#k2G]|#LiqL]&` $Jm_%Ri#aEP4<]1?z~r(#ZBNP$_A|6Qrqpe@=x<OP&' );
define( 'NONCE_KEY',        'c8$W::L:v:( Yp36JBW!I$TcJjQZ@!gY@U?Uo`l5Oes?J0<h=kc}Vs 1kj;LJHab' );
define( 'AUTH_SALT',        'T&f^V1qv>eK|xLB!(::7cP+Gpwl^FE<M}+<Suz57CO{Nee<SjKQD+MNhUAOU`-5%' );
define( 'SECURE_AUTH_SALT', ']ppk ?d69D(gTheKl;AB_py/+d]8yFt2iY7}zeJ289EGB&ZBMAz#pof#{FwvMW5}' );
define( 'LOGGED_IN_SALT',   'F_s}$Rk+ik!2DnS@<_2Z6J$seI1D$cqfUv [7IP,&2,97fLe^6eIiBCr<QKI%251' );
define( 'NONCE_SALT',       'kxm,d$tt<@.G0]6aZ0S*=f(WpfCgi!n)yL)7~M?zRkqkW=f{z-dOr+D}>8k|/Z/B' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
