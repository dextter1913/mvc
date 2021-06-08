<?php
function app_autoload($clase)
{
    include 'controller/' . $clase . '.php';
}
spl_autoload_register('app_autoload');
?>