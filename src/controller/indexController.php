<?php

class Controller {
    private $context = array();


    public function run($aktion){
        $this->$aktion(); // LOGIK
        $this->generatePage($aktion); //VIEW
    }

    private function generatePage($template){
        extract($this->context);
        require_once 'src/view/'.$template."Aktion.tpl.php";

    }
    private function addContext($key, $value){
        $this->context[$key] = $value;
    }

   public function login() {
        if($_POST){
            $b = Benutzer::getByNickNameAndPassword($_POST['nickname'], $_POST['password']);
            if(!$b)  {
                $b = new Benutzer(); $b->setNickname("Nickname"); $b->setPassword("Password");
                $this->addContext("benutzer", $b);
            }else {
                $this->addContext("benutzer", $b);
                $this->addContext("template", "chat");
            }
        }
        else{
            $b = new Benutzer(); $b->setNickname("Nickname"); $b->setPassword("Password");
            $this->addContext("benutzer", $b);
        }

   }

   public function registry() {
        if($_POST) {
            if($_POST['password'] === $_POST['confpassword']){
                $b = new Benutzer($_POST);
                $b->speichere();
                redirect("index.php");
            }
        }
   }
}





?>