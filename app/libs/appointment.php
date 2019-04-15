<?php namespace GreenEye\App\Libs;

/** File Name : `appointment.php`
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
 * Project Folder name `greenEye`, In This Project Appointment :
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
 * @source          `app/libs/appointment.php`               CRUD Program for Appointment
 * @author          Krishna Gujjjar                     <krishnagujjjar@gmail.com>
 * @copyright       Copyright (c) 2019 Krishna Gujjjar  <krishnagujjjar@gmail.com>
 * @license         MIT
 * @version         1.0.0 */

use GreenEye\App \ {
    Functions\getself,
    Functions\Valid,
    Libs\Database
};

/** `Appointment Class`
 *
 * Executing All `gReeneye_bOok` Table Related Queries */
class Appointment extends Database
{
    use Valid;
    use getself;

    public function Book()
    {
        $pname = $_POST['formData']['pnamE'];
        $pnum = $_POST['formData']['pnuM'];
        $pgen = $_POST['formData']['pgeN'];
        $pdate = $_POST['formDate'];
        $ptime = $_POST['formTime'];
        $id = 'REF' . mt_rand(000000, 999999);

        $this->query("INSERT INTO `gReeneye_bOok`(
            `gReeneye_brefiD`,
            `gReeeneye_bnamE`,
            `gReeneye_bnuM`,
            `gReeneye_bgeN`,
            `gReeneye_bdatE`,
            `gReeneye_btimE`
            ) VALUES (:ref, :name, :num, :gen, :date, :time)");
        $this->bind(':ref', $id);
        $this->bind(':name', $pname);
        $this->bind(':num', $pnum);
        $this->bind(':gen', $pgen);
        $this->bind(':date', $pdate);
        $this->bind(':time', $ptime);
        if ($this->execute()) {
            echo 'Succees';
        } else {
            echo 'Something Went Wrong';
        }
    }

    function getAppointment($value = null)
    {
        if (!is_null($value) && !empty($value)) {
            $this->query("SELECT * FROM `gReeneye_bOok` WHERE `gReeneye_bOok`.`gReeneye_bdatE` = :data ORDER BY `gReeneye_bOok`.`gReeneye_bdatE` DESC");
            $this->bind(':data', $value);
        } else {
            $this->query("SELECT * FROM `gReeneye_bOok` ORDER BY `gReeneye_bOok`.`gReeneye_bdatE` DESC");
        }

        return ['Appointments' => $this->resultset(), 'AppointmentRows' => $this->rowCount()];
    }


    function showAppointment($value = null)
    {
        return $this->getAppointment($value)['Appointments'];
    }

    function countAppointment($value = null)
    {
        return $this->getAppointment($value)['AppointmentRows'];
    }

    public function getBookedDate($date)
    {
        // return json_decode($this->showAppointment())->Appointments[0]->gReeneye_bdatE;
        // $result = $this->getAppointment($date);

        if ($this->countAppointment($date) > 0) {
            foreach ($this->showAppointment($date) as $appointmentData) {
                $AppointmentDates[] = $appointmentData->gReeneye_bdatE . ' ' . $appointmentData->gReeneye_btimE;
            }
        } else {
            $AppointmentDates = array();
        }
        return $AppointmentDates;
    }

    public function getBookedTime()
    {
        // return json_decode($this->showAppointment())->Appointments[0]->gReeneye_bdatE;

        foreach ($this->showAppointment() as $appointmentData) {
            $AppointmentTimes[] = $appointmentData->gReeneye_bdatE . ' ' . $appointmentData->gReeneye_btimE;
        }
        return $AppointmentTimes;
    }
}
