<?php
//AWS EB environment variables
define('DB_NAME', $_SERVER['RDS_DB_NAME']);
define('DB_USER', $_SERVER['RDS_USERNAME']);
define('DB_PASSWORD', $_SERVER['RDS_PASSWORD']);
define('DB_HOST', $_SERVER['RDS_HOSTNAME']);
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');
define('AUTH_KEY',         $_SERVER['WP_AUTH_KEY']);
define('SECURE_AUTH_KEY',  $_SERVER['WP_SECURE_AUTH_KEY']);
define('LOGGED_IN_KEY',    $_SERVER['WP_LOGGED_IN_KEY']);
define('NONCE_KEY',        $_SERVER['WP_NONCE_KEY']);
define('AUTH_SALT',        $_SERVER['WP_AUTH_SALT']);
define('SECURE_AUTH_SALT', $_SERVER['WP_SECURE_AUTH_SALT']);
define('LOGGED_IN_SALT',   $_SERVER['WP_LOGGED_IN_SALT']);
define('NONCE_SALT',       $_SERVER['WP_NONCE_SALT']);
define('DBI_AWS_ACCESS_KEY_ID', $_SERVER['WP_AWS_ACCESS_KEY_ID']);
define('DBI_AWS_SECRET_ACCESS_KEY', $_SERVER['WP_AWS_SECRET_ACCESS_KEY']);
$table_prefix  = 'wp_';
define('WP_DEBUG', false);
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');
