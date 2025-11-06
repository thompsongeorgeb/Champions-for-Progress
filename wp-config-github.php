<?php
/**
 * WordPress Configuration File - GitHub Version
 *
 * This is a template wp-config.php for Champions for Progress.
 *
 * IMPORTANT:
 * - Copy this file to wp-config.php on your server
 * - Never commit wp-config.php to version control
 * - Update the database credentials and security keys
 * - Generate security keys at: https://api.wordpress.org/secret-key/1.1/salt/
 *
 * @package WordPress
 */

// ** Database settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'champions_for_progress' );

/** Database username */
define( 'DB_USER', 'your_database_username' );

/** Database password */
define( 'DB_PASSWORD', 'your_database_password' );

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
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_cfp_';

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
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );

/**
 * WordPress environment type.
 *
 * Set to 'development', 'staging', or 'production'
 */
define( 'WP_ENVIRONMENT_TYPE', 'production' );

/**
 * Force SSL for admin and login pages.
 * IMPORTANT: Enable this once SSL is configured on your server
 */
// define( 'FORCE_SSL_ADMIN', true );

/**
 * Increase memory limit for WordPress.
 * Useful for running multiple plugins and processing payments.
 */
define( 'WP_MEMORY_LIMIT', '256M' );
define( 'WP_MAX_MEMORY_LIMIT', '512M' );

/**
 * Disable file editing from WordPress admin for security.
 * Recommended for production sites.
 */
define( 'DISALLOW_FILE_EDIT', true );

/**
 * Set automatic database optimizations
 */
define( 'WP_AUTO_UPDATE_CORE', 'minor' ); // Enable automatic minor updates

/**
 * WordPress Caching
 */
define( 'WP_CACHE', true ); // Enable WordPress caching

/* Add any custom values between this line and the "stop editing" line. */

/**
 * Champions for Progress Custom Configuration
 */

// Default timezone for prayer calls (Pacific Time)
date_default_timezone_set('America/Los_Angeles');

// Site-specific constants
define( 'CFP_PRAYER_CALL_DAY', 'Wednesday' );
define( 'CFP_PRAYER_CALL_TIME', '12:00 PM PST' );
define( 'CFP_LOCATION', 'Inglewood, California' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
