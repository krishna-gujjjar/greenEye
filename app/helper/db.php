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
                            `gReeneye_uriD` int(11) DEFAULT NULL COMMENT 'Who Created ?',
                            `gReeneye_ucdatE` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Admin''s Create Date',
                            `gReeneye_ulogiN` json DEFAULT NULL COMMENT 'Admin''s Login Time Details',
                            `gReeneye_ulvL` int(11) NOT NULL DEFAULT '2' COMMENT 'Admin''s Level',
                            `gReeneye_upiC` text COMMENT 'Admin Profile Pic'
                        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Admin''s List'";
                    $createUser = mysqli_query($this->connect, $createUser) or exit(errMsg('Oops, Table Not Created'));
                    if ($createUser) {
                        $checkIndex = "SHOW INDEX FROM `gReeneye_uSEr`";
                        $checkIndex = mysqli_query($this->connect, $checkIndex) or exit(errMsg('Unable to Find Indexes in Database'));
                        $rowss = mysqli_num_rows($checkIndex);
                        if ($rowss < 2) {
                            $indexDB = "ALTER TABLE `gReeneye_uSer`
                                ADD KEY `rID` (`gReeneye_uriD`)";
                            $indexDB = mysqli_query($this->connect, $indexDB) or exit(errMsg('Unable to Add Index in Database'));
                        }
                        $checkData = "SELECT * FROM `gReeneye_uSer` WHERE `gReeneye_uiD` = 1";
                        $checkData = mysqli_query($this->connect, $checkData) or exit(errMsg("Sorry, Can't Find Any Data in Database"));
                        if ($checkData) {
                            $row = mysqli_num_rows($checkData);
                            if ($row > 0) {
                                return true;
                            } else {
                                $insertUser = "INSERT INTO `gReeneye_uSer`(`gReeneye_uiD`, `gReeneye_unamE`, `gReeneye_upasS`, `gReeneye_uriD`,         `gReeneye_ucdatE`, `gReeneye_ulogiN`, `gReeneye_ulvL`, `gReeneye_upiC`) VALUES (1, 'krishnaGujjjar', 'e83ffe3fe26bd38e08e6c31194067c9f88d762600d6e6c0a766945562aaa4aff', 1, '2019-03-22 15:04:54', NULL, 1, NULL)";
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
