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

        public function addBooks($isbn, $title, $author_name, $author_lastName, $description, $db_image_route)
        {
            if ($this -> model->addBooks($isbn, $title, $author_name, $author_lastName, $description, $db_image_route))
            {
               return  header("Location: /bibliotech-refactoring"); 
            } else {
               return 'No se han encontrado resultados';
            }
            
        }
        public function deleteBook ($isbn) {
            return ($this->model->deleteBook($isbn) ? header("Location: /bibliotech-refactoring"):false);
        }
    }

    // $controller = new BookController();
    // var_dump($controller->getBooks());
