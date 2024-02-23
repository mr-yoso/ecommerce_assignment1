<?php

namespace app\models;

class Counter
{

    public $count;

    public function __construct()
    {
        $filename = 'app/resources/counter.txt';
        if (file_exists($filename)) {
            $handle = fopen($filename, 'r');
            flock($handle, LOCK_EX);
            $this->count = json_decode(file_get_contents($filename))->count;
            fclose($handle);
        } else {
            $this->count = 0;
        }
    }

    public function increment()
    {
        $this->count++;
    }

    public function write()
    {
        $filename = 'app/resources/counter.txt';
        $data = json_encode(['count' => $this->count]);
        $handle = fopen($filename, 'w');
        flock($handle, LOCK_EX);
        fwrite($handle, $data);
        fclose($handle);
    }

    public function __toString()
    {
        return json_encode(['count' => $this->count]);
    }
}