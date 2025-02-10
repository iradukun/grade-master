<?php
// GradeMaster/app/core/App.php

require_once APPROOT . '/controllers/Controller.php'; 
require_once 'Database.php'; // Update this line

class App {
    protected $controller = 'HomeController';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->parseUrl();

        // Check if $url is not null before accessing its elements
        if ($url !== null && !empty($url[0])) {
            if (file_exists(APPROOT . '/controllers/' . ucwords($url[0]) . 'Controller.php')) {
                $this->controller = ucwords($url[0]) . 'Controller';
                unset($url[0]);
            }
        }

        require_once APPROOT . '/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        $this->params = $url ? array_values($url) : [];

        if (method_exists($this->controller, $this->method)) {
            call_user_func_array([$this->controller, $this->method], $this->params);
        } else {
            // Handle the case when the method doesn't exist
            throw new Exception("Method {$this->method} not found in controller {$this->controller}");
        }
    }

    protected function parseUrl() {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return null;
    }
}