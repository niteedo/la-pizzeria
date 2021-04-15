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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qOJtVP8W9E121KG/kiQd4hFdnx+aCEg4ms1iwoldweA7NM4irMkV2yHtFSxFFOAT/zmjTmRDYj9+kB/EV8COeQ==');
define('SECURE_AUTH_KEY',  'J2zBjoepG7gPBvjomHY4QGzmxLoe7lLqca+TzvfUEXlnuBIrD/8QkisYKriz4t8O1RunePPf4NR4NRTFtjN1JQ==');
define('LOGGED_IN_KEY',    'YpAAN3XY1mxXdIQy4n6cAIaoUIOJ3LBwIr7wi2+ctP4HJedgAzw+IRSmHOwsnHFhVjxWJMJwiOWUmpwivlYJ3A==');
define('NONCE_KEY',        'k0SQsRazxVfw1QQoy0XH8Tn24jYJtJLpSCCRZ9s2t/PqaXFfB3EtrIOeUvq09rflUkD75AAFNTU4IdeRmFaDXw==');
define('AUTH_SALT',        'SuHHl/xjJ6I9rdlIGYL8l8s6q0WDGnBuLNcVRBDzrl6lb93Bvn3Y74n0W2G44CmXy08zoMHtSdWDsjem6f99Xw==');
define('SECURE_AUTH_SALT', 'M6NCm9kSV39by5sT/uUj697at7zoleE0J1WZ6V6yHaXejuelYR6Z7P5MjUqr9h70hgkimxheM5CU1O9Y5Ds5Tw==');
define('LOGGED_IN_SALT',   'LYDdsMf69N7pH24tymrqpOK0sekrmrHOCaXhdUZVNGYqmc3c86XKRPOqFSYMGU3c81IIEZv9BOHjCaCbdx6tqg==');
define('NONCE_SALT',       'xZGqeVVbSfaWShVcBFKydO7xPj07AqUq34U/YZMn5jRSWwNFzj3qoS5ZgjK1UXHSNp0SpDMa6mcvVmpgo4IUqw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
