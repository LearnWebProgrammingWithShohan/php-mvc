<?php

namespace App\Libraries;
error_reporting(E_ALL & ~E_NOTICE);

/**
 * App Core Class
 * Creates URL & loades Core Controller
 * URL FORMAT /Controller/method/params
 */

class Core
{
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct()
    {
        //get the url
        $url = $this->getUrl();

        if (file_exists('../App/Controllers/' . ucwords($url[0]) . '.php')) {
            $this->currentController = ucwords($url[0]);
            unset($url[0]);
        }

        //require the controller
        require_once '../App/Controllers/' . $this->currentController . '.php';

        //instantiate controlle
        $this->currentController = new $this->currentController;

        //check if method exists
        if (method_exists($this->currentController, $url[1])) {
            $this->currentMethod = $url[1];
            unset($url[1]);
        }

        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->currentController,  $this->currentMethod], $this->params);

    }

    public function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}

