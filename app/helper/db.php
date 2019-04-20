<?php namespace GreenEye\App\Helper;

use function GreenEye\errMsg;

require_once ROOT . 'app/config/setdb.php';

/** Check Database & Table
 *
 * If It's Not Exists Than Create New Database & Table*/
abstract class DB
{
    protected $connect;

    public function __construct()
    {
        $this->connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS) or die(errMsg('Oops, Database not Connected'));
        if ($this->connect) {
            $createDB = mysqli_query($this->connect, 'CREATE DATABASE IF NOT EXISTS ' . DB_NAME) or die(errMsg('Sorry, Database Not Created Successfully.'));
            if ($createDB) {
                $selectDB = mysqli_select_db($this->connect, DB_NAME) or die(errMsg('Oops, Database Not Selected.'));
                if ($selectDB) {
                    $createUser = "CREATE TABLE IF NOT EXISTS `gReeneye_uSer` (
                                    `gReeneye_uiD` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT 'Admin ID',
                                    `gReeneye_unamE` varchar(255) NOT NULL COMMENT 'Admin Name',
                                    `gReeneye_upasS` varchar(255) NOT NULL COMMENT 'Admin Password',
                                    `gReeneye_uriD` int(11) NOT NULL COMMENT 'Who Created ?',
                                    `gReeneye_ucdatE` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Admin\'s Create Date',
                                    `gReeneye_ulogiN` longtext DEFAULT NULL COMMENT 'Admin\'s Login Time Details',
                                    `gReeneye_ulvL` int(1) NOT NULL DEFAULT '2' COMMENT 'Admin\'s Level',
                                    `gReeneye_upiC` text COMMENT 'Admin Profile Pic',
                                    INDEX `rID` (`gReeneye_uriD`)
                                ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Admin\'s List'";
                    $createUser = mysqli_query($this->connect, $createUser) or exit(errMsg('Oops, `gReeneye_uSer` Table Not Created'));
                    $createDoctor = "CREATE TABLE IF NOT EXISTS `gReeneye`.`gReeneye_dOctor` (
                                        `gReeneye_diD` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT 'Doctor\'s ID' ,
                                        `gReeeneye_dnamE` VARCHAR(255) NOT NULL COMMENT 'Doctor\'s Name' ,
                                        `gReeneye_dexP` INT(1) NOT NULL DEFAULT '1' COMMENT 'Doctor\'s Experience' ,
                                        `gReeneye_dspl` VARCHAR(255) NOT NULL COMMENT 'Doctor\'s Speciality' ,
                                        `gReeneye_dratE` INT(1) NOT NULL DEFAULT '1' COMMENT 'Doctor\'s Rating' ,
                                        `gReeneye_dpiC` TEXT DEFAULT NULL COMMENT 'Doctor\'s Pic' ,
                                        `gReeneye_dcrT` INT NOT NULL COMMENT 'Doctor\'s Creator \'s ID' ,
                                        `gReeneye_dcrtD` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Doctor\'s Create Time' ,
                                        INDEX `createID` (`gReeneye_dcrT`)
                                    ) ENGINE = InnoDB DEFAULT CHARSET=utf8 COMMENT = 'Doctor\'s Table'";
                    $createDoctor = mysqli_query($this->connect, $createDoctor) or exit(errMsg('Oops, `gReeneye_dOctor` Table Not Created'));
                    $createAppoint = "CREATE TABLE IF NOT EXISTS `gReeneye`.`gReeneye_bOok` (
                                `gReeneye_biD` INT NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT 'Booking ID' ,
                                `gReeneye_brefiD` VARCHAR(255) NOT NULL COMMENT 'Patient\'s RefID',
                                `gReeeneye_bnamE` TEXT NOT NULL COMMENT 'Patient\'s Name' ,
                                `gReeneye_bnuM` TEXT NOT NULL COMMENT 'Patient\'s Number' ,
                                `gReeneye_bgeN` VARCHAR(255) NOT NULL COMMENT 'Patient\'s Gender' ,
                                `gReeneye_bdatE` VARCHAR(255) NOT NULL COMMENT 'Patient\'s Appointment Date' ,
                                `gReeneye_btimE` VARCHAR(255) NOT NULL COMMENT 'Patient\'s Appointment Time' ,
                                `gReeneye_bcrT` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Booking Time' ,
                                `gReeneye_bstS` INT(11) NOT NULL DEFAULT '1' COMMENT 'Booking Status'
                                ) ENGINE = InnoDB DEFAULT CHARSET=utf8 COMMENT = 'Patient\'s Booking Data';";
                    $createAppoint = mysqli_query($this->connect, $createAppoint) or exit(errMsg('Oops, `gReeneye_bOok` Table Not Created'));
                    if ($createUser && $createDoctor && $createAppoint) {
                        $checkData = "SELECT * FROM `gReeneye_uSer` WHERE `gReeneye_uiD` = 1";
                        $checkData = mysqli_query($this->connect, $checkData) or exit(errMsg("Sorry, Can't Find Any Data in Database"));
                        if ($checkData) {
                            $row = mysqli_num_rows($checkData);
                            if ($row > 0) {
                                return true;
                            } else {
                                $insertUser = "INSERT INTO `gReeneye_uSer`(
                                        `gReeneye_uiD`,
                                        `gReeneye_unamE`,
                                        `gReeneye_upasS`,
                                        `gReeneye_uriD`,
                                        `gReeneye_ucdatE`,
                                        `gReeneye_ulogiN`,
                                        `gReeneye_ulvL`,
                                        `gReeneye_upiC`
                                    ) VALUES (
                                        1,'krishnaGujjjar','e83ffe3fe26bd38e08e6c31194067c9f88d762600d6e6c0a766945562aaa4aff',1,'2019-03-22 15:04:54',NULL,1,NULL
                                        ), (
                                            2,'asifkhan','e83ffe3fe26bd38e08e6c31194067c9f88d762600d6e6c0a766945562aaa4aff',1,'2019-04-02 22:22:12',NULL,2,NULL
                                        )";
                                $insertUser = mysqli_query($this->connect, $insertUser) or exit(errMsg("Can't Insert Data in Database Successfully"));
                                if ($insertUser) {
                                    return true;
                                }
                                return false;
                            }
                            return false;
                        }
                        return false;
                    }
                    return false;
                }
                return false;
            }
            return false;
        }
        return false;
    }

    public function __destruct()
    {
        $this->connect = mysqli_close($this->connect);
    }
}
