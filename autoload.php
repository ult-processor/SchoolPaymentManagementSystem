<?php

function __autoload($classname)
{

    $fileName= $classname . ".php";

    if(file_exists("controller/". $fileName))
    {
        require_once("controller/". $fileName);
    }
    elseif(file_exists( "view/". $fileName))
    {
        require_once("view/". $fileName);
    }
    elseif(file_exists( "model/". $fileName))
    {
        require_once("model/". $fileName);
    }
}

spl_autoload_register('__autoload');
