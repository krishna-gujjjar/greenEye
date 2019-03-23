<?php namespace GreenEye\App\Functions;

/** Get Current File */
trait getself
{
    public static function getName()
    {
        return basename($_SERVER['PHP_SELF'], '.php');
    }

    public static function delPublic()
    {
        return print(htmlspecialchars(str_replace('.php', '', str_replace('/public', '', $_SERVER['PHP_SELF']))));
    }
}
