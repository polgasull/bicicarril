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
define('AUTH_KEY',         '6gvI7Iqe4AkPk3nPk1CvgBjCpmkPIQKKkFhnSxjtl2WeOrUWyrltnFZiUzxdTHdawgfu3iB6vLf5ub6ZSb7Q3Q==');
define('SECURE_AUTH_KEY',  'MR406Xqnr8O6WPnXFvgQTwBLL4IzcLiocXTFGmY63/m8dHtSX1W0I2/bhvvVT3e+yoyU7EJkGukzNyRELPKwLA==');
define('LOGGED_IN_KEY',    'gYp06M2NpO+Fe1RiKur+k8eVv/gnMxa3qebOcDdr1yssTuHzHN8btM9Qda4Bq1BbZ3fpB4T4Vec94hX/A2czAg==');
define('NONCE_KEY',        'M4A2I8amP9wN8UGTgX1LiOsw9qBKXawx7bsXH+ggOAYWKkqIaje3OCCdiME6u5OPkr1iSiGBKcv5eFf3FCOG3g==');
define('AUTH_SALT',        '4U2Z1lMbhrW0TPOzacybLRIbOsXAJq0DalL7TSYLnD0RbdqExX4yHUhTDZJds+RbvM6ProPpFmzecygeAxIoxg==');
define('SECURE_AUTH_SALT', 'SKmyOlR2jTMjhf0+NwVm+5zt9JkCIiq4Nhn7I7sE8XPTN4IJoWoSaoLtnPs1AYssEoNh90jgy5ieBzs829evCw==');
define('LOGGED_IN_SALT',   'NlS6zlDKVR9DMSlrXF6T0Z3i23qIWeo7hM1k0t4DUX+yYIs3fll4l7BxTOeSe3JJfnDHBjntu71RZLHJMsnViQ==');
define('NONCE_SALT',       'URauCG10DXSaq+byA/5VRhj5vzQT7HoooTXhpoL8l3VeoHhwJ5HWPlIUKdIPg8vpgOyBL5IJTc+bZ+7g4AjJMw==');

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
