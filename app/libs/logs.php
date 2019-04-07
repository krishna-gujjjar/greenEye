<?php namespace GreenEye\App\Libs;

/** File Name : `logs.php`
 *
 * Createing Logs & Execute `gReeneye_lOg` table Related Queries
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
 * @source          `app/libs/logs.php`                  Create Logs
 * @author          Krishna Gujjjar                     <krishnagujjjar@gmail.com>
 * @copyright       Copyright (c) 2019 Krishna Gujjjar  <krishnagujjjar@gmail.com>
 * @license         MIT
 * @version         1.0.0 */

use GreenEye\App \{
    Functions\getself,
    Functions\Valid,
    Libs\Database as GreenEyeDatabase
};

/** `Admin Class`
 *
 * Executing All `gReeneye_uSer` Table Related Queries */
class Logs extends GreenEyeDatabase
{
    use Valid;
    use getself;

    /** Type of Log
     * @var int $logType */
    public $logType;

    /** Status of Log
     * @var int $logStatus */
    public $logStatus;

    /** Message of Log
     * @var string $logMsg */
    public $logMsg;

    /** Location Of User
     *
     * eg. Ip of User */
    public $logLoc;


    /** `setLog Function`
     *
     * Setting Values of Logs */
    public function setLog()
    {
        /** `LOG STATUS CONSTANTS`
         *
         * Log's Status
         *
         * eg. Pending, Success & Error */
        define('LOG_STATUS', [
            "pending"   => 0,
            "success"   => 1,
            "error"     => 2
        ]);

        /** `LOG TYPE CONSTANTS`
         *
         * Log's Type
         *
         * eg. login, logout, create, delete & update
        */
        define('LOG_TYPE', [
            "logging"   => 0,
            "create"    => 1,
            "delete"    => 2,
            "update"    => 3
        ]);

        define('LOG_KIND', [
            'admin',
            'doctor'
        ]);
    }
}
