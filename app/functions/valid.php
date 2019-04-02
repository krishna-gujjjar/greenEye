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
     * @param string $str1 First String
     * @param string $str2 Second String
     * @return true|false */
    public function notEmp(string $str1 = null, string $str2 = null)
    {
        return !empty($str1) && isset($str1) && !empty($str2) && isset($str2);
    }

    /** reDirect Function
     * Javascript base Page Redirection
     * @param string $location
     * @return void */
    public function reDirect(string $location = null)
    {
        is_null($location) and $location = getself::getName();
        return !is_null($location) and print('<script>window.location="' . $location . '"</script>');
    }
}
