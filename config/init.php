<?php 

    //Config
    require_once 'config.php';
    //Autoload Classes

    // require_once('lib/Template.php');
    function __autoload($className){
        require_once 'lib/'.$className. '.php';
    }

?>