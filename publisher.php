<?php
// connection to database
require_once "db_connect.php";


if (isset($_GET['publisher'])) {

    $publisherName = $_GET['publisher'];
    $sql = "SELECT * FROM `library` WHERE `publisher_name` = '$publisherName'";
    $result = mysqli_query($connection, $sql);
    $layout = " ";

    if (mysqli_num_rows($result) > 0) {
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

        foreach ($rows as $row) {
            $layout .= "
    <div class = 'my-3 '>           
    <div class='card my-3 mx-auto text-center rounded-3 text-light border-light animate__animated  animate__fadeInLeft' style='width: 18rem;' id = 'card'>
      <img src='{$row['image']}' class='card-img-top' alt=''>
         <div class='card-body'>
       <br>
       <h5 class='card-title'>{$row['title']}</h5>
     
    <p class='card-text'><em>{$row['author_first_Name']} {$row['author_last_name']}</em> </p>
<hr>
    <p class='card-text'><strong>Publisher/Producer: </strong><br> {$row['publisher_name']}</p>

    <hr>
    <p class='card-text'>{$row['type']}</p>
  </div>
</div>
    </div>";
        }
    } else {
        $layout = "<p class= 'text-center'>Sorry, no media found </p>";
    }
} else {
    echo  "Something went wrong, try later";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search by publisher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <div class="container-fluid text-center">
        <h1 class="display-4 mt-3 animate__animated  animate__fadeIn">Media created by same Publisher</h1>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
            <?= $layout ?>



        </div>

        <a href='index.php' class='btn border-info bg-gradient animate__animated  animate__fadeInUp'><i class='fa-solid fa-house' style='color: whitesmoke;'></i></a>
        <br>
        <br>
        <br>

    </div>
</body>

</html>