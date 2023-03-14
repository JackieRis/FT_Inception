```
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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'jackieriz' );

/** Database password */
define( 'DB_PASSWORD', 'jackieriz' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define('AUTH_KEY',         'yQ;jf$i:bWKQ|*dtegpnG>JW;J11Dk#/P/$ofLz0V94d_Z(`BDKX)8T?<pPAm+HE');
define('SECURE_AUTH_KEY',  ')4#|,e/GYu*Gf1oX-B]~mUOX^&7QI:rc{`9bpGV$<}>N>X84*@_K+=5#sB%ZF=m[');
define('LOGGED_IN_KEY',    '$`&3[LNx&oGz>1a_=RoaW&x>I/Cy~p.FU+hgDO+uYJG(Zm(NLpa.9$s0K|`_Z9%t');
define('NONCE_KEY',        '|xm(|v@e%jqll&a,H>K(--^^B%9(TUoV^1KkWuY^^o>OO%jpuRWJ&GShO7<IpH~F');
define('AUTH_SALT',        '5+qtEfrCS*VVND~K3li6s*lqBwbrMyjux34XI+~W|u|D!L??|,:%JWp-Ei2.1d#0');
define('SECURE_AUTH_SALT', 'Iad$ejx^U+JId#LE|+`}~hJxr8Qi.O+eAByYWQ@<$#+L;|$U%lRgN$9)M~+hCz<v');
define('LOGGED_IN_SALT',   'L71x>-V#u~b`CtmK`EN()9|vzjCytL1Dv6u44!P&@2sj5h6n|F7U}FQNHg/Te;l+');
define('NONCE_SALT',       '6n-BjQkrEowf.&XV{3ccos5W,xRJYdUn?6)G^+X.?N}9W_Po?Y+++}dpHwJA?|;$');

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
require_once ABSPATH . 'wp-settings.php';```