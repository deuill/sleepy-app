<?php
/**
 * Application-wide configuration file.
 *
 * This file contains configuration variables for this application. It should ideally be
 * the only file, along with the routes definitions, you should have to modify in order
 * to have a working environment. For setting and retrieving options at runtime, check
 * the documentation on the 'Sleepy::get()' and 'Sleepy::set()' methods.
 *
 * @copyright Copyright <year>, <name>
 */

/*
 * Client-related configuration options.
 *
 * 'path'			Path to client base directory (the one containing 'init.php').
 * 'authkey'		The key which the server is to authenticate against.
 * 'environment'	The runtime environment which the client will use to determine error
 * 					reporting etc. The presets are 'development' and 'production'.
 */

$config['client']['path']		 = '/srv/sleepy/';
$config['client']['authkey']	 = '';
$config['client']['environment'] = 'development';

/*
 * Template-related configuration options.
 *
 * 'type'			Template language/extension to use. 'Mustache' is the only template
 * 					language supported as of now.
 * 'lang'			The language used in our template source, which is the basis for all
 * 					other translations.
 */

$config['template']['type'] = 'mustache';
$config['template']['lang'] = 'en';

/* 
 * App-related configuration options.
 *
 * 	'lang'			The default display language for this application. Usually is the same
 * 					as the template language, though this is configurable at runtime.
 */

$config['app']['lang'] = 'en';

/* End of file config.php */