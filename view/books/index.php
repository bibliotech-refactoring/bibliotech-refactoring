<?php
require_once ("c://xampp/htdocs/bibliotech-refactoring/view/partials/head.php");

require_once ("c://xampp/htdocs/bibliotech-refactoring/view/partials/nav.php");
?>

<?php
    require_once("c://xampp/htdocs/bibliotech-refactoring/controller/BookController.php");

    $controller = new BookController();

    $result = $controller->getBooks();

?>

<?php if(isset($_SESSION['message'])) { 
   $msg = $_SESSION['message'];
   $type = $_SESSION['message_type'];
   $title = $_SESSION['message_title'];?>
 <script>
   Swal.fire({
     icon: '<?php echo $type; ?>',
     title: '<?php echo $title; ?>',
     text: '<?php echo $msg; ?>',
     confirmButtonColor: '#000000'
   })
 </script>

<?php session_unset(); }?>

<div class= "containerBook">


<?php 
if ($result):
?>

<?php
foreach($result as $book) :?>

<div class="card card-box-shadow"  style="width: 18rem;">

    <div>
      <a href="/bibliotech-refactoring/view/books/show.php?isbn=<?= $book['isbn']?>">
        <figure>
          <img src= "/bibliotech-refactoring/<?php echo $book ['image']?>" class="card-img-top" alt="Portada libro <?php echo $book ["title"] ?>">
          <div class="layer">
            <button  class="btn btn-light" type="submit" value="VER FICHA">VER FICHA</button>
          </div>
        </figure>
      </a>
    </div>


  <div class="card-body">
    <h3 class="card-title"><?php echo $book ['title'] ?></h3>
    <h5 class="card-text gray-text"><?php echo $book ['author_name'] . ' ' . $book['author_lastname'] ?></h5>
    <a href="/bibliotech-refactoring/view/books/show.php?isbn=<?= $book['isbn']?>" id= "moreInfo" class="btn btn-secondary">Ver Ficha</a>
  </div>
</div>
<?php endforeach; ?>
<?php else :?>
    <h2>No hay libros disponibles</h2>
<?php endif ;?>    
</div> 

<?php 
require_once ("c://xampp/htdocs/bibliotech-refactoring/view/partials/footer.php");
?>