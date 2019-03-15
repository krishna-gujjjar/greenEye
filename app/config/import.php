<?php
class Import
{
    static function Header()
    {
        return require_once INC . 'header.php';
    }

    static function Footer()
    {
        return require_once INC . 'footer.php';
    }
}
