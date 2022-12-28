<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;


class MainController extends Controller {

    public function indexAction() {
        // debug($this->view->render);
        // $vars = [
        //     'name' => 'вася',
        //     'age' => '88',
        //     'array' => [1, 2, 3],
        // ];
        $db = new Db;
        $form = '2; DELETE FROM users';
        $params = [
            'id' => 1,
        ];

        $data = $db->column('
        SELECT 
            name
        FROM
            users
        WHERE
            id = :id', $params);
            
        // WHERE
        // id = 1 
        debug($data);

        $this->view->render('Главная страница');
    }

    // public function contactAction() {
    //     echo 'Контакт';
    // }
    // function __construct(argument){

    // }
}