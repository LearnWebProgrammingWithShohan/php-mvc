<?php

if(!function_exists('view')){
    function view($view = ""){
        if(!empty($view) && "" != $view){
            $view = explode('.',$view);
            if(count($view) == 1){
                $file = $view[0];
                $path = "views/{$file}.php";
                require_once realpath($path);
            }elseif(count($view) == 2){
                $dir = $view[0];
                $file = $view[1];
                $path = "views/{$dir}/{$file}.php";
                require_once realpath($path);
            }
        }
    }
}