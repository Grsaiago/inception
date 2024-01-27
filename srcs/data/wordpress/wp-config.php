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
define( 'DB_NAME', 'gsaiago' );

/** Database username */
define( 'DB_USER', 'gsaiago' );

/** Database password */
define( 'DB_PASSWORD', 'gsaiago' );

/** Database hostname */
define( 'DB_HOST', 'mariadb:3306' );

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
define( 'AUTH_KEY',          'M^n|dkOi+S]y~`.n+ZVN/Y;ub1h@?b+sAJ0&K)Sk2B7N0?QkjkO8G^!@HFZyIF<`' );
define( 'SECURE_AUTH_KEY',   'n}UlcLa.xKD;fvL;#Lzb]wX:~=_pY*1E0xGgzm^5~uAX.M}$,C-n:Fs}jr0UFR3R' );
define( 'LOGGED_IN_KEY',     'P$%&o3>z#.d)+7WA(*`a4Pi$?~r,X9zl$09Q/K|x)^4>o_fr1_uJ}p>&8LO/>j6f' );
define( 'NONCE_KEY',         'i3p+Vc@r}{!km1I?Y0_W3VCddy./]:,;ZFw5ckuCOCR :[s.s%v:f!cOq[j?d`@g' );
define( 'AUTH_SALT',         ':]ARc86S#_t`u~emva;U~o}}<~A4UDcQWQQn;-Pmw|[(bVIi7gk5T1yRf~6%|PC<' );
define( 'SECURE_AUTH_SALT',  'ARmi69O<x;w+[$K}7q?Fa!PA-0IVV8[[`ao~f)5IW@[aA+`LgV5^]Z#@boe])a$}' );
define( 'LOGGED_IN_SALT',    '6.3iHJMm5`?m1<Mn#|xVI;XI`Gs/ az`t2fF8o#XQ#Hujd1Rg!$ *x3T.IVL&NJ8' );
define( 'NONCE_SALT',        'K]8<lMystU~hW6UQV/;5^22U#IIqVk )8UJL$7J(-sYq=EUI{=_`vi3A]~ewauZH' );
define( 'WP_CACHE_KEY_SALT', '3D^2>glTZ&GgS$}U7mv<h$2)|A!;-0{nKAox-&O,m-]s72}ALqnEQ]IxHiFX-!F`' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
