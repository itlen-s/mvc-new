<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller {

    // public function before() {
    //     $this->view->layout = 'coustom';
    // } 
    public function loginAction() { 
        // $this->view->redirect('/');
        $this->view->render('Вход');
        // var_dump($this->route);
    }

    public function registerAction() {
        // $this->view->path = 'test/test';
        // $this->view->layout = 'coustom';//('Регистрация');
        $this->view->render('Регистрация');
    }
    // function __construct(argument){

    // }
}