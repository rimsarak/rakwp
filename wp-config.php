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
define( 'DB_NAME', 'Rak' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'm8}V^xSiV*=PlpCJMAyFG=P3d1p6g{!*[{-`N$%fw8+_mvw41/[%lhs:Du/jt7}9' );
define( 'SECURE_AUTH_KEY',  '? 8ZAc{,S>[gwJQ[W:,-d?p~iZjV.(x>d CO/0Y6o9UCt%8wPTf h_]Lw^KJ10lt' );
define( 'LOGGED_IN_KEY',    '{PhB+bhItG3VHjgD!7glTfCJo%cf6tO<g>LIP;RZnrxpH|,wg[_0X$xX/d|PR6GW' );
define( 'NONCE_KEY',        'a&0s$`h4H_pTw,|~##d1kE#pee3,t>v:enQAZ%gnFRLN.3??0(%n84{B)hu(q&}%' );
define( 'AUTH_SALT',        'm_bSn.z`;K<[F^ *d;!ukc3n;9JQcq2m4X2UpCfILdl=kPjtN=]hJ7$8m0RX6`~S' );
define( 'SECURE_AUTH_SALT', 'J_)tR8(7S+sw37[{`NhkC @q]{<!a7%I4;O1mt[w{of$A$6v)%ez#AT2$}w_I!j&' );
define( 'LOGGED_IN_SALT',   '2e5N^2T_y,H!-/4Dj,7lR>qMNHsD:2SEt>yGvT>)-bO6UEmc(meVDeg:-tyrRXqN' );
define( 'NONCE_SALT',       'wJoKd4,oHim?m8_I?0FQUpe643%wOx#lt0#HsoEv5JNW<&xf&f>b8R>aQ9[47T4V' );

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
