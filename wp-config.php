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
define( 'DB_NAME', 'joalison_wp895' );

/** Database username */
define( 'DB_USER', 'joalison_wp895' );

/** Database password */
define( 'DB_PASSWORD', 't.)jZpS890' );

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
define( 'AUTH_KEY',         'wyxij43madx7owvksumsbuimzlrjrzus3bjlbvyuygomrwzuhl4kp0n0cjkh7ysq' );
define( 'SECURE_AUTH_KEY',  'zdmt8takgoiywad08erwtaehhckmfafd64fydunu6orfxdirdr7kuf87fuami1vb' );
define( 'LOGGED_IN_KEY',    'oidz6rv61zw8kv0ln6pbqyvzfyax8mu21euxgyshdhwcuhg1zazsiwigkmeommor' );
define( 'NONCE_KEY',        'fuhqam50z3ltkzaypsjadv2jzq46spaqicexd8ngottuboerwtkx9tq5h3mxzdhv' );
define( 'AUTH_SALT',        'zd4eq0qum3xybmyo5us1wehgpitcckmnys1ap7p2ji8j9fcrke4vdmzdr0resewb' );
define( 'SECURE_AUTH_SALT', 'wmxsxunnkmwv0xuy7gdvplcdpzdycwgdsytnh45fjvwer5l4lh0wqmsng0v7tpqm' );
define( 'LOGGED_IN_SALT',   'umegsnjpv5tagpvs2gyhwhspvtajdegz7kzragmyujqibzudvh1pckfox3tk8jbu' );
define( 'NONCE_SALT',       'y0njmptlpzvfwbgeokfjuunqlynadlbdfi3xwgislqwfrpeg5qgg83ihep5r6fip' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp4h_';

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
