<?php

spl_autoload_register('thissite_autoloader');

function thissite_autoloader($class) {
    $namespace = 'ThisSite\Theme';

    if(strpos($class, $namespace) !== 0) {
        return;
    }

    $class = str_replace($namespace, '', $class);
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    $directory = get_template_directory();
    $path = $directory . DIRECTORY_SEPARATOR . 'inc' . DIRECTORY_SEPARATOR . $class . '.php'
}