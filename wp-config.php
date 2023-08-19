<?php

// BEGIN iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Désactivez l’éditeur de code - iThemes Security > Réglages > Ajustements WordPress > Éditeur de code
// END iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne

define( 'ITSEC_ENCRYPTION_KEY', 'WiR+MShYWkdQN25BanlhZHkpeXxseGsve3JwIXNQMW47Y3JxLzFQPWlGQkQ6R05iaEBDYz1AYjcyLyl7T3ROTQ==' );

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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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


define('AUTH_KEY',         'j247BudwDVXG+FunSBlUM1O45waUlPiMVAjXDI/ytIKbS66cb3bxyM1BrkB5w/YVX+/MduotcM1DJvNCsXvrHg==');
define('SECURE_AUTH_KEY',  '4egFvBDpCiMmTxuOUTkR6X2zYbQrIGgi4m2/ZAW2gCu5+z0TSrV5yrT3yggSAHGI743hH8lEf5R5yhGcndnSTQ==');
define('LOGGED_IN_KEY',    '/Vsv6CKql0d9AHKiK42HCNVEETO+/6kx1fM34XC78ghGs8tyt0QNhqr64lihUUazw7txad9Yxnm6XKLElHDAaw==');
define('NONCE_KEY',        'YKno8Nie0Io69Frx+EQlGeh7aHGz3f+f40aO9pN0uxtjppuRfMe1KOCILnbyI2iIYKnk8b/t3vUWWiSFVX67sw==');
define('AUTH_SALT',        '2CIxqxISmHlUuPEnBD2Nmm3MiZA22Ep4g3ArX03lTc4WgupjjBuwN8Wv0t19i0CY/G3b+M1VaB+wiYJbq28GhA==');
define('SECURE_AUTH_SALT', 'ZBmWs6qA63ptcT7uUSOY6QEaNluacaowvYSFsuP2cXlEXVAxkwCtnMBZZJ72FKn4l25GEWbT/UZav5NxRVl5dw==');
define('LOGGED_IN_SALT',   'dl1N74BTD5KSAYvR5ktyaY1LSR941kAe4K927wTXcMO1pvAVd9v6uHt2/BYHoUoPoxKXlANaSLv0gx5quD3D2A==');
define('NONCE_SALT',       'Thr0Bn01wp/GDrIV5WbmBR7DbFWxaHjEA8DA+QixI0k1KC990FTYe3lHXNGZzGfFRC2D6YtraNprvarLcYj9TQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
