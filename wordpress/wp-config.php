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
define( 'DB_NAME', 'WP' );

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
define( 'AUTH_KEY',         'Rf8PadDjxAzQ^/IuQD^mU&5fN?MQZP@A|x:w1V?h0t.8.97Y&;U</B{cFW3tjk*=' );
define( 'SECURE_AUTH_KEY',  '{Tppl{:J[m.Huw400@35Nx` $@HdwCGYs@oR?I8:Hn})%o^,|+m+XZkfvbjr&;uD' );
define( 'LOGGED_IN_KEY',    ': 3R[HnH7xXsb?7R;s^7p$c0E)IGYCg2b<[igus1+KA)UJvdlnB_*Fr;8g1fP1sa' );
define( 'NONCE_KEY',        '2fU.U%#@EqJN!AyLeCwfS_dD;( XAxBCp/MZ]HPH[90[C~3n@p3PMld-N9NKr]b9' );
define( 'AUTH_SALT',        ':1_DSas5A~ipTUl)4JGF% +9WWlAly2;VL+%#m~or,`0E*0y>cEN8r3w)eKN>GEE' );
define( 'SECURE_AUTH_SALT', 'J>/uSJ~8F)IL fCYnzyRO$0}Hxvf8H1(*2&G9`a#r9y=t<Jp*&g/#$GK]nXMK<#?' );
define( 'LOGGED_IN_SALT',   '/jgYPl5~(5lNBNZ<#RxW~}m[_IX<jWAQ#nqt7/V3HcGjb ~`Y*oOTM|!R$ypNbr~' );
define( 'NONCE_SALT',       'E1G!b]V-K,3S 4-Yny(Y8Py:/p(eNxvZ%T)ti{R?)~gxWZ*Hz3Z~0F6IKQW7T>a{' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

