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
define( 'DB_NAME', 'wordpress4' );

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
define( 'AUTH_KEY',         '16]ov8Q~%`nCO7DG}~W<KD5{]vP[aGNU|uz3<vZ^8&Z5HM.rmNBe[A*%od6p__YS' );
define( 'SECURE_AUTH_KEY',  'v8OYg[auw8d{N!Z|m]jJP:od0:1Z.@<V8[x{|i&L4Zf.FPh!SnN`Ydz4pW|xuuN:' );
define( 'LOGGED_IN_KEY',    ')k+LtI5Xx!&mqQ#9jqA~`=35b;A;0Q<$;HrRu+d%Gxc7NiXqA!PPtCQmFib%!&,)' );
define( 'NONCE_KEY',        'NF:7XB&|DT,hMx>o#u:n$)@Zb4x`R&=P6r#+?+|B38F6Ic+4+yd B*@Q9eN-q-%C' );
define( 'AUTH_SALT',        'Gr,`QFwSC,jO~Pv}uavkzK6AO26HJ?$H%)(X#.,$/=q!70F${f8to=l7J=?57smp' );
define( 'SECURE_AUTH_SALT', '`jz;j&l^!k-wW8-CU+08@%Yo!L%@31BX$o$Yi{M<rIB0h/.9H Pq9HUJ|G>bpB_:' );
define( 'LOGGED_IN_SALT',   'MRz_i!oZ3>~PE]_C`Oh?vR@;Jnx,diCdCNs7}t.%S$>A.Y}Fjkgrg;XUuha9Q{BN' );
define( 'NONCE_SALT',       'g)<9F`i=8p38Tfxa7&eP98+HOnj QAh>DINbJ`yT{{cE }<Ign-$L$u4O*o|{mIK' );

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
