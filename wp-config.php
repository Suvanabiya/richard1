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
define( 'DB_NAME', 'afrin2' );

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
define( 'AUTH_KEY',         '?5%nl6~/xv8q<,_r^[v@^ze$EFU:n`i>;CbWnE@zD^1RmaAJ`=;L;#=#JdEm5a_;' );
define( 'SECURE_AUTH_KEY',  '$`ky]2a}dJtQc4!(#QpO+rJ*UsAyqt4b)Ahb>R/a ,ehH)kK3Mtu%`9}%=1 %=v5' );
define( 'LOGGED_IN_KEY',    ',J[1ZpsJXj@;d~Lo!Nl|!Y;1H3G:p7hFZ:oqV~(qu4:>$DQ=W.Q:Zm|e!/(o@*ph' );
define( 'NONCE_KEY',        'dSF8lH7NU#TcRTS p5EySgT}u=e~+q0tCH0}jPL:]/umel@c)qv/{d?JF*R]dFJS' );
define( 'AUTH_SALT',        '&zuPj*~Fw@D5hd^^/>xTA%m/%E&P0_VyiiSD+Bz@`p:(DbY{jVKYR2W=7bNWl&]F' );
define( 'SECURE_AUTH_SALT', '9<1W&[}XGGfp~ (z7N[?vRvqBqak>$$2y0* }{PG6X>%kZNB9ErY7~Au0D(Vu$T<' );
define( 'LOGGED_IN_SALT',   'qG]$GWLR*=f-f;]DG f<8>Z8HekDDgjZ!bcO}K wO6rq/F?aga}gqOg -EZXYiWj' );
define( 'NONCE_SALT',       'W+fzMU(y6NprH~rw]f;{k}:UmnwjMPg} Mw/`8JK3a9i.HIYYZ55_QWO<?J$G*1]' );

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
