<?php namespace GreenEye\App\Functions;

/** Validating Form */
trait Valid
{
    /** Check User is Login or Not
     * @return true|false */
    public static function User()
    {
        return isset($_SESSION["gReeneye"]) && !empty($_SESSION["gReeneye"]) && isset($_SESSION["uSer_namE"]) && !empty($_SESSION["uSer_namE"]);
    }

    /** `isCreatePost`
     *
     * Check `$_POST` Variable Create or Not
     * @param string $var1
     * @param string $var2
     * @param string $var3
     * @param string $var4
     * @return bool */
    public static function isCreatePost(string $var1 = null, string $var2 = null, string $var3 = null, string $var4 = null)
    {
        if (!empty($var1) && !empty($var2) && !empty($var3) && !empty($var4)) {
            return isset($_POST[$var1]) && isset($_POST[$var2]) && isset($_POST[$var3]) && isset($_POST[$var4]);
        } elseif (!empty($var1) && !empty($var2) && !empty($var3) && empty($var4)) {
            return isset($_POST[$var1]) && isset($_POST[$var2]) && isset($_POST[$var3]);
        } elseif (!empty($var1) && !empty($var2) && empty($var3) && empty($var4)) {
            return isset($_POST[$var1]) && isset($_POST[$var2]);
        } elseif (!empty($var1) && empty($var2) && empty($var3) && empty($var4)) {
            return isset($_POST[$var1]);
        }
    }

    /** Encrpting String
     * @param string $string
     * @return string */
    public function enc(string $string)
    {
        $salt = '-_$Krishna!@#$%&*(GurjaRproTech)*(*&^^%%$%$#!Krishna_-';
        return $string = hash('sha256', md5($string, '!@###$' .  $salt . '!@#$%$@'));
    }

    /** Clean Specials Characters
     * @param string $string
     * @return string|null */
    public function cleanStr(string $string)
    {
        $spcl = ['`', '~', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '=', '+', '[', ']', '{', '}', ';', ':', '"', "'", '\\', '|', ',', '.', '<', '>', '/', '?'];
        return trim(strtolower(preg_replace('/[^a-zA-Z0-9]/', '', str_replace($spcl, '', $string))));
    }

    /** Check Container is Empty or not
     * @param string $str1 First String
     * @param string $str2 Second String
     * @param string $str3 Third String
     * @param mixed $str4 Fourth String
     * @return true|false */
    public function notEmp($str1 = null, $str2 = null, $str3 = null, $str4 = null)
    {
        if (!empty($str1) && !is_null($str1) && !empty($str2) && !is_null($str2) && !empty($str3) && !is_null($str3) && !empty($str4) && !is_null($str4)) {
            return !empty($str1) && isset($str1) && !empty($str2) && isset($str2) && !empty($str3) && isset($str3) && !empty($str4) && isset($str4);
        } elseif (!empty($str1) && !is_null($str1) && !empty($str2) && !is_null($str2) && !empty($str3) && !is_null($str3)) {
            return !empty($str1) && isset($str1) && !empty($str2) && isset($str2) && !empty($str3) && isset($str3);
        } elseif (!empty($str1) && !is_null($str1) && !empty($str2) && !is_null($str2)) {
            return !empty($str1) && isset($str1) && !empty($str2) && isset($str2);
        } elseif (!empty($str1) && !is_null($str1)) {
            return !empty($str1) && isset($str1);
        }
    }

    /** reDirect Function
     * Javascript base Page Redirection
     * @param string $location
     * @return void */
    public static function reDirect(string $location = null)
    {
        is_null($location) and $location = getself::getName();
        return !is_null($location) and print('<script>window.location="' . $location . '"</script>');
    }
}
