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
if (file_exists(dirname(__FILE__ ). '/local.php')) {
	// Local DB settings
	define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );
} else {
	// Live DB settings
	define( 'DB_NAME', 'skyr7464_universitydata' );
	define( 'DB_USER', 'skyr7464_wp82' );
	define( 'DB_PASSWORD', 'undecisive' );
	define( 'DB_HOST', 'localhost' );
}


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
define('AUTH_KEY',         'NpGoTLrqXunTSc7OnOZCgFKHo8rJgsEvMzsJARNZsxW/bVikxfwoT1u/A7PKvFzyRuPy7I6Ki6P/jEDTyBTbCw==');
define('SECURE_AUTH_KEY',  'roHZoiIj6PoWV9SknDTG89EaX8wZd1akGEYVxylWRJY/sDufVDJjqetXlkDkj3oE2mWQnD8OJGqUewMuovQutw==');
define('LOGGED_IN_KEY',    '2eHX0RmgfkBFfqe3Ntd4IZRUZ6zhXquIOtCnF841gnqJ8xoYfWXPk90LyHHcO1xXqSlY0dqo86YfyG/tufRkmA==');
define('NONCE_KEY',        'amoGuZO3ModeJWZzIfSqESI4spk6BgyAK/iHyVw5NRGYv0lZ9F6gjcXL6ZH4p2362yDeQt1Nwx6apsv8tQ9OUw==');
define('AUTH_SALT',        'BnRpRNXlayl0xCa9CIHBMeCX0G/J6fK/Bza9TsslAJC4f9VQLjRzJv6gfDeRFWB0HeMMHoR7TiJMNSOtqkzmXA==');
define('SECURE_AUTH_SALT', 'WOnF4QQ8FBaNw+/fBllWgO3qD9XPxeGw5EquOzRi1bqlYx3py/dy5W6u6z3wC5k2uDCxvjNDXz9IuqQAtnOd+A==');
define('LOGGED_IN_SALT',   'zrac0dEzvhoWJ2HDPctyuDXLvK+LVrN/6G0xpcqn/xIWGrOoxH/xNUUOpMA35k1JM6qQ5uPWWRtNM8v9sVeoQQ==');
define('NONCE_SALT',       'QBsL2NchzhhlFb9+Mw4ZTxpX+ln1RzWnHyiOkmLtd3kgRqPgOMgxNZS7f7YzjvIASYiE0uxpXU9kYUdEHPRQPw==');

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
