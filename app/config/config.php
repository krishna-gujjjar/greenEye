<?php namespace GreenEye\App\Config;

/** File Name : `config.php`
 *
 * Basic Configuration Class For Our Project
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
 * @source          `app/config/config.php`             Basic Configuration Class
 * @author          Krishna Gujjjar                     <krishnagujjjar@gmail.com>
 * @copyright       Copyright (c) 2019 Krishna Gujjjar  <krishnagujjjar@gmail.com>
 * @license         MIT
 * @version         1.0.0 */

use GreenEye\App\Functions\getSelf;

/** `Config Class`
 *
 * Basic Configuration Class for Our Project */
class Config
{
    use getSelf;

    /** `Title Function`
     *
     * Add Active Class on Current Page
     * @param string    $title                              Name Of Current Page Title
     * @uses            getSelf::getName()                  Getting Name of Current Page Title
     * @return string|bool */
    public static function Title($title)
    {
        return ($title === self::getName()) and print('active');
    }

    /** `getPageTitle Function`
     *
     * Getting Current Page's Name
     * @uses            getSelf::getName()                  Getting Name of Current Page Title
     * @return          string|bool */
    public static function getPageTitle()
    {
        /** @var string $title `Title` of Current Page */
        $title = self::getName();
        return ($title === 'index' and print('Home')) or print(ucwords(str_replace('-', ' ', $title)));
    }
}
