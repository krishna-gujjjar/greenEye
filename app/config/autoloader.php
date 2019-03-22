<?php namespace GreenEye\App\Config;

/** @param string $className */
spl_autoload_register(function ($className) {
    /** @var string|false Required Class's Path */
    $path = realpath(str_replace('greeneye/', ROOT, strtolower(str_replace(BS, DS, $className))) . '.php');
    if (file_exists($path)) {
        return require_once $path;
    }
    return false;
});
