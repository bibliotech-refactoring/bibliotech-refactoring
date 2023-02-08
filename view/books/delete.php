<?php
    require_once('c://xampp/htdocs/bibliotech-refactoring/controller/BookController.php');
    $controller = new BookController();

    if (isset($_GET['isbn'])) {
        $controller->deleteBook($_GET['isbn']);
    } else {
        echo("Búsqueda fallida");
    } 