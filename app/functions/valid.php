<?php namespace GreenEye\App\Functions;

/** Validating Form */
trait Valid
{
    /** Check User is Login or Not
     * @return true|false */
    public static function user()
    {
        return isset($_SESSION['gReeneye']) && !empty($_SESSION['gReeneye']) && isset($_SESSION['uSer_namE']) && !empty($_SESSION['uSer_namE']);
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
     * @param string|null $str1
     * @param string|null $str2
     * @return true|false */
    public function notEmp($str1, $str2)
    {
        return !empty($str1) && isset($str1) && !empty($str2) && isset($str2);
    }
}
