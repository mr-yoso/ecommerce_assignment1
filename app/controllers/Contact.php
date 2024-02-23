<?php

namespace app\controllers;

use app\models\Message;

class Contact extends Main
{
    public function index()
    {
        $this->view('Contact/index');
    }

    public function read()
    {
        $message = new Message(
            $_POST['email'],
            $_POST['message'],
            $_SERVER['REMOTE_ADDR']
        );
        $messages = $message->read();
        $this->view('Contact/read', ['messages' => $messages]);
    }

    public function send()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $message = new Message(
                $_POST['email'],
                $_POST['message'],
                $_SERVER['REMOTE_ADDR']
            );
            $message->write();
            header('location:/Contact/read');
        } else {

        }
    }

    private function view($view, $data = [])
    {
        require_once "../views/$view.php";
    }
}