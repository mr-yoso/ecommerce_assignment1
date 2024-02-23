<?php
namespace app\controllers;

use app\models\Counter;

class Count
{
    public function index()
    {
        $counter = new Counter();
        $counter->increment();
        $counter->write();
        echo json_encode(['count' => $counter->count]);
    }
}