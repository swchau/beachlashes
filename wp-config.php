<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'beach_wordpress_ddsi9cnppda15m');

/** MySQL database username */
define('DB_USER', 'wpuserlibmv4o6pr');

/** MySQL database password */
define('DB_PASSWORD', '7ORHM92qUw');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'yiq5vhoag5sqt4xb3r3akn20x0uk2p5nkasp4obhrpl37ngusncg7fhwyb44557r');
define('SECURE_AUTH_KEY',  'vfjximqdg1cga9dqfykh7v0265rx7t4urifaa4cyw3yj52jtup6fsmp32xpjxw73');
define('LOGGED_IN_KEY',    'cqlw03g4fc47itlr5sxif5n35xs9f2yytostjp2y420tflbbn9d5cdjmc4898qxl');
define('NONCE_KEY',        '0jpx358xhhgpnx9x6tglktt00ai1fkuco8kkobcfawoymncpmmul539chi2ahylc');
define('AUTH_SALT',        'v64746l20fmjdiab5waq4urjn33giva5vn8nxroshjd89mtowovvgks346gd9km9');
define('SECURE_AUTH_SALT', '4ygsqaumgpkd5bohj3j4rg21u2ty9iwxvc4u7ksm5hubs1dax2pt5xvjypfpvmfs');
define('LOGGED_IN_SALT',   'ucxnvhw9jl8bmsusxmyhl2plq6c7hbllk4vrg4qu10kpm6ufbb4dnp7ipgxskyow');
define('NONCE_SALT',       'h742roiwibq5lh51jhq4kuobatkv1bt75bx2j1110n88n6jcxgnvu64980bob5qb');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wordpress_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
