<?php
/**
 * Main index page.
 *
 * All requests should be handled from here on.
 *
 * @copyright Copyright <year>, <name>
 */

if (!defined('APP_DIR')) {
	define('APP_DIR', dirname(__DIR__).'/');
}

if (!defined('WEBROOT_DIR')) {
	define('WEBROOT_DIR', __DIR__.'/');
}

if (!include(APP_DIR.'config/config.php')) {
	echo "Config file '".APP_DIR."config/config.php' not found.";
	echo "Please check that the configuration file exists and is readable.";
	exit;
}

if (!include($config['client']['path'].'init.php')) {
	echo 'Client files not found. Please check your configuration file.';
	exit;
}

if (!include(APP_DIR.'config/routes.php')) {
	echo 'Routing configuration not found. Please check that the routes file exists and is readable.';
	exit;
}

Dispatcher::dispatch();

/* End of file index.php */