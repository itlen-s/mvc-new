<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller {

    public function indexAction() {
        // debug($this->view->render);
        // $vars = [
        //     'name' => 'вася',
        //     'age' => '88',
        //     'array' => [1, 2, 3],
        // ];
        // $db = new Db;
        // $form = '2; DELETE FROM users';
        // $params = [
        //     'id' => 1,
        // ];

        // $data = $db->column('
        // SELECT 
        //     name
        // FROM
        //     users
        // WHERE
        //     id = :id', $params);
            
        // WHERE
        // id = 1 
        // debug($data);
        $result = $this->model->getNews();
        $vars = [
            'news' => $result,
        ];
        // debug($result);
        $this->view->render('Главная страница', $vars);
    }

    // public function contactAction() {
    //     echo 'Контакт';
    // }
    // function __construct(argument){

    // }
}