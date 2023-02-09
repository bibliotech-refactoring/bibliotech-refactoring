
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
