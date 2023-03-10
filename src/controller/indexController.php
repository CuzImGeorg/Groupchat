<?php
require_once('controllerBase.php');

class Controller extends ControllerBase {




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