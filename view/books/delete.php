<?php
    require_once('c://xampp/htdocs/bibliotech-refactoring/controller/BookController.php');
    $controller = new BookController();


    if (isset($_GET['isbn'])) {
        $targetBook = $controller->showBook($_GET['isbn']);
        $directory_route= '../../'.$targetBook[0][0];
        if(file_exists($directory_route)){
            unlink($directory_route);
        }
        $controller->deleteBook($_GET['isbn']);
    } else {
        echo("Búsqueda fallida");
    } 