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
    public function addBooks($isbn, $title, $author_name, $author_lastname, $description, $image_name){ 

        $image_name = basename($_FILES['image']['name']);
        $image_file = $_FILES['image']['tmp_name'];

        $directory_route = '../assets/img/' . $image_name;
        $db_image_route = 'assets/img/' . $image_name;

        if (!is_numeric($isbn)){
           return 'Pon un número entero';
        
          } else{
        
            $query = $this->conn->query("SELECT EXISTS (SELECT * FROM books WHERE isbn='$isbn');");
            $row=mysqli_fetch_row($query);
            
            if ($row[0] == "1"){
                return 'Ya existe isbn';
              
            }else{
                $query=$this->conn->query("INSERT INTO books (isbn, title, author_name, author_lastname, description, image) VALUES ('$isbn','$title','$author_name','$author_lastName','$description','$db_image_route')");
              
              move_uploaded_file($image_file, $directory_route);

              echo 'El libro se ha agregado con éxito';

              return $query;
            }
          }
    }

}
/* $Bookmodel = new BookModel();
var_dump($Bookmodel->conn);
 */
// $Bookmodel = new BookModel();
// var_dump($Bookmodel->getBooks());

$Bookmodel = new BookModel();



