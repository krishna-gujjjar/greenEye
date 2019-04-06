<?php namespace GreenEye\App\Config;

/** File Name : `autloader.php`
 *
 * Including Require Classes & Traits in Our Project
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
 *
 * @api             `spl_autoload_register()`               Get Called Classes & Functions
 * @param string    $className                              Called Class & Function Name
 * @return string
 *
 *
 * @package         `GreenEye`
 * @subpackage      GreenEye \ App \ `Config`
 * @source          `app/config/autoloader.php`             Includes Require Classes & Functions
 * @author          Krishna Gujjjar                         <krishnagujjjar@gmail.com>
 * @copyright       Copyright (c) 2019 Krishna Gujjjar      <krishnagujjjar@gmail.com>
 * @license         MIT
 * @version         1.0.0 */

/** @param string $className */
spl_autoload_register(function ($className) {
    /** @var string|false Path of Require Classes & Functions Path */
    $path = realpath(str_replace('greeneye/', ROOT, strtolower(str_replace('\\', '/', $className))) . '.php');
    if (file_exists($path)) {
        return require_once $path;
    }
    return false;
});
