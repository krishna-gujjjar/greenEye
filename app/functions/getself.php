<?php namespace GreenEye\App\Functions;

/** File Name : `getself.php`
 *
 * Get Current Page's Details
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
 * @source          `app/config/getself.php`            Get Current File Details
 * @author          Krishna Gujjjar                     <krishnagujjjar@gmail.com>
 * @copyright       Copyright (c) 2019 Krishna Gujjjar  <krishnagujjjar@gmail.com>
 * @license         MIT
 * @version         1.0.0 */

/** `getSelf Trait`
 *
 * Get Current File Details */
trait getself
{
    /** `getName Function`
     *
     * Get Current Opened File Name
     * @return string */
    public static function getName()
    {
        return basename($_SERVER['PHP_SELF'], '.php');
    }

    /** `delPublic Function`
     *
     * Delete `/public` From Current File Name
     * @return string */
    public static function delPublic()
    {
        return print(htmlspecialchars(str_replace('.php', '', str_replace('/public', '', $_SERVER['PHP_SELF']))));
    }

    /** `delIndex Function`
     *
     * Delete `/index` From Current File Name
     * @return string */
    public static function delIndex()
    {
        echo htmlspecialchars(str_replace('.php', '', str_replace('index', '', str_replace('/public', '', $_SERVER['PHP_SELF']))));
    }

    public static function Path(string $location = null)
    {
        is_null($location) and $location = htmlspecialchars(str_replace('.php', '', str_replace('index', '', str_replace('/public', '', $_SERVER['PHP_SELF']))));
        // if(strpos($_SERVER['PHP_SELF'], 'admin/') and !is_null($location)) { $location = htmlspecialchars(ADMIN . $location);}
        // (!strpos($_SERVER['PHP_SELF'], 'admin/') and !is_null($location)) and $location = htmlspecialchars(PUBLIC_PATH . $location);
        return $location;
    }
}
