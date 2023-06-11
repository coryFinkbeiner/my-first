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
define('AUTH_KEY',         'pQmNiAYdVgSjxn/R30kVv+uzDjKFw9M8ajks5Gl2vNv1ShbAkQPn8bLspSo5+CmPt4DYwOrvjjBOIdr8wAh2aw==');
define('SECURE_AUTH_KEY',  '+ObPYQXA2av+Relfd6qEd9ImS9VeNHjBYJQfJBKCDsNgak8gKHsjLEiFCMmTzNDwBn7TSQoVco/UubWotyP50w==');
define('LOGGED_IN_KEY',    '/q2Myfdyb/uOAq/HchKQI8SqqM8mGfocgNmfmme7d8qe2JKJm2al0dqZG8ou9psHUMVbx8Ug7h6Xwvogm+4M6Q==');
define('NONCE_KEY',        'tsqytAaYVxuPBO/eMaV6ZX+xYeSOFb1DWQ+U2bcWvNwtmGWCcYUaLLHsdpiyFWRSC2+XEGE7ynsCCLBIlL9WNw==');
define('AUTH_SALT',        'cNrv7MKNUnO5GMcy0FKEwfhECTUa7cBMlBTmMS7Seril9mPP8JPa3KnpLA4t3XGFNLpDb9En+khoDUJwpZoa1g==');
define('SECURE_AUTH_SALT', 'SEkPSyOQNvJPPckxYEaRbkyMiTnP3NlY79OQqFpTuwkJLwilS+uj/jYzr1GSBIRDnfHnsP1kSLeaJnmg3VPy2g==');
define('LOGGED_IN_SALT',   'YxPzs5z4cO9BfJp4P05YR/knHgNCgkNpyr/ogGKfEklbXv3byo88aC1toTUHt6GrLis37Fqg/hWlLnzQXRN01Q==');
define('NONCE_SALT',       '/64XiKBK4CBj41Y1m2aecURkQ65K6ubCr2bawUVYvnd+xE1w2TAfuKyCiADRuf1COSyT+CzVsSLhPZJr3h+T+g==');


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
