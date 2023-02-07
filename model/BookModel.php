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
}
/* $Bookmodel = new BookModel();
var_dump($Bookmodel->conn);
 */
// $Bookmodel = new BookModel();
// var_dump($Bookmodel->getBooks());



