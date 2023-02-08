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
    public function deleteBook ($isbn){
      $query=$this->conn->query("DELETE FROM books WHERE isbn ='$isbn'");
      return $query;
    }

    public function showBook ($isbn){
        $query=$this->conn->query("SELECT * FROM books WHERE isbn ='$isbn'");
        return $query ? $query->fetch_all():false;

    }

    public function searchBooks ($search){
        $query=$this->conn->query("SELECT * FROM books WHERE concat(author_name,author_lastname,title) LIKE '%$search%'");

        return $query ? $query->fetch_all():false;
    }

}
/* $Bookmodel = new BookModel();
var_dump($Bookmodel->conn);
 */
// $Bookmodel = new BookModel();
// var_dump($Bookmodel->getBooks());




