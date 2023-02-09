<?php
require_once("c://xampp/htdocs/bibliotech-refactoring/view/partials/head.php");
require_once("c://xampp/htdocs/bibliotech-refactoring/view/partials/nav.php");
require_once("c://xampp/htdocs/bibliotech-refactoring/controller/BookController.php");

$controller = new BookController();
$result = $controller->showBook($_GET['isbn']);
    // if (isset($_GET['isbn'])){
    //     $result = $controller->showBook($_GET['isbn']);
    // }
    // else 
    //     echo("Búsqueda fallida");
?>
<?php 
if ($result):
?>

<?php
foreach($result as $book) :?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="/bibliotech-refactoring/view/books/update.php?isbn=<?php echo $_GET['isbn']; ?>" method="POST"
                    enctype='multipart/form-data'>
                     <div class="form-group py-1">
                        <label for="title">Título</label>
                        <input type="text" name="title" id="title" class="form-control"
                            placeholder="Actualiza el título" autofocus value="<?php echo $book[4]; ?>"> </div>
                        
                            <div class="form-group py-1">
                            <label for="author_name">Nombre del autor</label>
                            <input type="text" name="author_name" id="author_name" class="form-control"
                                placeholder="Actualiza el nombre" autofocus value="<?php echo $book[2]; ?>"> </div>
                            
                                <div class="form-group py-1">
                                <label for="author_lastName">Apellido del autor</label>
                                <input type="text" name="author_lastname" id="author_lastName" class="form-control"
                                    placeholder="Actualiza el apellido" autofocus
                                    value="<?php echo $book[3]; ?>"> </div>
                                <div class="form-group py-1">
                                    <label for="isbn">ISBN</label>
                                    <input type="text" name="isbn" id="isbn" class="form-control"
                                        placeholder="Actualiza ISBN" autofocus disabled value="<?php echo $book[1]; ?>">
                                </div>

                                    <div class="form-group py-1">
                                        <label for="description">Descripción</label>
                                        <textarea name="description" id="description" rows="10" cols="30"
                                            class="form-control"
                                            placeholder="Actualiza una descripción"><?php echo $book[5]; ?></textarea>
                                    </div>

                                    <div class="center-content ">
                                      <img src= "/bibliotech-refactoring/<?php echo $book[0]?>" class="card-img-center rounded" alt="Portada libro <?php echo $book[4] ?>">
                                    </div>

                                    <div class="input-group mb-3 mt-2">
                                        <label  class="input-group-text" for="inputGroupFile01">Imagen</label>
                                        <input type="file" name="image" class="form-control" id="inputGroupFile01">
                                    </div>

                                    <div class="d-grid gap-2">
                                    <input type="submit" class="btn btn-dark btn-block" name="update"
                                        value="Actualizar"></div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
<?php else :?>
    <h2> Libro no disponible</h2>
<?php  endif;?> 
<?php
require_once("c://xampp/htdocs/bibliotech-refactoring/view/partials/footer.php");
?>