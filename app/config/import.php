<?php namespace GreenEye\App\Config;

/** File Name : `import.php`
 *
 * Include Header & Footer to Base Folder & Admin Folder
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
 * @source          `app/config/import.php`             Include Header & Footer
 * @author          Krishna Gujjjar                     <krishnagujjjar@gmail.com>
 * @copyright       Copyright (c) 2019 Krishna Gujjjar  <krishnagujjjar@gmail.com>
 * @license         MIT
 * @version         1.0.0 */

use GreenEye\App\Functions\getSelf;

/** `Import Class`
 *
 * Including Base Header & Footer Files.
 * */
class Import
{
    use getSelf;

    /** `Header Function`
     *
     * Include `header.php` for Client Side. */
    public static function Header()
    {
        return require_once INC . 'header.php';
    }

    /** `Footer Function`
     *
     * Include `footer.php` for Client Side. */
    public static function  Footer()
    {
        return require_once INC . 'footer.php';
    }

    /** `getHeader Function`
     *
     * Include `aHeader.php` for Admin's Dashboard. */

    public static function getHeader()
    {
        return require_once INC . 'aHeader.php';
    }

    /** `getFooter Function`
     *
     * Include `aFooter.php` for Admin's Dashboard. */
    public static  function getFooter()
    {
        return require_once INC . 'aFooter.php';
    }
}
