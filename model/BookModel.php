<?php
class BookModel{
    public $conn;
    public function __construct()
    {
       require_once("c://xampp/htdocs/bibliotech-refactoring/config/Database.php");
       $db = new Database();
       $this->conn = $db->connection();
    }
    public function getBooks(){
        $query=$this->conn->query('SELECT * FROM books');
        return $query->fetch_all(MYSQLI_ASSOC);
    }
    public function addBooks($isbn, $title, $author_name, $author_lastName, $description, $db_image_route){ 

        $query=$this->conn->query("INSERT INTO books (isbn, title, author_name, author_lastname, description, image) VALUES ('$isbn','$title','$author_name','$author_lastName','$description','$db_image_route')");
        return $query;
            
    }

}
/* $Bookmodel = new BookModel();
var_dump($Bookmodel->conn);
 */
// $Bookmodel = new BookModel();
// var_dump($Bookmodel->getBooks());

$Bookmodel = new BookModel();



