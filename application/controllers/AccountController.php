<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller {

    // public function before() {
    //     $this->view->layout = 'coustom';
    // } 
    public function loginAction() { 
        if (!empty($_POST)) {
            $this->view->location('/');
            }
        // if (!empty($_POST)) {
        // $this->view->message('error', 'Текст Ошибки');
        // }
        //
        // if (!empty($_POST)) {
        //     exit(json_encode(['status' => 'success', 'message' => 123]));
        // };
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