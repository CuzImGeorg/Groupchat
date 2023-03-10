<?php
abstract class ControllerBase
{

    protected $context = array();

    public function run($aktion){
        $this->$aktion(); // LOGIK
        $this->generatePage($aktion); //VIEW
    }

    protected function generatePage($template){
        extract($this->context);
        require_once 'src/view/'.$template."Aktion.tpl.php";

    }
    protected function addContext($key, $value){
        $this->context[$key] = $value;
    }
}