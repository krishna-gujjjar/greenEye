<?php namespace GreenEye\App\Functions;

/** File Name : `getpath.php`
 *
 * Get Dynamic URL Path for Our Project
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
 * @subpackage      GreenEye \ App \ `Functions`
 * @source          `app/functions/getpath.php`         Get URL Path
 * @author          Krishna Gujjjar                     <krishnagujjjar@gmail.com>
 * @copyright       Copyright (c) 2019 Krishna Gujjjar  <krishnagujjjar@gmail.com>
 * @license         MIT
 * @version         1.0.0 */

/** `getPath Trait`
 *
 * Get URL Path for Our Project */
trait getPath
{
    /** `Request Function`
     *
     * Path of `admin/assets/requests/request.php`
     * @return void */
    public static function Request()
    {
        print(ROOT_URL . 'admin/assets/requests/request.php');
    }
}
