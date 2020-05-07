<?php

namespace App\Controller;
use App\Controller\BaseController;

require_once realpath("vendor/autoload.php");

class HomeController extends BaseController{
    public function index()
    {
        view('home');
    }
}

// (new HomeController)->index();