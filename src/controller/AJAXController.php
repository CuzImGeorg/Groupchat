<?php
require_once('controllerBase.php');

class Controller extends ControllerBase {


    public function getAllM() {
        $this->addContext("msgs", Message::getLast20());
    }


}
?>