<?php
namespace app\controllers;

use stdClass;

class Contact extends \app\core\Controller
{
    public function mainIndex()
    {
        $this->view('Main/index');
    }

    public function mainAboutUs()
    {
        $this->view('Main/about_us');
    }

    function contactIndex()
    {
        $this->view('Contact/index');
    }

    function contactRead()
    {
        $message = \app\models\Message::read();
        $this->view('Contact/read', $message);
    }

    function send()
    {
        //call a view to show the submitted data
        //collect the data
        //declare a message object
        $message = new \app\models\Message();
        //populate the properties
        $message->name = $_POST['name'];
        $message->email = $_POST['email'];
        $message->IP = $_SERVER['REMOTE_ADDR'];
        //hypothetically insert into a database
        $message->write(); //add the message to the data file

        //redirect the user back to the list
        header('location:/Contact/read');
    }

}