<?php
require_once "db_connect.php";



if (isset($_GET['search'])) {


    $searchBox = ($_GET['search_box']);


    $sqlOne = "SELECT * FROM `library` WHERE `title` LIKE '%$searchBox%' OR `author_first_Name` LIKE '%$searchBox%' OR `author_last_name` LIKE '%$searchBox%'";

    $result = mysqli_query($connection, $sqlOne);

    $displaySearch = "";


    if (mysqli_num_rows($result) > 0) {
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);



        foreach ($rows as $row) {
            $displaySearch .= "
        <div class = 'my-3 '> 
        <div class='card my-3 mx-auto text-center rounded-2 text-light border-light' style='width: 18rem;' id ='card'>
      <img src='{$row['image']}' class='card-img-top' alt='Book cover of {$row['title']}'>
      <br>
       <h5 class='card-title'>{$row['title']}</h5>
    
    <p class='card-text'><em>{$row['author_first_Name']} {$row['author_last_name']}</em> </p>
      <div class='card-body'>
      <hr>
        <p class='card-text'>{$row['type']}</p>
      </div>
    </div>
        </div>";
        }
    } else {
        $displaySearch = "<p class= 'text-center'>Sorry, no media found </p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="container text-center">
        <h1 class="display-2 pt-3"> Results from search</h1>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">

            <?= $displaySearch ?>


        </div>
        <a href='index.php' class='btn border-info bg-gradient mb-5'><i class='fa-solid fa-house' style='color: #1f7a6b;'></i></a>

    </div>

</body>

</html>