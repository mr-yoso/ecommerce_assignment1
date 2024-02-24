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
        $message = new Message();
        $messages = $message->read();
        $this->view('Contact/read', ['messages' => $messages]);
    }

    public function write()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $message = new Message($_POST['email'], $_POST['message'], $_SERVER['REMOTE_ADDR']); // Assuming these are the expected fields
            $message->write();
            header('location:/Contact/read');
        }
    }

    private function view($view, $data = [])
    {
        require_once "../views/$view.php";
    }
}