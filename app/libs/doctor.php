<?php namespace GreenEye\App\Libs;

/** File Name : `doctor.php`
 *
 * Execute `gReeneye_dOctor` table Related Queries
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
 * @subpackage      GreenEye \ App \ `Libs`
 * @source          `app/libs/doctor.php`               CRUD Program for Doctor
 * @author          Krishna Gujjjar                     <krishnagujjjar@gmail.com>
 * @copyright       Copyright (c) 2019 Krishna Gujjjar  <krishnagujjjar@gmail.com>
 * @license         MIT
 * @version         1.0.0 */

use GreenEye\App \{
    Functions\getself,
    Functions\Valid,
    Libs\Database as GreenEyeDatabase
};

/** `Doctor Class`
 *
 * Executing All `gReeneye_dOctor` Table Related Queries */
class Doctor extends GreenEyeDatabase
{
    use Valid;
    use getself;
}
