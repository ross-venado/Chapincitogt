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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'bsDj8vcg' );

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
define( 'AUTH_KEY',          '!kib*JwjdZ$orr8oo%h9CGg.=:&XL;S`NiEI<oS{Jyr)#SzBWj#y^j5wz9o<fBd:' );
define( 'SECURE_AUTH_KEY',   ' 5 )IY.M {uq6y-g@fBwzbw:}Djk>gXPA_(Sw.2pRd-.2(X7VF=4CF_aP|;/) 5{' );
define( 'LOGGED_IN_KEY',     'y2^G .rN$Kf;seA*wEMEL<&}GwAhfT _/sVT;yqPgD_F(*84mO 9]M>F5TlX>d?Z' );
define( 'NONCE_KEY',         '5DE=,%2tROq>NT#^]Xn^=!@If8z5In@l+Qd+MfQu*[K>x0{,/nD&^,!6dptl1HH^' );
define( 'AUTH_SALT',         '%fT0CW~^qYHT@V/U6>?GEq7qbU}3SviDxx}]i]?/#+Ak;$b_;Q1s2yWj`Z4@&xO?' );
define( 'SECURE_AUTH_SALT',  'DOt>6e81s@Qmupors<P[v1:6Y,$FC6u%c,Ybr.@|x3GB 4q9!gI9[xrL^AX3>lP7' );
define( 'LOGGED_IN_SALT',    '!?_R}mB3bbFYfCl/]=s}+NZNL4)/Gc^MPSHGlGV!v907S$9lbMP{2Y~YwCq}t=,h' );
define( 'NONCE_SALT',        'C6k.%:nkK>AKO#B5Zax;1Rpr=YC{#hf1BBjub4B6HQ|}J_%z!vwdT{E8))(>Zj~U' );
define( 'WP_CACHE_KEY_SALT', 'id5|g*_`dF:2JOSzH8O|*LEk)2,5|iS>xdI4?nm*A`!*2V>$,I[H|H,;5Jx!#L&X' );


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
require_once ABSPATH . 'wp-settings.php';
