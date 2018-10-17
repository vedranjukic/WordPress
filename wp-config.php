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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'wpuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wppass123' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         ']7[l)`yWeYFZ%{0=|Gpyp7+}:ht#+S`G=0z}~jS0>QBPqC;CZ$|+jqB$Cf!2^A2K' );
define( 'SECURE_AUTH_KEY',  'CA3!Q6?B0P:)*F[*z6itPo`:p3kn#^]ftgd#=V<a)$B|wxiOB=DhV_qdO<VX07yO' );
define( 'LOGGED_IN_KEY',    'b/u:$N>4KkWSOce-,n?W#g/@TI`^Osi7UQ|l?sF`3~h3IZvVW)[tL3gEsfrYO;(5' );
define( 'NONCE_KEY',        '^zao*9$,T#Dcq93Io9,YW#n7*Lhr.B#P!JWt2.WxUX{DXJatm0AB(#)Mr>i|$)SI' );
define( 'AUTH_SALT',        '0yQi0^n.L_+Vv{0tMo;us/nBII:YWON8:_$FW`ON6v$kfqymPY vi1yO}y:jECHD' );
define( 'SECURE_AUTH_SALT', 'fX!4jDRCl(E{RO|jAKfLEFp^db@oU2{gz[7yC|]1Pwr]ODT];WJ*5h@m-${oz,W!' );
define( 'LOGGED_IN_SALT',   'e6y-~2(QL<&SFKA3/?[nEEBW #WQlt*,IydvM+:IMj~B9k|Tv(z_`~7[IL+|nYRt' );
define( 'NONCE_SALT',       'uSL`I68F,a8dW:KLPo~CCbd^W#K@xA7*pIUoUjjjy?[4Jor[2X`,EXK3Zr8H8Uf,' );

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

define('RELOCATE', true);

