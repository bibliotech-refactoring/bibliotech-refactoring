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
               return 'No se ha podido crear el libro';
            }
            
        }
        public function deleteBook ($isbn) {
            return ($this->model->deleteBook($isbn) ? header("Location: /bibliotech-refactoring"):false);
        }
        public function showBook($isbn){
            return ($this->model->showBook($isbn)!=false ? $this->model->showBook($isbn) :header("Location: /bibliotech-refactoring")); 
        }

        public function searchBooks($search){
            return ($this -> model->searchBooks($search) ? $this->model->searchBooks($search):'No se han encontrado resultados');
        }

        public function searchIsbn($isbn){
            return ($this -> model->searchIsbn($isbn) ? $this->model->searchIsbn($isbn):'No se han encontrado resultados');
        }
    }

    // $controller = new BookController();
    // var_dump($controller->getBooks());
