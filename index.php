<?php 
    require_once ('src/model/funktionen.inc.php');
    require_once('src/controller/controller.php');
    require_once ('src/model/dbconn.php');

    spl_autoload_register('autoloadControllers');
    spl_autoload_register('autoloadEntities');
    spl_autoload_register('autoloadTraits');

    $aktion = isset($_GET['aktion'])?$_GET['aktion']:'login';
    $controller = isset($_GET['controller'])?$_GET['controller']:'Index';

    $controller = new Controller();

    if (method_exists($controller, $aktion)){
        $controller->run($aktion);
    }

?>



