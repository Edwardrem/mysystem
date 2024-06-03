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
define( 'AUTH_KEY',          '2#A]T;|*8<;-S>n=X`R|$=kw~~.91]EW8NZ[)x TquOi]u2q=m!L6(B;g3QoJDt5' );
define( 'SECURE_AUTH_KEY',   'J`kjX`[1[ZiD@D0(6aJT:HN;9a1LspB5cw%=&hgf<!-B1x}oN_)px:pqaf2TA4!v' );
define( 'LOGGED_IN_KEY',     'tYid79<LghCm/*KH^<A 4st#kSJ;N=Q2.4irW`_]B=I[iaLbuaA(+=38uS}$o8Zx' );
define( 'NONCE_KEY',         'zoR+]?,HvHr91Qb:-50vOOF^~,C:i|7z$/|vVStRBy{n(ZFIc,h7G,}fPyvI1%V%' );
define( 'AUTH_SALT',         '2,jh{DLY%[KN_HX_l,KMx(p_R6bv&b%@qun#N1Xn?O0X%x`@Y-KP.+ZmZq%MzWTm' );
define( 'SECURE_AUTH_SALT',  '3h./fCF>es&:])q6B~5MVt+a =7mS hb4PCwlS]8[*IDgV/bsApH##:o(7oER[-N' );
define( 'LOGGED_IN_SALT',    '@wiwHGJ#<YUZ 5U<bd]=_1W`EMDwML@2t7!G/q0Kv_SAv,v2yiD$-9Suf*i[>HHC' );
define( 'NONCE_SALT',        '{dUt)S2Jg,GPXI)OBGcbT/~R(DfgB6oRL10Fzuq/5i>Q&GB!%Q,>vq*]@wv7ck/~' );
define( 'WP_CACHE_KEY_SALT', 'oBbR50VSKs<ygFXUJv4gM={Er?n:4<86PZJaFS)W#T)x}v,/{7D/frjh_q+***Ln' );


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
