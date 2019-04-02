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

    public static function delIndex()
    {
        echo htmlspecialchars(str_replace('.php', '', str_replace('index', '', str_replace('/public', '', $_SERVER['PHP_SELF']))));
    }

    public static function Path(string $location = null)
    {
        is_null($location) and $location = htmlspecialchars(str_replace('.php', '', str_replace('index', '', str_replace('/public', '', $_SERVER['PHP_SELF']))));
        // if(strpos($_SERVER['PHP_SELF'], 'admin/') and !is_null($location)) { $location = htmlspecialchars(ADMIN . $location);}
        // (!strpos($_SERVER['PHP_SELF'], 'admin/') and !is_null($location)) and $location = htmlspecialchars(PUBLIC_PATH . $location);
        return $location;
    }
}
