<?php
require_once('ControllerBase.php');

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
                try {
                    $b = new Benutzer($_POST);
                    $b->speichere();
                } catch (PDOException $e) {
                    redirect("index.php?aktion=error&msg=ungültiger%20Nickname");
                }
                redirect("index.php?aktion=error&msg=Passwörter%20stimmen%20nicht%20überrein");
            }else {
                redirect("index.php?aktion=error");
            }
        }
   }

   public function error() {

   }

}





?>