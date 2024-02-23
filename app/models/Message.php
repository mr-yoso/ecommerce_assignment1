<?php

namespace app\models;

class Message
{
    public $name;
    public $email;
    public $ip;

    public function __construct($name, $email, $ip)
    {
        $this->name = $name;
        $this->email = $email;
        $this->ip = $ip;
    }

    public function read()
    {
        $filename = 'app/resources/messages.txt';
        return file($filename);
    }


    public function write()
    {
        $filename = 'app/resources/messages.txt';
        $message = json_encode($this);

        $handle = fopen($filename, 'a');

        if ($handle) {
            flock($handle, LOCK_EX);
            fwrite($handle, $message . "\n");
            fclose($handle);
        } else {

        }
    }

}