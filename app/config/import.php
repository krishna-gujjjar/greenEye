<?php
class Import
{
    static function Header()
    {
        return require_once INC . 'header.php';
    }

    static function  Footer()
    {
        return require_once INC . 'footer.php';
    }

    static function getHeader()
    {
        return require_once INC . 'aHeader.php';
    }

    static  function getFooter()
    {
        return require_once INC . 'aFooter.php';
    }
}
