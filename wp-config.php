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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cnpm_db' );

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
define( 'AUTH_KEY',         '{!j4LS%r>+z[c<es<)T&LM_amz7{URu}Z2nVY$rxw{#g`0G$7F0w__*pp.t!QU9|' );
define( 'SECURE_AUTH_KEY',  ':2!.XeN!|V?TNl6[{*8tV%5$>VHF+ ,7Fb4k8 Vx3+GwrsBDYhEa%bm/o}hRX~-q' );
define( 'LOGGED_IN_KEY',    '6`ISgGWdWbB2.T`Y08X<_R=G|lAvhXOr#j;_OatWq#;!N_{7MPHfIGBm%q;hbCEz' );
define( 'NONCE_KEY',        '6?bQGirIBmfJ&./hYK$!9pG1}d.-PS]T9&m}Wb7o7hL-i)j;Z^O~xa9Rr]FslZ{[' );
define( 'AUTH_SALT',        '&glA{xu6z$$TnRHc9pp]Y&&4[xvw^_{Aao<s)wV[}Bcb,&|KGc8HY=jM>Y<i`HlA' );
define( 'SECURE_AUTH_SALT', 'TECgA1lB*,V4xiGUFCiYgozm2G1}Sv$(@3<Q4u2x/j-}6|>xUDBZw46Y:c(YgYZh' );
define( 'LOGGED_IN_SALT',   's:|LEnLe~sx4x;#;P+.QJ^fH`j1PfCg5$rWL6EkezU.wl(9ylwo|a?$D3yE(Di9m' );
define( 'NONCE_SALT',       'p OL7C[fhZ#}vIOw4fFw]mpDm3-pVp1s]nHp}XN!r&2N5Eb/1ay huyBA{6W9,U)' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
