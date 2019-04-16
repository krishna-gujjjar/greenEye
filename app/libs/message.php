<?php namespace GreenEye\App\Libs;

/** File Name : `message.php`
 *
 * Execute Message API
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
 * @source          `app/libs/message.php`              Execute Message Api
 * @author          Krishna Gujjjar                     <krishnagujjjar@gmail.com>
 * @copyright       Copyright (c) 2019 Krishna Gujjjar  <krishnagujjjar@gmail.com>
 * @license         MIT
 * @version         1.0.0 */

/** `Message Class`
 *
 * Working With SMS API */
class Message
{
    /** Url of SMS API */
    protected $url = "http://www.way2sms.com/api/v1/";

    // protected $apiKey = 'FL2P6YIDFUTYQ0DXM4OTTFKALS5LW9EN';  // Live Key
    // protected $secretKey = 'C4F17MRLPZIWSU5N'; // Live Key
    // protected $useType = 'prod'; // For Live

    /** API KEY */
    protected $apiKey = '6SSVNHKACSG1MGSO3FFX7V377YLKOE9Q'; // Test Key
    /** API SECRET KEY */
    protected $secretKey = 'CEBVICLG26DEJHZX'; // Test Key
    /** Type of Uses */
    protected $useType = 'stage'; // For Testing

    // protected $number = '8005561254';
    /** Sender ID */
    protected $senderID = 'admins';

    /**  */
    protected $Api;
    protected $message;
    protected $actionURL;


    /** `Initilize Function`
     *
     * `cURL` Ready Initilizing State Of Message Class
     * @return void */
    protected function Initilize(string $api = null)
    {
        $curl = curl_init();
        $this->Api = "apikey=$this->apiKey&secret=$this->secretKey&usetype=$this->useType";

        !empty($api) and $api = $this->Api . $api;

        curl_setopt($curl, CURLOPT_POST, 1); // set post data to true
        curl_setopt($curl, CURLOPT_POSTFIELDS, $api); // post data
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_URL, $this->actionURL);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        ($err and print("cURL Error #:" . $err)) or print($result);
    }

    /** `createMsg Function`
     *
     * Creating Message for SMS With OTP, REFID, Booked Date
     * @param string $name User's Name
     * @param string $refID User's Referance ID
     * @param string $bookedDate User's Booked Date
     * @return string url encoded Message */
    protected function createMsg(string $name, string $refID, string $bookedDate)
    {
        $OTP = $this->genrateOTP();
        setcookie('gReeneye', base64_encode($OTP));
        $this->message = 'Hey ' . ucwords($name) . ',
        Your Appointment is going to Book. %0a
        Your OTP is ' . $OTP . ' %0a
        Your Ref ID. ' . $refID . ' %0a
        Team Greeneye';
        return $this->message = urlencode($this->message);
    }

    /** `genrateOTP Function`
     *
     * Create `6 digit` Random Number For OTP
     * @return int */
    public function genrateOTP()
    {
        $genratr = '9571480326';
        $OTP = '';
        for ($i = 1; $i <= 6; $i++) {
            $OTP .= substr($genratr, (mt_rand() % (strlen($genratr))), 1);
        }
        return $OTP;
    }

    /** `send Function`
     *
     * Send SMS To User With RefID, Booked Date & OTP
     * @param string $name User's Name
     * @param string $refID User's Referance ID
     * @param string $number User's Mobile Number
     * @param string $bookedDate User's Booked Date
     * @return void */
    public function send(string $name, string $refID, $number, string  $bookedDate)
    {
        $this->actionURL = $this->url . 'sendCampaign';
        $this->createMsg($name, $refID, $bookedDate);
        $api = "&phone=$number&senderid=$this->senderID&message=$this->message";
        $this->Initilize($api);
    }

    public function createSenderID()
    {
        $this->actionURL = $this->url . 'createSenderId';
        $this->Initilize();
    }

    public function Wallet()
    {
        $this->actionURL = $this->url . 'checkBalance';
        $this->Initilize();
    }
}
