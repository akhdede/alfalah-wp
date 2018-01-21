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
define('DB_NAME', 'alfalahk_wp487');

/** MySQL database username */
define('DB_USER', 'alfalahk_wp487');

/** MySQL database password */
define('DB_PASSWORD', '6N[A55N)pS');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'w97o9bltbeuyn8namuyxmhhcjtz3lbmhdqspxnnferkmd6i3irbyuvkc6mav9ciw');
define('SECURE_AUTH_KEY',  'xoyc83c75qhmv75ktdgjuna2scxavxb2s1gtktk5obkghleysu3npxit3x42tewt');
define('LOGGED_IN_KEY',    '957puf2dowwisoxtlu0kc1iujvv7sjvvb8sghihgnl8lehmkzsyb8wbth2okslm6');
define('NONCE_KEY',        '2bjr9vksc60nr5yxpqvbupnnygokgtgrxoervsjpa0lzdzxxrbyyv71dvgculjxo');
define('AUTH_SALT',        '8sylarynbwhd3px3uql0yn5zog5uh8ltjf1xudydpbgr35gj9zgqmxo8zbrk1ttq');
define('SECURE_AUTH_SALT', 'caowezmlua4yedyobxinvxrvp2d0v7wtgcbhcm1zsfltihmojge1tmdxzqturtze');
define('LOGGED_IN_SALT',   'dqsrebwhqlozjxmy8flbv2ewzzgvfatcyhvxvxiaidkmumiiklkunhwkkwfgi1nz');
define('NONCE_SALT',       '7cddlfxtyfs4kg3poiu6qh9al9futhqgmspc1ovu49uhb2kpx7he7skfwc44vdue');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpqg_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
