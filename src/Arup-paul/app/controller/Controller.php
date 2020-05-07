<?php

include '../model/Model.php';

class Controller {

    public $model;

    public function __construct() {
        $this->model = new Model();
    }

}

?>