<?php
/**
 * Application-wide route definitions.
 *
 * Route definitions are applied application-wide and are processed last in, first out.
 * That is, routes added last are considered first. For more information check on the
 * documentation for the 'Route::add()' method.
 *
 * @copyright Copyright <year>, <name>
 */

Router::add('/', array('main', 'index'));

/* End of file routes.php */