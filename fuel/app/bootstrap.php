<?php
// Bootstrap the framework DO NOT edit this
require COREPATH.'bootstrap.php';

\Autoloader::add_classes(array(
	// Add classes you want to override here
	// Example: 'View' => APPPATH.'classes/view.php',
	//'Carbon' => APPPATH.'vendor/nesbot/Carbon/Carbon.php',

	//'Breadcrumb' => PKGPATH.'breadcrumb/classes/breadcrumb.php',
));

// Register the autoloader
\Autoloader::register();

// load the Composer autoloader
require dirname(APPPATH).DS.'vendor/autoload.php';


// load the Carbon Class Manually
require dirname(APPPATH).DS.'vendor/nesbot/Carbon/Carbon.php';

/**
 * Your environment.  Can be set to any of the following:
 *
 * Fuel::DEVELOPMENT
 * Fuel::TEST
 * Fuel::STAGING
 * Fuel::PRODUCTION
 */
\Fuel::$env = (isset($_SERVER['FUEL_ENV']) ? $_SERVER['FUEL_ENV'] : \Fuel::DEVELOPMENT);

// Initialize the framework with the config file.
\Fuel::init('config.php');
