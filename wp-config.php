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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gitproject' );

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
define( 'AUTH_KEY',         '<8kU4}m_rYz6d`|ziR+~f~y-oz#!]rd2xffbhRcj~5Dk,AE1VvRDjj[e^M}DO[Gu' );
define( 'SECURE_AUTH_KEY',  'd:8F x@D/]uEi_Q<Ohn?u^n47^Uz:)g]?J:-wp)3}obPot,EudL]]Jv/b4m3GtKu' );
define( 'LOGGED_IN_KEY',    'SBwd2&sOA4xV1E]rAbVnY[#ncp_/Ix1Sn(a;vR8cm^bHiW9,uZLG+I4X,taxs%@>' );
define( 'NONCE_KEY',        '~D2rG0_.7^:`$ZvMZKDDsjui!},Qs^6q{)D2:]m(+]Frm%+=cT2h9$?V]M-Bu#,^' );
define( 'AUTH_SALT',        '~~yR!>p%4%AnlhLW (L9LpeYGm6I5=1eBZ25T2onBQu7xWbz8Yg`WXi#3jk&*bO,' );
define( 'SECURE_AUTH_SALT', 'GC/*O,0s+N+@/}]m~g`[nwIdcGl=/uuXw>,RkwlvT#gVsNQpgCVj7q[qJ4{NfR7n' );
define( 'LOGGED_IN_SALT',   '&uE6&b)/JRAC2r!tx-Xw313F6s8rp@X?x<%`_]/HU;$FK+u<,Ch&0v2,9QVumgAP' );
define( 'NONCE_SALT',       'ty/=>1:joI~M^/k=P,Hn%#Yqf}BO/xH4Fb$/GmnfQ@7Dx7=1]6S/95!ziY$A/M]k' );

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
