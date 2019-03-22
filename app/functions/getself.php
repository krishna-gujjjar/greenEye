<?php namespace GreenEye\App\Functions;

/** Get Current File */
trait getself
{
    static function getName()
    {
        return basename($_SERVER['PHP_SELF'], '.php');
    }

    static function delPublic()
    {
        return print(str_replace('.php', '', str_replace('/public', '', $_SERVER['PHP_SELF'])));
    }
}
