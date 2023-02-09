<?php
    require_once("c://xampp/htdocs/bibliotech-refactoring/controller/BookController.php");
    $obj = new BookController();
    
    $isbn = $_GET['isbn'];
    $author_name = $_POST['author_name'];
    $author_lastName = $_POST['author_lastname'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $db_image_route ='assets/img/'.basename($_FILES['image']['name']);

    // if(){

    // }
    // else {
    //     $db_image_route = $_GET['image'];
    // }
    $obj->updateBook(
        $isbn,
        $author_name,
        $author_lastName,
        $title,
        $description,
        $db_image_route);
?>