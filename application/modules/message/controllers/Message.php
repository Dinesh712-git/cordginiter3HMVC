<?php

class Message extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        echo"index";
    }

    public function show_message() {
        echo "<h1>this is myt first controller show message function</h1>";
    }

    public function simpleMessage() {
        $content['message']="simple view i anm created";
        $this->load->view("message/simple-message",$content);
    }

}

?>