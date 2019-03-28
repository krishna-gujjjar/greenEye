<?php namespace GreenEye\App\Config;

use GreenEye\App\Functions\getSelf;

/** Importing Require Files */
class Import
{
    use getSelf;

    /** Import Header */
    public static function Header()
    {
        return require_once INC . 'header.php';
    }

    /** Import Footer */
    public static function  Footer()
    {
        return require_once INC . 'footer.php';
    }

    /** Import Admin's Header */
    public static function getHeader()
    {
        return require_once INC . 'aHeader.php';
    }

    /** Import Admin's Footer */
    public static  function getFooter()
    {
        return require_once INC . 'aFooter.php';
    }
}
