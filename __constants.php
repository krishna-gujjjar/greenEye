<?php ini_set('display_errors', 1);
defined('BASE') or define('BASE', 'greenEye');
define('ROOT',  __DIR__ . DIRECTORY_SEPARATOR);

//FILE PATH
defined('CONFIG') or define('CONFIG', ROOT . 'app/config/');
defined('INC') or define('INC', ROOT . 'app/includes/');
defined('PUBLIC') or define('PUBLIC', ROOT . 'public/');

//ROOT URL
defined('ROOT_URL') or define('ROOT_URL', 'http://test.io/greenEye/'); //For ME
// defined('ROOT_URL') or define('ROOT_URL', 'http://test.io/greenEye/'); //For You

defined('PUBLIC_URL') or define('PUBLIC_URL', ROOT_URL . 'public/');
defined('ASSETS') or define('ASSETS', PUBLIC_URL . 'assets/');
defined('VENDORS') or define('VENDORS', PUBLIC_URL . 'vendors/');

require_once  CONFIG . 'autoloader.php';
