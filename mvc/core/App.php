<?php

class App {

    // http://localhost/learn_mvc/Home/SayHi/1/2/3

    protected $controller = "Home";
    protected $action = "SayHi";
    protected $params = [];

    public function __construct()
    {
        // Array has controller, action and params
        $arr = $this->UrlProcess();

        // Process Controller
        if (isset($arr[0]) && file_exists('./mvc/controllers/'.$arr[0].'.php')) {
            $this->controller = $arr[0];
            unset($arr[0]);
        }
        require_once './mvc/controllers/'.$this->controller.'.php';

        $this->controller = new $this->controller;

        // Process Action
        if (isset($arr[1])) {
            if (method_exists($this->controller, $arr[1])) {
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }

        // Process Params
        $this->params = $arr ? array_values($arr) : [];

        call_user_func_array([$this->controller, $this->action], $this->params);
    }

    public function UrlProcess()
    {
        // Home/SayHi/1/2/3
        if (isset($_GET['url'])) {
            $url = filter_var(trim($_GET['url'], "/"));
            return explode("/", $url);
        }
        return [];
    }


}