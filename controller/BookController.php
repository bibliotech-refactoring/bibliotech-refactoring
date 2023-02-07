<?php

    class BookController {
        public $model;
        public function __construct()
        {
            require_once("c://xampp/htdocs/bibliotech-refactoring/model/BookModel.php");
            $this -> model = new BookModel();
        }

        public function getBooks(){
            return ($this -> model->getBooks()? $this->model->getBooks():'No se han encontrado resultados');
        }
    }

    // $controller = new BookController();
    // var_dump($controller->getBooks());
