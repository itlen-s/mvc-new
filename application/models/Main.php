<?php

namespace application\models;

use application\core\Model;

class Main extends Model {

    public function getNews() {
        // debug($this->db);
        $result = $this->db->row('SELECT title, description FROM news');
        return $result;
    }
    // public function __construct() {
    //     debug($this->db);
    //     // echo 'Модель работает';
    // }
}