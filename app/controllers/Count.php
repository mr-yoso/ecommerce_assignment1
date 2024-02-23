<?php
namespace app\controllers;

use app\models\Counter;

class Count {
    public function index(){

        $counter = new \app\models\Counter();

        $counter ->increment();
        $counter ->write();


        echo $counter;


    }
}

?>