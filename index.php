<?php 
    require_once('src/funktionen.inc.php');
    require_once ('src/model/dbconn.php');

    spl_autoload_register('autoloadEntities');
    spl_autoload_register('autoloadTraits');

    $aktion = $_GET['aktion'] ?? 'login';
    $controller = $_GET['controller'] ?? 'index';
    $controller = ($controller) . 'Controller';

    autoloadControllers(ucfirst($controller));
    $controller = new Controller();

    if (method_exists($controller, $aktion)){
        $controller->run($aktion);
    }

?>



