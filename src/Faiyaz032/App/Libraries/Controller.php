<?php

namespace App\Libraries;

/**
 * Base Controller
 * Loads Models and Views
 */

 class Controller
 {
     //Load Model
     public function model($model)
     {
        //Require model file
        require_once '../App/Models/' . $model . '.php';

        //instantiate model
        return new $model();
     }

     //Load views
     public function view($view, $data = [])
     {
        //check the view file
        if(file_exists('../App/Views/' . $view . '.php')){
            require_once '../App/Views/' . $view . '.php';
        }else{
            die('View does not exists');
        }
     }
 }