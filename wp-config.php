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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'omr_db' );

/** MySQL database username */
define( 'DB_USER', 'lenka' );

/** MySQL database password */
define( 'DB_PASSWORD', 'lenka123' );

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
define( 'AUTH_KEY',         'ht{Dl!#aZtv?*-d+k1<h?:QgD}K~45|0tFrS0>Mz8_(zulu-e#FAj/RH79=^xcnF' );
define( 'SECURE_AUTH_KEY',  'P#$74r5kLsj(X:l0nS^V@xIU`?Q:gY,GI(o$H1VKs>Fk_hKEk+`TJ6;gy^LuwW%K' );
define( 'LOGGED_IN_KEY',    'M;Ol*n$<^%T;=_)p]=f/.}5Z8ZbK:zb7>cbUY_Z][=1Gi8%Da:%g=J,tsH!>~Z&!' );
define( 'NONCE_KEY',        'd{}vGCy`[utoyI&4Z(81q m@d7:5b:;G1b-78yr&0CKk14>)E?FJAO#0`NC+/97e' );
define( 'AUTH_SALT',        '-cP.qG4wC_BBxasNePW6uFI_}J c1%wHCQ,&U{}l>wYZr<XSrN~D9_0@3*OdgIoh' );
define( 'SECURE_AUTH_SALT', 'Xa,9K]g[/!@gIs%+,}pFaFa6Tw6/vjZ S&oje+^Bo4;UQZ&Pa`fd:nA?1rY#MIHK' );
define( 'LOGGED_IN_SALT',   '&_]}`j5:eJ.p.J/c>M;cvsZBvyt@W<U64*.@_P8QLd~ SDK@U6A#g+QZvmUY>:>P' );
define( 'NONCE_SALT',       'uCgx#y.R+OCTl72RLj=,zsYI:6}X%cfTPc^|bbSiDX <ItMO4FF^NkD?yEq-WJ=n' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
