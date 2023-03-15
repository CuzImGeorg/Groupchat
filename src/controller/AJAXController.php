<?php
require_once('controllerBase.php');

class Controller extends ControllerBase {


    public function getAllM() {
        $this->addContext("msgs", Message::getLast20());
        header('Content-type: text/xml');
    }

    public function send(){
        $m = new Message();
        $m->setMsgtext("fjdsf");
        $m->setBenutzerid(1);
        $m->setTime("2023-03-11 22:46:29.352417");
        $m->speichere();
    }
    function console_log($output, $with_script_tags = true) {
        $js_code = 'console.log(' . $output .
            ');';
        if ($with_script_tags) {
            $js_code = '<script>' . $js_code . '</script>';
        }
        echo $js_code;
    }

}
?>