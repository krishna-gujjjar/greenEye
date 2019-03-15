<?php
spl_autoload_register(function ($className) {
    if (file_exists(__DIR__ . DIRECTORY_SEPARATOR . $className . '.php')) {
        require_once __DIR__ . DIRECTORY_SEPARATOR . "$className.php";
        return true;
    } else {
        $className = str_replace('\\', DIRECTORY_SEPARATOR, strtolower($className));
        if (file_exists(__DIR__ . DIRECTORY_SEPARATOR . "$className.php")) {
            require_once __DIR__ . DIRECTORY_SEPARATOR . "$className.php";
            return true;
        }
    }
    return false;
});
