<?php
include("../view/partials/head.php");
include ("../view/partials/nav.php"); 
include("../db.php");

if (isset($_GET['isbn'])) {
    $isbn = $_GET['isbn'];
    $query = "SELECT * FROM books WHERE isbn LIKE '%$isbn%'";
    $result = mysqli_query($conn, $query);
}
else 
    echo("Búsqueda fallida");
?>

    
<?php 

while ($row= mysqli_fetch_array($result)){?>

<div class="card mb-3 shadow mx-auto verticalMargin" style="max-width: 60%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src= "../<?php echo $row ["image"]?>" class="card-img-top rounded-start" alt="Portada libro <?php echo $row ["title"] ?>">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h3 class="card-title"><?php echo $row ["title"] ?></h3>
        <h5 class="card-text gray-text"><?php echo $row ["author_name"]. ' ' . $row['author_lastname'] ?></h5>
        <p class="card-text gray-text"><?php echo $row ["isbn"] ?></p>
        <p class="card-text"><?php echo $row ["description"] ?></p>

        <a href = "../applications/edit_book.php?isbn= <?php echo $row['isbn'] ?>" class="btn btn-secondary desktop-icons"> 
        Editar
        </a>
        <a href = "../applications/edit_book.php?isbn= <?php echo $row['isbn'] ?>" class="btn btn-secondary mobile-icons"> 
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
        window.location= "../view/books/delete.php?isbn=<?= $row['isbn']?>"
        Swal.fire(
          'Eliminado!',
          'El libro ha sido eliminado exitosamente.',
          'success'
        )
      }
    })
  }
</script>

<?php }
?>  

<?php include("../view/partials/footer.php")
?> 