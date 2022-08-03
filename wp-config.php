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
define('DB_NAME', 'drunkbit_wp97');

/** MySQL database username */
define('DB_USER', 'drunkbit_wp97');

/** MySQL database password */
define('DB_PASSWORD', '67pY1e!V(S');

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
define('AUTH_KEY',         'ee5eo4hiljis4tn8hzf0u5ys4iozphdvjqudafbbatc21onzcqx8pyqmqwbai4tb');
define('SECURE_AUTH_KEY',  'wjbwzacogky00nmdqhqw6uck5gwzrgotppzdhz9qlsgppnydv840wnmoro3zjie3');
define('LOGGED_IN_KEY',    'erz630gycet94yaz4xezek3hn8qlotsksl97nzyrpcukdmahrijmexdn3tuuxjnh');
define('NONCE_KEY',        '6waszhw7lfsdutjlsodsb5juhsebs8u9ogspglz6dyg5gz3pfdv1fv6dtcuypu8m');
define('AUTH_SALT',        '8rbpavvu9n3rg66clcidzeh8jp8tvf6lqaau0ugtdrgt5nepersje6nbfmyad732');
define('SECURE_AUTH_SALT', 'jegouwhmuuzmzyrgpygyv7rdnllfoigyf4ftklcktzkzukddtouchyveuhofztai');
define('LOGGED_IN_SALT',   'y9hc4bgwrbpmpmjzs3k2jfrgfmsrowjwxjxratb3qevitgp1gdvn3b8nmbjucjy4');
define('NONCE_SALT',       'gulfkfbwnobbsjeabuv2swa17os7df41eh8bqlswat5szlma1s5y7ayf1jz3ouci');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpnh_';

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
