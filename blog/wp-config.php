<?php
define('WP_CACHE', true); // Added by SpeedyCache

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
define( 'DB_NAME', 'brand6ty_wp293' );

/** Database username */
define( 'DB_USER', 'brand6ty_wp293' );

/** Database password */
define( 'DB_PASSWORD', 'e459IpSy)-' );

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
define( 'AUTH_KEY',         'okxcnuzfgedvewd95egwys7hjx3iq5bn8mrhootqli4sfqvcyz8wsrcc48uusgbk' );
define( 'SECURE_AUTH_KEY',  'axykngk6c3km1yze2h2c1ow5l9erz4rsnxm6t9asb1yv5cmyiiej5ueqwuzm9hel' );
define( 'LOGGED_IN_KEY',    'iu8ygb13v32xmxfvouq6xsvyjntzz1e3b4kldg3gvuc8t2kcpyulrhyorftupxrz' );
define( 'NONCE_KEY',        'hqxhc5etnwlvfskm8ybkkptrm50g1qdfnvksskkvcvx3kmvpitdvtqmtostofdu5' );
define( 'AUTH_SALT',        'qogih0r0pah9dqjejk4hblmmdlw764wzfkpbxasd7taqydixnr6gqsxm2yusvtkj' );
define( 'SECURE_AUTH_SALT', 'crnz6s7vw6bchooj4vykqyngqb43wpqu7p0qq0jjjfr9jo0u5l3wfq4omh0vccmd' );
define( 'LOGGED_IN_SALT',   'k2xztgqf8lylmpd8ftxyj4lj1v7ar9fioe275smnwx4mock327qsqf8wmqwyts0x' );
define( 'NONCE_SALT',       'hmuahqrx6lnbu0h9blq9b0ecdjpwzadamqome50vljxwdue95jga3uf7tfsgdyws' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wpch_';

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
