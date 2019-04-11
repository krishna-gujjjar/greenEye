<?php namespace GreenEye\App\Validators;

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
 *      + Add, Update & Delete Site Ower"s Details
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

use GreenEye\App \ {
    Functions\getself,
    Functions\Valid,
    Helper\Flash,
    Libs\Database as GreenEyeDatabase
};

/** `Validate Class`
 *
 * Validate Admin Dashborad & User Auth */
class Validate extends GreenEyeDatabase
{
    use Valid;
    use getself;

    protected $loginName;
    protected $loginPass;

    public function __construct()
    {
        parent::__construct();
        $this->checkLogin();
    }

    /** `checkLogin Function`
     *
     * Check User Enter valid Login Details & User had Aready valid Account.
     * @return void */
    public function checkLogin()
    {
        if ($this->isCreatePost('login')) {
            if ($this->notEmp($_POST["loginName"], $_POST["loginPass"])) {
                $this->loginName = $this->cleanStr($_POST["loginName"]);
                $this->loginPass = $this->enc($_POST["loginPass"]);

                if ($this->notEmp($this->loginName, $this->loginPass)) {
                    $this->query("SELECT * FROM gReenEye_uSer WHERE gReeneye_unamE = :name AND gReeneye_upasS = :pass");
                    $this->bind(":name", $this->loginName);
                    $this->bind(":pass", $this->loginPass);
                    $row = $this->single();

                    if ($this->rowCount() > 0) {
                        $_SESSION["uSer_namE"] = ucwords($row["gReeneye_unamE"]);
                        $_SESSION["uSer_iD"] = $row["gReeneye_uiD"];
                        $_SESSION["uSer_lvL"] = $row["gReeneye_ulvL"];
                        is_null($row["gReeneye_upiC"]) or $_SESSION["uSer_piC"] = $row["gReeneye_upiC"];
                        $_SESSION["gReeneye"] = rand(0000, 9999);
                        Flash::setMsg("Welcome Back, " . $_SESSION["uSer_namE"]);
                        header("location:" . ADMIN);
                        exit();
                    } else {
                        Flash::setMsg("Invalid Login Details");
                        header("location:" . $this->Path());
                        exit();
                    }
                } else {
                    Flash::setMsg("Something Went Wrong");
                    header("location:" . $this->Path());
                    exit();
                }
            } else {
                Flash::setMsg("Fields Are Empty, Please Fill All Field.");
                header("location:" . $this->Path());
                exit();
            }
        }
    }

    /** `logOut Function`
     *
     * Destroy All Sessions & Redirect to `Login` Page
     * @return void */
    public static function logOut()
    {
        if (isset($_REQUEST["logout"]) && self::User()) {
            session_destroy();
            Flash::setMsg("Logout Successfully");
            self::reDirect(LOGIN);
            exit();
        }
    }
}
