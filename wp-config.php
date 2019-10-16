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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'gb&IUGv5r!CnX~tRBe4{}C,^vdqce57C:ERj|~|m1}}AS|#VKe2<=LA.{4Ynp<QC' );
define( 'SECURE_AUTH_KEY',  '_:A84@QXrz@hE</y25-8?k-3qd5oxf0Qjrr|_[o!otjU,?p`V:]T9>T_]%gSx78Q' );
define( 'LOGGED_IN_KEY',    'u/{-Sc~o`:@-PlLUE5sEH)B4JVvyaYo f8Z!;}n*-L7!qY~lqHnQ2)V*b!1l:zGe' );
define( 'NONCE_KEY',        'Oa(2cBGCALvT*nEewMq8q;4M1o$t^T>JAkkOaI)>^k`;-|)_<+6>DO9kJijjOyFc' );
define( 'AUTH_SALT',        'H.@<D>nL) ?C1[e}fWx/oWIu>%)CfC4}2{C;>^=3d9qohbGd}00{|%AwsEZm:UDX' );
define( 'SECURE_AUTH_SALT', '_I4B&n^;Zwagi.zdpP/dUY7=GA< ;+yxHlcWd/IE33Z*[53[[EBk*=YM*c(/y(Tl' );
define( 'LOGGED_IN_SALT',   'N-uO`::;<L06$MKs*^Uuj3,4H(ii^eH;S`!;nAw)r#JD9:ib0euy.$x7nu13[K4h' );
define( 'NONCE_SALT',       'Q kslKAl`~H2`Jk`MTHI~I)uOz=lGUv0Zh;L{NT1=t.aD-|eH{E^WDQ%y)!GyP),' );

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
