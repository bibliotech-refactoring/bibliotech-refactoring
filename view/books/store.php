<?php
require_once("c://xampp/htdocs/bibliotech-refactoring/controller/BookController.php");

$controller = new BookController();

if (isset($_POST['save_book'])) {

    $controller->addBooks(
        isset($_POST['isbn']) ? $_POST['isbn'] : null,
        $_POST['title'],
        $_POST['author_name'],
        $_POST['author_lastname'],
        $_POST['description'],
        'assets/img/'.basename($_FILES['image']['name'])
    );
    $image_name = basename($_FILES['image']['name']);
    $image_file = $_FILES['image']['tmp_name'];

    $directory_route = '/bibliotech-refactoring/assets/img/' . $image_name;
    $db_image_route = 'assets/img/' . $image_name;
    move_uploaded_file($image_file, 'assets/img/'.basename($_FILES['image']['name']));
}