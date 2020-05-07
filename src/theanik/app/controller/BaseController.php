<?php

namespace App\Controller;



class BaseController{

    public function __construct()
    {
        require_once  realpath('app/Utils/helper.php');
    }
}

new BaseController;