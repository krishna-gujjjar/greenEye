<?php namespace GreenEye\App\Config;

use GreenEye\App\Functions\getSelf;

/** Importing Require Files */
class Import
{
    use getSelf;
    public function __construct()
    {
        echo 'Import Class Included';
    }

    /** Import Header */
    static function Header()
    {
        return require_once INC . 'header.php';
    }

    /** Import Footer */
    static function  Footer()
    {
        return require_once INC . 'footer.php';
    }

    /** Import Admin's Header */
    static function getHeader()
    {
        return require_once INC . 'aHeader.php';
    }

    /** Import Admin's Footer */
    static  function getFooter()
    {
        return require_once INC . 'aFooter.php';
    }
}
