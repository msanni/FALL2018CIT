<?php

function loadClass($class) {

    $pathControl = 'application/controllers/' . strtolower($class) . '.class.php';
    $pathLibs = 'application/libs/' . strtolower($class) . '.class.php';
    $pathModels = 'application/models/' . strtolower($class) . '.class.php';
    $path = 'application/'. strtolower($class) . '.class.php';

    if (file_exists($pathControl)) {
        require_once $pathControl;
    }
    elseif (file_exists($pathLibs)) {
        require_once $pathLibs;
    }
    elseif (file_exists($pathModels )) {
        require_once $pathModels ;
    }
    elseif (file_exists($path)) {
        require_once $path;
    }

}

spl_autoload_register('loadClass');


new Controller();


?>