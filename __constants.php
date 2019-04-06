<?php namespace GreenEye;

/** File Name : `__constants.php`
 *
 * File Contians Constants, Check Server Status & Complebility
 *
 *
 * PHP Version      7.2.14
 *
 * MySql Version    5.7.25
 *
 * Used APIs :
 *      + Jquery
 *      + SnackBar
 *      + Pace JS
 *      + Chartist
 *      + Feather Icons
 *      + Bootstrap
 *      + Perfect Scrollbar Jquery
 *      + Prism JS
 *      + Jquery Match Hight
 *      + Jquery Bootstrap Validation
 *
 * Project Folder name `greenEye`, In This Project Admin :
 *      + Routing File
 *      + Secure Admin Dashboard
 *      + Add, Update & Delete Caroursel
 *      + Add, Update & Delete Site Ower's Details
 *      + CRUD Program for Executing Admin
 *      + CRUD Program for Executing Doctor
 *      + Dynamic File Calling
 *      + Advance PHP Base Appointment System
 *
 * @package         GreenEye
 * @subpackage      GreenEye
 * @source          `app/config/setdb.php`              Add Database Source
 * @author          Krishna Gujjjar                     <krishnagujjjar@gmail.com>
 * @copyright       Copyright (c) 2019 Krishna Gujjjar  <krishnagujjjar@gmail.com>
 * @license         MIT
 * @version         1.0.0 */

/** Adding Constants From `Setdb` */
require_once 'app/config/setdb.php';

/** `Error Message Function`
 *
 * Show Error Message on Page
 * @param string $msg Display Message String */
function errMsg($msg)
{
    print("<center style='color: #3a4161'><h1 style='margin: 25% 0%;font-family: serif; font-size: 40px'>" . $msg . "</h1></center>");
}

/** Check PHP Version */
version_compare(phpversion(), '7.2.14', '>=') or die(errMsg("Please Update Your PHP Version, Your Current Version is &nbsp;'<span style='color: #ff0062'>" . phpversion() . "</span>'."));

/** Check Folder Exist or Not */
realpath($_SERVER['DOCUMENT_ROOT'] . '/greenEye/') or die(errMsg("Project Base Folder 'greenEye' Not Found On Document Root &nbsp;'<span style='#ff0062'>" . $_SERVER['DOCUMENT_ROOT'] . "</span>'."));

defined('DB_HOST') or die(errMsg("Please Define Database host"));
defined('DB_TYPE') or die(errMsg("Please Define Database Type"));
defined('DB_USER') or die(errMsg("Please Define Database Username"));
defined('DB_PASS') or die(errMsg("Please Define Database Password"));
defined('DB_NAME') or die(errMsg("Please Define Database Name"));

session_save_path($_SERVER['DOCUMENT_ROOT'] . '/greenEye/app/sessions');
if (!session_id()) @session_start();

ini_set('display_errors', 1); //Show Errors


/** Site Name */
defined('SITENAME') or define('SITENAME', 'GreenEye');

/** Site Admin's `E mail` */
defined('SITEMAIL') or define('SITEMAIL', 'admin@greeneye.tk');


/** Base Name */
defined('BASE') or define('BASE', 'greenEye');

/** Project Base Folder */
defined('BASE_FOLDER') or define('BASE_FOLDER', 'greenEye/');

/** Project Root Folder */
defined('ROOT') or define('ROOT', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . BASE_FOLDER);


/** Project Config Path */
defined('CONFIG') or define('CONFIG', ROOT . 'app/config/');

/** Project Include Path */
defined('INC') or define('INC', ROOT . 'app/includes/');

/** Project Public Path */
defined('PUBLIC') or define('PUBLIC', ROOT . 'public/');

/** Project Public Path */
defined('PUBLIC_PATH') or define('PUBLIC_PATH', ROOT . 'public/');


/** Project Root URL */
defined('ROOT_URL') or define('ROOT_URL', 'http://test.io/greenEye/'); //For ME
// defined('ROOT_URL') or define('ROOT_URL', 'http://localhost/greenEye/'); //For You

/** Project Public Url */
defined('PUBLIC_URL') or define('PUBLIC_URL', ROOT_URL . 'public/');

/** Project Assets Url */
defined('ASSETS') or define('ASSETS', PUBLIC_URL . 'assets/');

/** Project Vendors Url */
defined('VENDORS') or define('VENDORS', PUBLIC_URL . 'vendors/');

/** Project Admin Url */
defined('ADMIN') or define('ADMIN', str_replace('/public', '', PUBLIC_URL . 'admin/'));

/** Project Login Url */
defined('LOGIN') or define('LOGIN', str_replace('/public', '', PUBLIC_URL . 'admin/login'));

/** Include Project Autoloader */
require_once  CONFIG . 'autoloader.php';
