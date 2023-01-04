<?php

namespace application\core;

use application\core\Views;

abstract class Controller {

    public $route;
    public $view;
    public $acl;

    public function __construct($route) {
        // var_dump($route);
        // echo '<p>hi<p>';
        // debug($this->route);
        $this->route = $route;
        // $_SESSION['authorize']['id'] =1;
        if (!$this->checkAcl()) {
            View::errorCode(403);
        };
        $this->view = new View($route);
        $this->model = $this->loadModel($route['controller']);
        // debug($this->model);
        // $this->before();
    }

    public function loadmodel($name) {
        $path = 'application\models\\'.ucfirst($name); //Проверяем  наличиекласс
        if (class_exists($path)){
            // debug('123');
            return new $path;
        }
        // debug($path);
    }

    public function checkAcl() {
        // $path = $this->route['controller'].'.php';
        
        // if (file_exists($path)) {
            $this->acl = require 'application/acl/'.$this->route['controller'].'.php';
            if ($this->isAcl('all')) {
                return true;
            } elseif (isset($_SESSION['authorize']['id']) and $this->isAcl('authorize')) {
                return true;
            } elseif (!isset($_SESSION['authorize']['id']) and $this->isAcl('guest')) {
                return true;
            } elseif (isset($_SESSION['admin']) and $this->isAcl('guest')) {
                return true;
            } 
            return false;
        // debug($acl);
    }

    public function isAcl($key) {
        return in_array($this->route['action'], $this->acl[$key]);
    }

}