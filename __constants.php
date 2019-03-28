<?php namespace GreenEye;

function msg($msg)
{
    print("<center style='color: #3a4161'><h1 style='margin: 25% 0%;font-family: serif; font-size: 40px'>" . $msg . "</h1></center>");
}

/** Check PHP Version */
version_compare(phpversion(), '7.2.14', '>=') or die(msg("Please Update Your PHP Version, Your Current Version is &nbsp;'<span style='color: #ff0062'>" . phpversion() . "</span>'."));

/** Check Folder Exist or Not */
realpath($_SERVER['DOCUMENT_ROOT'] . '/greenEye/') or die(msg("Project Base Folder 'greenEye' Not Found On Document Root &nbsp;'<span style='#ff0062'>" . $_SERVER['DOCUMENT_ROOT'] . "</span>'."));

if (!session_id()) @session_start();

ini_set('display_errors', 1); //Show Errors

/** Basic Constants*/
defined('DS') or define('DS', DIRECTORY_SEPARATOR);
defined('BS') or define('BS', '\\');

/** Site Admin's Constants */
defined('SITENAME') or define('SITENAME', 'GreenEye');
defined('SITEMAIL') or define('SITEMAIL', 'admin@greeneye.tk');

/** Base Constants */
defined('BASE') or define('BASE', 'greenEye');

/** Project Folder Name */
defined('BASE_FOLDER') or define('BASE_FOLDER', 'greenEye/');
defined('ROOT') or define('ROOT', $_SERVER['DOCUMENT_ROOT'] . DS . BASE_FOLDER);

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
defined('ADMIN') or define('ADMIN', str_replace('/public', '', PUBLIC_URL . 'admin/'));
defined('LOGIN') or define('LOGIN', str_replace('/public', '', PUBLIC_URL . 'admin/login'));

require_once  CONFIG . 'autoloader.php';
