<?php namespace GreenEye\App\Config;

use GreenEye\App\Functions\getSelf;

/** Basic Configation Class */
class Config
{
    use getSelf;

    /** Active Current Page
     * @param string $title Page Name
     * @return string */
    public static function Title($title)
    {
        return ($title === self::getName()) and print('active');
    }

    /** Get Page Title
     * @return string */
    public static function getPageTitle()
    {
        $title = self::getName();
        return ($title === 'index' and print('Home')) or print(ucwords(str_replace('-', ' ', $title)));
    }
}
