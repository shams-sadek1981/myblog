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
define('AUTH_KEY',         'jtofeCoqx4VyJDwV2AnW3DQHzlTLViDyH580XqoBQuEVdoqDtAtG9mrvxOwTo+l3g1pzKHkm0jdSggE1Wc3Tuw==');
define('SECURE_AUTH_KEY',  'cPdqAmNDlRzyix8Hu/XjNBsLRSqCC6VclBV6W7WcElT2SeM44NBat+B2gJ3QcLYsSNZIB2+LBCuGS8EQK4ivGg==');
define('LOGGED_IN_KEY',    'fpZMYQwkFKPe9amPaf9UvxkDskzMsOyki91XNxaBkK5vyIHJflOeXJDlafT5BkGnVDjav/K2BNh3bsU9YJsP/A==');
define('NONCE_KEY',        'grKSEhFmQGWfVVWEX5wz0wqXLLNRGEzJ4iVeX9iDZJnpS3ZLtwr1XSbB9CxP1mGLOzn+d5jsqPVJjYv0xelQhQ==');
define('AUTH_SALT',        'DgsBCBNhoF0rlWxHoRnUxugLAWh8w8KRTmWDGs90nE9RUtmq6f8jouU6Ido/qiOAHgKrFBM/VQYhC6s5LsBQBw==');
define('SECURE_AUTH_SALT', 'pveIYmdWjlJLV/nsAjFLeoVYMwo/Zayd1LqEDnw+kfC1+zg9Dby1MSgU7YrA65/NGwVl6G84tEWaiIpE57ZcdA==');
define('LOGGED_IN_SALT',   'HqnTDcVfuhT4P5Krj1U7wyFoSguDIQO7PUKn5CnZ/SZdPeuahWkdKg6Bu17LCAunalnoAwKwiC8jjFP/lu3TSQ==');
define('NONCE_SALT',       'im1fHMJPJ3VtDMVedlj394lBh/49Ub6TZgjgvZvM8tR8tXMsl+svJnxV72fpGjMeYnsgXHhVg0KcmuMt/fRQJA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
