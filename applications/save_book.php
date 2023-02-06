<?php include("../db.php");

if (isset($_POST['save_book'])) {

  $isbn = isset($_POST['isbn']) ? $_POST['isbn'] : null;

  $title = $_POST['title'];
  $author_name = $_POST['author_name'];

  $author_lastName = $_POST['author_lastname'];
  $description = $_POST['description'];

  $image_name = basename($_FILES['image']['name']);
  $image_file = $_FILES['image']['tmp_name'];

  $directory_route = '../assets/img/' . $image_name;
  $db_image_route = 'assets/img/' . $image_name;

  if (!is_numeric($isbn)){
    $_SESSION['message'] = 'ISBN debe contener solo numeros.';
    $_SESSION['message_type'] = 'error';
    $_SESSION['message_title'] = 'Lo siento';

  } else{

    $result = $conn->query("SELECT EXISTS (SELECT * FROM books WHERE isbn='$isbn');");
    $row=mysqli_fetch_row($result);
    
    if ($row[0] == "1"){
      $_SESSION['message'] = 'El ISBN ya existe, agrega un ISBN direrente.';
      $_SESSION['message_type'] = 'error';
      $_SESSION['message_title'] = 'Lo siento';
      
    }else{
      $query = "INSERT INTO books (isbn, title, author_name, author_lastname, description, image) VALUES ('$isbn','$title','$author_name','$author_lastName','$description','$db_image_route')";
      $result = mysqli_query($conn, $query);
      move_uploaded_file($image_file, $directory_route);
      $_SESSION['message'] = 'Libro agregado exitosamente';
      $_SESSION['message_type'] = 'success';
      $_SESSION['message_title'] = 'Buen trabajo';
    }
  }
  header("Location: /bibliotech");

}