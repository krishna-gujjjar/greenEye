<?php namespace GreenEye;

ini_set('display_errors', 1);

/** Basic Constants*/
defined('DS') or define('DS', DIRECTORY_SEPARATOR);
defined('BS') or define('BS', '\\');

/** Site Admin's Constants */
defined('SITENAME') or define('SITENAME', 'GreenEye');
defined('SITEMAIL') or define('SITEMAIL', 'admin@greeneye.tk');

/** Base Constants */
defined('BASE') or define('BASE', 'greenEye');
defined('ROOT') or define('ROOT',  __DIR__ . DIRECTORY_SEPARATOR);

/** File Path Constants */
defined('CONFIG') or define('CONFIG', ROOT . 'app/config/');
defined('INC') or define('INC', ROOT . 'app/includes/');
defined('PUBLIC') or define('PUBLIC', ROOT . 'public/');

/** URL Constants */
defined('ROOT_URL') or define('ROOT_URL', 'http://test.io/greenEye/'); //For ME
// defined('ROOT_URL') or define('ROOT_URL', 'http://localhost/greenEye/'); //For You

defined('PUBLIC_URL') or define('PUBLIC_URL', ROOT_URL . 'public/');
defined('ASSETS') or define('ASSETS', PUBLIC_URL . 'assets/');
defined('VENDORS') or define('VENDORS', PUBLIC_URL . 'vendors/');

require_once  CONFIG . 'autoloader.php';
