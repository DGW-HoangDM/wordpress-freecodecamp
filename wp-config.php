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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hoangblog' );

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

// define( 'SAVEQUERIES', true );

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
define( 'AUTH_KEY',         'obUr&i)S2i(t2=Ww=83*Zg6/kz_~T?@^.1Iz+8lV7P j!l-sXGwy&OkMZ]N;&F1H' );
define( 'SECURE_AUTH_KEY',  '>H<D0un]gY)6Oa.:Rrl YKRO|[=8b>En>ajcd1buAiSaZ2zr-vN$(bZ[F7fa65ib' );
define( 'LOGGED_IN_KEY',    '4N+[dNl]][P%*JOy!|pr2gxKHr~#w<z+t~3HnyX*wx`2Wo[q*_mZIKNWyC%jzgg`' );
define( 'NONCE_KEY',        '?N>a(=U1iR~Bel?j:XBtJssT43+gJ6EM;0es,^0b&+L3%w#tqZl~0;4K#C?%=(Yb' );
define( 'AUTH_SALT',        'nB;]`)$z*OP(F%8So|lv#Lh[HV~OM4*w.{ir%C3|h1gu;&GZ,c];(IH7{Wxa!Nxl' );
define( 'SECURE_AUTH_SALT', 'bcFhgt(9Pba3;k~.R&dh3rWi.#>UGl(gkb-QP2m:; z[S[<ZlDJ`x3<Y89^kP-Wj' );
define( 'LOGGED_IN_SALT',   '/OBCU9g`.3u|E4x$dv) &gtXUme@-2j7^FZ(xO|y?5ZCbJ_CNcB0QQ.pJkxe&,1{' );
define( 'NONCE_SALT',       'uL,n;|+gX-Nd/)VT-^xw)p#CJ2dtv8Y^4JRHY:qL(*`*$ad1|Vgs+yHVf/|S;$_=' );

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
