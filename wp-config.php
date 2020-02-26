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
define( 'DB_NAME', 'wp-learn' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'A31EsnWDDjQlLDTHkOSZnsVv2VVk6bHyS6KiaFOlJgQ64w4a3zR6ZMnBSftEVGp5' );
define( 'SECURE_AUTH_KEY',  't2dSq2rbFHGmAMN14iSuVJAqoAGbkibSwm3kvg74crMuojMHjfMopWQd2xWcYA4c' );
define( 'LOGGED_IN_KEY',    'c2nGZNTuo0bMLCjz4jzNALJdLrKzPcERGI8ftde3DszsewevXQORlWaHGeH2Uanx' );
define( 'NONCE_KEY',        'YGdCmQ2deVrpvTioYanPxy3Ityo7fvshF3Bce4Kf6dpzUfsyu99g7FRTQNGqdcu0' );
define( 'AUTH_SALT',        'AcldJFVSNpK4n576DYp1LXpWlZ8KpNV6AV4A1ciSwaEPv0i1jadjjz8kLcAR6BEB' );
define( 'SECURE_AUTH_SALT', '9AJU5T9RXAQznOVuOZ3hnArPdwhL0apDToDrEwD73QvdAZp3hHLASl3n4z51yHpV' );
define( 'LOGGED_IN_SALT',   'wdMc35dwEPRMlge3YCaFSOhasIFqdgkFA55gwrx6Q7Ujw0qIDQqPFnYEiG9zL1jS' );
define( 'NONCE_SALT',       'GPIZcSsL8tQxj01lilB0A6FWatFU510NweZp2ymKk91hc5acpkxWnrW7oqyriH32' );

/**#@-*/
define('JWT_AUTH_SECRET_KEY', 'secret');
define('JWT_AUTH_CORS_ENABLE', true);

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
