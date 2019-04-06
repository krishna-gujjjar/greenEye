<?php namespace GreenEye\App\Libs;

/** File Name : `admin.php`
 *
 * Execute `gReeneye_uSer` table Related Queries
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
 * @source          `app/libs/admin.php`               CRUD Program for Admin
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
class Admin extends GreenEyeDatabase
{
    use Valid;
    use getself;

    /** ShowAdminResult
     * @var string  Result of Executed Query of Admin's Database */
    public $showAdminResult;

    /**
     * ShowAdminCount
     * @var int     Count of Executed Query of Admin's Database */
    public $showAdminCount;

    /** `createAdmin Function`
     *
     * Execute Create Admin's `Insert Query`
     * @return string */
    public function createAdmin()
    {
        if (isset($_POST['aUname'])) {
            if ($this->notEmp($_POST["aUname"], $_POST["aPass"])) {
                /** Admin's Username
                * @var string $adminUname */
                $adminUname = $this->cleanStr($_POST["aUname"]);

                /** Admin's Password
                 * @var int $adminPass */
                $adminPass = $this->enc($_POST["aPass"]);

                /** Current Admin's Level
                * @var int $lvl */
                $lvl = ($_SESSION["uSer_lvL"] > 1 and
                    $_SESSION["uSer_lvL"] + 1) or
                    2;

                if ($this->notEmp($adminUname, $adminPass, $lvl)) {
                    $this->query("INSERT INTO `gReeneye_uSer`(`gReeneye_unamE`, `gReeneye_upasS`, `gReeneye_uriD`, `gReeneye_ulvL`) VALUES (:name, :pass, :rid, :lvl)");
                    $this->bind(":name", $adminUname);
                    $this->bind(":pass", $adminPass);
                    $this->bind(":rid", $_SESSION["uSer_iD"]);
                    $this->bind(":lvl", $lvl);
                    $this->execute();
                    return print(ucfirst($adminUname) . " Created Successfully");
                    exit();
                } else {
                    return print("Fields Are Empty, Please Fill All Field.");
                    exit();
                }
            } else {
                return print("Fields Are Empty, Please Fill All Field.");
                exit();
            }
        }
    }

    /** `showAdmin Function`
     *
     * Execute Show Admin's `Select Query`
     * @return object */
    public function showAdmin()
    {
        if ($_POST['sHow_admiN'] && self::User()) {
            (($_SESSION["uSer_iD"] == 1) and
                $Query = "`gReeneye_uSer`.`gReeneye_uiD` > 1") or
                $Query = "`gReeneye_uSer`.`gReeneye_uiD` > 1 AND `gReeneye_uSer`.`gReeneye_uriD` = :rid";
            $this->query("SELECT * FROM `gReeneye_uSer` WHERE $Query ORDER BY `gReeneye_uSer`.`gReeneye_ucdatE` DESC");
            $this->bind(":rid", $_SESSION["uSer_iD"]);
            $this->showAdminResult = $this->resultset();
            $this->showAdminCount = $this->rowCount();
            return print(json_encode(['data' => $this->showAdminResult, 'myRows' => $this->showAdminCount]));
            } else {
                return print("Something Went Wrong.");
            }
        } else {
            return print("Something Went Wrong.");
        }
    }

    /** `delAdmin Function`
     *
     * Execute Delete Admin's `Delete Query`
     * @return mixed */
    public function delAdmin()
    {
        if ($this->isCreatePost('dEl_admiN') && self::User() && !empty($_POST['dEl_admiN'])) {
            if ($_SESSION["uSer_lvL"] === '1' || $_SESSION["uSer_lvL"] === '2') {

                ($_SESSION["uSer_lvL"] === '2') and
                    $Query = "`gReeneye_uSer`.`gReeneye_uiD` = :delID AND `gReeneye_uSer`.`gReeneye_uriD` = " . $_SESSION["uSer_iD"];
                ($_SESSION["uSer_lvL"] === '1') and
                    $Query = "`gReeneye_uSer`.`gReeneye_uiD` = :delID";

                $this->query("DELETE FROM `gReeneye_uSer` WHERE $Query ");
                $this->bind(":delID", $_POST['dEl_admiN']);
                $this->execute();
                return print("Admin Deleted Successfully.");
            } else {
                return print("Sorry, You Can't Delete Any Admin.");
            }
        } else {
            return print("Something went wrong.");
        }
    }
}
