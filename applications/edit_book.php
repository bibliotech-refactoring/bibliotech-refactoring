<?php 
include("../view/partials/head.php");
include ("../view/partials/nav.php"); 
include("../db.php");
?>

<?php


$isbn = $_GET['isbn'];
$query = "SELECT * FROM books WHERE isbn = " . $isbn . "";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $title = $row['title'];
    $author_name = $row['author_name'];
    $author_lastName = $row['author_lastname'];
    $description = $row['description'];
}

if (isset($_POST['update'])) {
    $isbn = $_GET['isbn'];
    $title = $_POST['title'];
    $author_name = $_POST['author_name'];
    $author_lastName = $_POST['author_lastname'];
    $description = $_POST['description'];
    $image_name = basename($_FILES['image']['name']);
    $image_file = $_FILES['image']['tmp_name'];
    $directory_route = '../assets/img/' . $image_name;
    $db_image_route = 'assets/img/' . $image_name;
    $query = "UPDATE books set title = '$title', author_name = '$author_name', author_lastname = '$author_lastName', description = '$description'";
    if (!empty($_FILES['image']['name'])) {
        $query = $query . ", image = '$db_image_route'";
        move_uploaded_file($image_file, $directory_route);
    }
    $query = $query . " WHERE isbn = $isbn";
    mysqli_query($conn, $query);
    $_SESSION['message'] = 'Libro actualizado con éxito';
    $_SESSION['message_type'] = 'success';
    $_SESSION['message_title'] = 'Buen trabajo';
    header("Location: /bibliotech/pages/second_page.php");

}
?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="/bibliotech/applications/edit_book.php?isbn=<?php echo $_GET['isbn']; ?>" method="POST"
                    enctype='multipart/form-data'>
                     <div class="form-group py-1">
                        <label for="title">Título</label>
                        <input type="text" name="title" id="title" class="form-control"
                            placeholder="Actualiza el título" autofocus value="<?php echo $title; ?>"> </div>
                        
                            <div class="form-group py-1">
                            <label for="author_name">Nombre del autor</label>
                            <input type="text" name="author_name" id="author_name" class="form-control"
                                placeholder="Actualiza el nombre" autofocus value="<?php echo $author_name; ?>"> </div>
                            
                                <div class="form-group py-1">
                                <label for="author_lastName">Apellido del autor</label>
                                <input type="text" name="author_lastname" id="author_lastName" class="form-control"
                                    placeholder="Actualiza el apellido" autofocus
                                    value="<?php echo $author_lastName; ?>"> </div>
                                <div class="form-group py-1">
                                    <label for="isbn">ISBN</label>
                                    <input type="text" name="isbn" id="isbn" class="form-control"
                                        placeholder="Actualiza ISBN" autofocus disabled value="<?php echo $isbn; ?>">
                                </div>

                                    <div class="form-group py-1">
                                        <label for="description">Descripción</label>
                                        <textarea name="description" id="description" rows="10" cols="30"
                                            class="form-control"
                                            placeholder="Actualiza una descripción"><?php echo $description; ?></textarea>
                                    </div>

                                    <div class="center-content ">
                                      <img src= "../<?php echo $row ["image"]?>" class="card-img-center rounded" alt="Portada libro <?php echo $row ["title"] ?>">
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
<?php include ("../view/partials/footer.php");?>