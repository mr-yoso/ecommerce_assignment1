<?php

namespace app\controllers;

use app\models\Counter;

class Main
{
    public function index()
    {
        $this->view('Main/index');
    }

    public function about_us()
    {
        $this->view('Main/about_us');
    }

    private function view($view)
    {
        require_once "../views/$view.php";
    }
}