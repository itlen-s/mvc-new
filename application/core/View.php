<?php

namespace application\core;

 class View {

    public $path;
    public $route;
    public $layout ='default';
    
    public function __construct($route) {
        // $this->route = $route;
        // echo '123';
        $this->route = $route;
        $this->path = $route['controller'].'/'.$route['action'];
        // debug($this->path);
    }

    public function render($title, $vars = []) {
        // debug($vars);
        extract($vars);
        $path = 'application/views/'.$this->path.'.php';
        if (file_exists($path)){
        ob_start();
        require $path;
        $content = ob_get_clean();
        require 'application/views/layouts/'.$this->layout.'.php';
        } else {
            echo 'Вид не найден : '.$this->path;
        }
    }

    public function redirect($url) {
        header('location '.$url);
        exit;
    }

    public static function errorCode($code) {
        http_response_code($code);
        $path = 'application/views/error/'.$code.'.php';
        if (file_exists($path)){
            require $path;
        }
        exit;
    }

    

}