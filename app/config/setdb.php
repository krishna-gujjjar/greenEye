<?php namespace GreenEye\App\Config;

/** File Name : `setdb.php`
 *
 * Set & Define Constants For Our Project's Database
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
 * @package         `GreenEye`
 * @subpackage      GreenEye \ App \ `Config`
 * @source          `app/config/setdb.php`              Set Constants For Database
 * @author          Krishna Gujjjar                     <krishnagujjjar@gmail.com>
 * @copyright       Copyright (c) 2019 Krishna Gujjjar  <krishnagujjjar@gmail.com>
 * @license         MIT
 * @version         1.0.0 */

/** Database `Type Name`
 *
 * Type of Our Database
 * * By Default It's MySql */
defined('DB_TYPE') or define('DB_TYPE', 'mysql');

/** Database `Host Name`
 *
 * Name of Our Database Hostname
 * * By Default It's LocalHost */
defined('DB_HOST') or define('DB_HOST', 'localhost');

/** Database `User Name`
 *
 * Name of Our Database User
 * * By Default It's Root */
defined('DB_USER') or define('DB_USER', 'root');

/** Database `User Password`
 *
 * Name of Our Database User's Password
 * * By Default It's Root */
defined('DB_PASS') or define('DB_PASS', 'root');    //For Me
// defined('DB_PASS') or define('DB_PASS', '');     //For You

/** Database `Name`
 *
 * Name of Our Database Name
 * * By Default It's gReeneye */
defined('DB_NAME') or define('DB_NAME', 'gReeneye');
