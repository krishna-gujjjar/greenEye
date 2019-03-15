<?php
class Config
{
    /** Active Current Page
     * @param string $title Page Name
     * @return string */
    static function Title($title)
    {
        return ($title === basename($_SERVER['PHP_SELF'], '.php')) and print('active');
    }

    /** Get Page Title
     * @return string */
    static function getPageTitle()
    {
        $title = basename($_SERVER['PHP_SELF'], '.php');
        return ($title === 'index' and print('Home')) or print(ucwords(str_replace('-', ' ', $title)));
    }
}
