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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'y6gdvpnWEBNd00hZjKWJEolUT1JUr0AqubxUCFz1ll+i7jXLAKeUtDUCvksoLOP4qV5u3VuC5wvLwwY14ox5Zg==');
define('SECURE_AUTH_KEY',  'oYTPWtroA6V8M8Akrgv1Y6gnHRs98ZPH0oRn1DYYES7u/DwUutlHzhIG9I9bx+u3usKiRSW1IK1gR5TXIrLBrg==');
define('LOGGED_IN_KEY',    'j1z2MUpVqKgbEHkcqHr7IOZ+M5bVDfC1ARMA6GkXhAFLOB/23UA/vF/ytwODbzUkVnHwbosGScQIRB+RSjXiIQ==');
define('NONCE_KEY',        '4r4GbaBTwz4QpytIk+hRybBOaSobmOHiWRP/jCTHbp/fsTS9aAMM0Kvx+iISp3E8EK8iJ959SfYRZ0X54PLCuw==');
define('AUTH_SALT',        'KP4zwJANRSwJ66XGbKVIFUDdu5dn3m/8lLKBvwAK5f88sWp4wp7yt4hb6WhrfojFSLp2/LObXnHkiFnnQWComg==');
define('SECURE_AUTH_SALT', 'ro5Nu7TnPjlbI6SE6Osev0Ga2daQX541Knh2Njw680VOxVW9KGdbuyHWLkL0/bD+ADlME5EiPhR4rlAg4w2j3Q==');
define('LOGGED_IN_SALT',   '9tFxrn9/8NRSoh56CUr63Vx9qYzu2L17I4/jN4UMmsKHcb1b5QCTtkMLMF2UGNKztPY0N0SaMsLtF3FLDMMufQ==');
define('NONCE_SALT',       'qY7AJaz+NvRwuUejfScVRX1cJStu4mKdG49igKmNOxFaulOR9pR6IpXbH/33SMA/u4hYWLJpu8ZqGMvvu/PdUQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
