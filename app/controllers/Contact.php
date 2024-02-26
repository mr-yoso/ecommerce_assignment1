<?php

namespace app\controllers;

use app\models\Message;

class Contact extends Main
{
    public function index()
    {
        $this->view('Contact/index');
    }

    function posted(){
        print_r($_POST);

        $message = new \app\models\Message();
        $message->name = $_POST['name']; 
        $message->email = $_POST['email']; 
        $message->ip = $_SERVER['REMOTE_ADDR']; 


        $message->write();

        header('location:/Contact/read');
    }
}