<?php
    require_once("c://xampp/htdocs/bibliotech-refactoring/controller/BookController.php");
    $obj = new BookController();
    if (isset($_POST['update'])) {
        $isbn = $_GET['isbn'];
        $author_name = $_POST['author_name'];
        $author_lastName = $_POST['author_lastname'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $db_image_route = $_GET['image'];
        
        $obj->updateBook(
            $isbn,
            $author_name,
            $author_lastName,
            $title,
            $description,
            $db_image_route);

        if (!empty($_FILES['image']['name']))
            $image_name = basename($_FILES['image']['name']);
            $image_file = $_FILES['image']['tmp_name'];
            $db_image_route = 'assets/img/' . $image_name;
            $directory_route = '../../assets/img/' . $image_name;

            $obj->updateBook(
            $isbn,
            $author_name,
            $author_lastName,
            $title,
            $description,
            $db_image_route);
            move_uploaded_file($image_file, $directory_route);
        }
?>