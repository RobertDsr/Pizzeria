<?php

spl_autoload_register('thissite_autoloader');

function thissite_autoloader($class) {
    $namespace = 'ThisSite\Theme';

    if(strpos($class, $namespace) !== 0) {
        return;
    }

    $class = str
}