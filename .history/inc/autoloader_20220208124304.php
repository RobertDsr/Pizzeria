<?php

spl_autoload_register();

function thissite_autoloader($class) {
    $namespace = 'ThisSite\Theme';

    if(strpos($class, $namespace))
}