<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cctv_medina' );

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
define( 'AUTH_KEY',         '=&%mabq5aP~m.ed=F`XZw8v^zjKi)X1#g=.siF^R9Qw^ys=j*:Tm|[uvL6{ =TO6' );
define( 'SECURE_AUTH_KEY',  'F0IU0cT#oJmkXPy%@o#z!xlL-``~J:q)m>syVYdEqc8ANv{n+g-r7}mG`<K!E+uR' );
define( 'LOGGED_IN_KEY',    'Hl.iYsB2.7F{$}{W[:>1gY`$/F/h=0iNTJccpdX oj;Oef=v#^T[/-m)W2m:0#_G' );
define( 'NONCE_KEY',        'x)RP9iJ6Od?q.U*jIOE>Y;zv2Ksj;&p,Ao/otoq;y50aBU+KKukB9?V]0K<[(g#A' );
define( 'AUTH_SALT',        '3tH0(!e}k5;K*/w{nNH4b&A|k.e.|UV!ZK1j=G_=%]r)+@TmqI`6wM.l5$yQ^ij*' );
define( 'SECURE_AUTH_SALT', '=zuO)`el4.un2zn%DE)#=L&A)F4pL=Ka^b%pI/JsH*K;JL!D9)K8tt(/tI!U^$~3' );
define( 'LOGGED_IN_SALT',   '=VyVtS:yb-1Vrno62`FT|z- 2#ll<`bNF}-_#BQ!MIgDd]gzGA$03bjL[|<T}UMm' );
define( 'NONCE_SALT',       'd}@Crq[eYQ&?jO-Z<_fizaaCA]FUDFY~+_HFs{GHo.JHQbK1HslbTI:U<-.PSAd[' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
