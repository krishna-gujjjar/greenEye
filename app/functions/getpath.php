<?php namespace GreenEye\App\Functions;

/**
 * Get Projects Paths
 */
trait getPath
{
    /** Path of 'admin/assets/requests/request.php'
     * @return void */
    public static function Request()
    {
        print(ROOT_URL . 'admin/assets/requests/request.php');
    }
}
