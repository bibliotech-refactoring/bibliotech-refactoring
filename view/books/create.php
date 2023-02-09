<?php
require_once("c://xampp/htdocs/bibliotech-refactoring/view/partials/head.php");
require_once("c://xampp/htdocs/bibliotech-refactoring/view/partials/nav.php");
?>
<div class="container p-4 mt-5">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body shadow-lg">
        <form action="/bibliotech-refactoring/view/books/store.php" method="POST" enctype='multipart/form-data'>

          <div class="form-group pb-1"><label for="title">Título</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Agrega el título" required value="<?= $_POST['title'] ?? '' ?>">
          </div>

          <div class="row py-1">
            <div class="col"><label for="author_name">Nombre del autor</label>
              <input type="text" name="author_name" id="author_name" class="form-control" placeholder="Agrega el nombre"
                aria-label="Agrega el nombre" required value="<?= $_POST['author_name'] ?? '' ?>">
            </div>
            <div class="col"><label for="author_lastName">Apellidos del autor</label>
              <input type="text" name="author_lastname" id="author_lastName" class="form-control"
                placeholder="Agrega el apellido" aria-label="Agrega el apellido" required value="<?= $_POST['author_lastname'] ?? '' ?>">
            </div>
          </div>

          <div class="form-group py-1"><label for="isbn" required>ISBN</label>
            <input type="text" name="isbn" id="isbn" class="form-control" placeholder="Agrega ISBN" autofocus required maxlength="17" value="<?= $_POST['isbn'] ?? '' ?>">
          </div>
          <?php if (isset($errors['isbn'])) :?>
            <p id="errorText" class=" fs-6 text-primary"><?= $errors['isbn'] ?></p>
            <?php endif; ?>

          <div class="form-group py-1"><label for="description">Descripción</label>
            <textarea name="description" id="description" rows="2" class="form-control"
              placeholder="Agrega una descripción" required><?= $_POST['description'] ?? '' ?></textarea>
          </div>

          <div class="input-group mb-3 mt-2">
            <label class="input-group-text" for="inputGroupFile01">Imagen</label>
            <input type="file" class="form-control" id="inputGroupFile01" name="image" required>
          </div>

          <div class="d-grid gap-2">
            <input type="submit" class="btn btn-success btn-block" name="save_book" value="Agregar registro">
            <a href="/bibliotech-refactoring/view/books/index.php" class="btn btn-primary">Cancelar</a>
          </div>

        </form>
        </div>
        </div>
    </div>
</div>
<?php
require_once("c://xampp/htdocs/bibliotech-refactoring/view/partials/footer.php");
?>