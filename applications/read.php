<?php include ("../db.php");

if(!isset($_POST['search'])){
    $_POST['search'] = "";
    $search = $_POST['search'];
}

$search= $_POST['search'];

$query = "SELECT * FROM books WHERE author_name LIKE '%$search%' OR author_lastname LIKE '%$search%' OR isbn LIKE '%$search%'OR title LIKE '%$search%'";

$result = mysqli_query($conn,$query);


if (mysqli_num_rows($result) === 0) {
    $_SESSION['message'] = 'Libro no disponible';
    $_SESSION['message_type'] = 'warning';
    $_SESSION['message_title'] = 'Lo siento';
}


?>