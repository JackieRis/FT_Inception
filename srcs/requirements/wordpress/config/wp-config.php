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

if (!function_exists('getenv_docker')) {
    function getenv_docker($env, $default) {
        // if ($fileEnv = getenv($env . '_FILE')) {
        //     return rtrim(file_get_contents($fileEnv), "\r\n");
        if (($val = getenv($env)) !== false) {
            return $val;
        } else {
            return $default;
        }
    }
}

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
define('AUTH_KEY',         'wVWz;HjjN^[)=-jk1Y[m&n@}ue%@q>?z+--qr+(.*xek=8=n1]-c)P=<g9so) ;o');
define('SECURE_AUTH_KEY',  'Q7l+-HhD ],slZK-Ci*S5qE|4/}|mPCa6w <<QVj2t<r(-y TQ-mw%]w,673Nb|$');
define('LOGGED_IN_KEY',    '/po4zt^sLQR5OCN80k[/M4nz s7)zMpDMO/+vI+LQ6L7Zm6(aT),yT]i?)Vi7_l$');
define('NONCE_KEY',        'mdTKZ[Ya#Aq+-Vvl^{~j!zw:T|9[83<dDUCn3+;@R@]rHZFSGmjji/Z%qf{yl.05');
define('AUTH_SALT',        'ap}GHO+6%f`d)ju8t(ojuO0C8[I0=!7nIHf06*,8(ypNB[@1IN[=ugT4Nq|+q>H6');
define('SECURE_AUTH_SALT', 'K4iHqu _MoySiK.Li(DM+T^>6M>zilw?y^1o7:B[c(I?KlQu{b)tuB{G(_#zOP> ');
define('LOGGED_IN_SALT',   'MQ1?j+lFc&Z=aupOfuX^14U,f-+1EF|Wee*<x>d|xO6~gSd~gSf>`x|r2,:3$:Lz');
define('NONCE_SALT',       '/FAJ5]$yAhMd_|!X36AuULej5/!i}p=/kd|b293DkJ5~8d:;bKkdjyyI&C#c1-s9');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */

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

define( 'WP_DEBUG', !!getenv_docker('WORDPRESS_DEBUG', '') );

if ($configExtra = getenv_docker('WORDPRESS_CONFIG_EXTRA', '')) {
	eval($configExtra);
}

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
