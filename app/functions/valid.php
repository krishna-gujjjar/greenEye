<?php namespace GreenEye\App\Functions;

/** Validating Form */
trait valid
{
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
     * @return bool */
    public function notEmp($str1, $str2)
    {
        return !empty($str1) && isset($str1) && !empty($str2) && isset($str2);
    }
}
