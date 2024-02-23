<?php

namespace app\models;


class Message{
    public $name;
    public $email;
    public $IP;

public function __construct($name,$email,$IP){
    $this->name = $name;
    $this->email = $email;
    $this->IP = $IP;
}


public function read(){
    $file = 'resources/messages.txt';
    return file($file);
}


public function write(){
    $message = json_encode([
        'name' => $this->name,
        'email' => $this->email,
        'ip'=> $this->IP
    ]);


    $file = 'ressources/messages.txt';
    $handle = fopen($filename,'a');


    if ($handle) {
        flock($handle, LOCK_EX);
        fwrite($handle, $message . "\n");
        fclose($handle);
    }
}

}

?>