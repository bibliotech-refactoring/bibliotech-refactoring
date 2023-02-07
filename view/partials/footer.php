</main>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Registro de Libro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/bibliotech/applications/save_book.php" method="POST" enctype='multipart/form-data'>

          <div class="form-group pb-1"><label for="title">Título</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Agrega el título" autofocus required>
          </div>

          <div class="row py-1">
            <div class="col"><label for="author_name">Nombre del autor</label>
              <input type="text" name="author_name" id="author_name" class="form-control" placeholder="Agrega el nombre"
                aria-label="Agrega el nombre" required>
            </div>
            <div class="col"><label for="author_lastName">Apellidos del autor</label>
              <input type="text" name="author_lastname" id="author_lastName" class="form-control"
                placeholder="Agrega el apellido" aria-label="Agrega el apellido" required>
            </div>
          </div>

          <div class="form-group py-1"><label for="isbn" required>ISBN</label>
            <input type="text" name="isbn" id="isbn" class="form-control" placeholder="Agrega ISBN" autofocus required maxlength="17">
          </div>
          <div class="form-group py-1"><label for="description">Descripción</label>
            <textarea name="description" id="description" rows="2" class="form-control"
              placeholder="Agrega una descripción" required></textarea>
          </div>

          <div class="input-group mb-3 mt-2">
            <label class="input-group-text" for="inputGroupFile01">Imagen</label>
            <input type="file" class="form-control" id="inputGroupFile01" name="image" required>
          </div>

          <div class="d-grid gap-2">
            <input type="submit" class="btn btn-dark btn-block" name="save_book" value="Agregar registro">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
  integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
  integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/71b620520a.js" crossorigin="anonymous"></script>
</body>

</html>