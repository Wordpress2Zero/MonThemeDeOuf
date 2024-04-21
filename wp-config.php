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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'u#-Un#%HJ.p)CjXptt$5R2o!%3u*qYJI+`LwP%VX.XmPmk0O##u<]pA|[3^;tn?3' );
define( 'SECURE_AUTH_KEY',   'fCW:Ghior;].3R9SiJ,VlCa2CVe[bA(Xd]kpVrGDHR3k+j*XCmSD`,3#15(?#3Un' );
define( 'LOGGED_IN_KEY',     'B9MKJ5#Edqp=PEC&JAB5[wpbw-l#O@|R]tGp#o:SC@E<D-57a?ad&bRtEvI]sGYw' );
define( 'NONCE_KEY',         'dUs}EF%#lU(TTxjW>;@(cYpT]Ws() #_gk<zi{%Ejt0MCY)wZ;n/Fsr%+.:KE^d2' );
define( 'AUTH_SALT',         'wDgSWFxYll3bIR)t|],I+YS9n3yg/IrF9`,w%FQIv>i~ASG^g}/zriZ4iP-deSPp' );
define( 'SECURE_AUTH_SALT',  't&#,/)DmUcjF3nL[GzW`y4OX3_0TGnyqmgLZC0-A^O~zu+Wzu 5%qOQQ`Z;piuF8' );
define( 'LOGGED_IN_SALT',    '~IXHI_S@?CFwr-45 S(#vox2*>~9>?]Kv08auO%3Ls44pJv|juW!Q=Z~Aw|$yr+{' );
define( 'NONCE_SALT',        'o:$%}J+;JL6`fjX[cReXcIiwv<ZOed{c${d<{jRuB1=MG}~`#`,=c#$pk~37tz`s' );
define( 'WP_CACHE_KEY_SALT', '>{qJLRpJYf+<}]:PkRrUti3FNK*e%uw1o b$XP@73Z 5JT i)sUKu6B{|b*N8)nE' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
