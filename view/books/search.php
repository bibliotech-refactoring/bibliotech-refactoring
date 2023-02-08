
<?php
    require_once("c://xampp/htdocs/bibliotech-refactoring/view/partials/head.php");

    require_once("c://xampp/htdocs/bibliotech-refactoring/view/partials/nav.php");
    
    
    
    require_once("c://xampp/htdocs/bibliotech-refactoring/controller/BookController.php");
        $controller = new BookController();

        if(isset($_POST['search'])){
            $result = $controller->searchBooks($_POST['search']);
        }

if ($result):
    
?>

<?php
foreach($result as $book) :?>

<div class="card mb-3 shadow mx-auto verticalMargin" style="max-width: 60%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src= "/bibliotech-refactoring/<?= $book[0]?>" class="card-img-top rounded-start" alt="Portada libro <?php echo $book[4] ?>">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h3 class="card-title"><?= $book[4]?></h3>
        <h5 class="card-text gray-text"><?php echo $book[2]. ' ' . $book[3] ?></h5>
        <p class="card-text gray-text"><?php echo $book [1] ?></p>
        <p class="card-text"><?php echo $book[5] ?></p>

        <a href = "../applications/edit_book.php?isbn= <?php echo $book[1] ?>" class="btn btn-secondary desktop-icons"> 
        Editar
        </a>
        <a href = "../applications/edit_book.php?isbn= <?php echo $book[1] ?>" class="btn btn-secondary mobile-icons"> 
        <i class="fa-solid fa-pen-to-square"></i>
        </a>
        <button class="btn btn-danger desktop-icons" onclick="deleteYesOrNo(event)">
        Eliminar
        </button>
        <button class="btn btn-danger mobile-icons" onclick="deleteYesOrNo(event)">
           <i class="fa-solid fa-trash-can"></i>
        </button> 
          
      </div>
    </div>
  </div>
</div>

<script>
    function deleteYesOrNo(event) {
      Swal.fire({
      title: 'Quieres eliminar el libro?',
      text: "Si, has clicado por error, puedes cancelar!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Sí, eliminalo!',
      cancelButtonText: 'Cancelar!'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location= "../view/books/delete.php?isbn=<?= $book[1]?>"
        Swal.fire(
          'Eliminado!',
          'El libro ha sido eliminado exitosamente.',
          'success'
        )
      }
    })
  }
</script>

<?php endforeach; ?>
<?php else :?>
    <h2> Libro no disponible</h2>
<?php  endif;?>    

<?php
require_once("c://xampp/htdocs/bibliotech-refactoring/view/partials/footer.php");

?>