<?php
// connect. to database
require_once "db_connect.php";

$id = $_GET['media'];

$sql = "SELECT * FROM `library` WHERE id = {$id}";
$result = mysqli_query($connection, $sql);
$layout = "";


if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    //test with vardump for making sure the data is displayed

    //     var_dump($row);


    $layout = "
    <div class ='text-center  align-items-center my-5 px-5'> 
        <div class='card mx-auto text-center   rounded-3 text-light border-light' style='width: 30rem; ' id ='card'>
            <img src='{$row['image']}' class='card-img-top' alt='image'>
            <div class='card-body'>
                <h2 class='card-title'>{$row['title']}</h2>
                <p class='card-text'><em>{$row['author_first_Name']} {$row['author_last_name']}</em> </p>
                <hr>
                <p class='card-text'>ISBN : {$row['ISBN_code']}</p>
                <p class='card-text'>Publisher/Producer: {$row['publisher_name']}</p>
                <p class='card-text'>Publisher Address: {$row['publisher_address']}</p>
                <p class='card-text'>Pubblished in : {$row['publish_date']}</p>
                 <br>
                <p class='card-text'>Brief Description:<br>{$row['short_description']}</p>       
                <br>
                <br>
                <hr>
                <p class='card-text' style ='text-transform:uppercase;'><strong> {$row['status']}</strong> </p>
                <hr>
                <br>
                <a href='index.php' class='btn border-info  bg-gradient animate__animated  animate__fadeInUp'><i class='fa-solid fa-house' style='color: #1f7a6b;'></i></a>
                <br> 
                <br>
                </div>
        </div>
    </div>";
} else {
    echo "Book {$row['title']} not found.";
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <div class="container mx-auto animate__animated  cardDet 
    animate__flipInY">

        <h2 class="text-center display-3 my-5">MORE ABOUT...</h2>
        <?= $layout ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>