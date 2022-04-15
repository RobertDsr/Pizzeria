<?php

spl_autoload_register('vesuvio_autoloader');

function _autoloader($class) {
    $namespace = 'ThisSite\Theme';

    if(strpos($class, $namespace) !== 0) {
        return;
    }

    $class = str_replace($namespace, '', $class);
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    $directory = get_template_directory();
    $path = $directory . DIRECTORY_SEPARATOR . 'inc' . $class . '.php';

    if(file_exists($path)) {
        require_once($path);
    }
}