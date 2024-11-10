<?php
// connection to database
require_once "db_connect.php";

$displayUser = "";
// for user welcoming
// for subscribed user
if (isset($_POST['create_user'])) {
    $firstName = ($_POST['first_name']);
    $lastName = ($_POST['last_name']);
    $username = ($_POST['username']);
    $password = ($_POST['password']);




    $displayUser = "Welcome {$username}!";
}

// for guest user
if (isset($_POST['guest_user'])) {
    $firstName = ($_POST['first_name']);
    $lastName = ($_POST['last_name']);
    $username = ($_POST['username']);
    $password = ($_POST['password']);



    $displayUser = "Welcome User!";
}


$sql = "SELECT * FROM `library`";
$result = mysqli_query($connection, $sql);
$layout = "";

if (mysqli_num_rows($result) > 0) {
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);


    // I do not why it is not working when applying the path imges/{$row['image']} and it blocks the other images to be displayed


    foreach ($rows as $row) {
        $layout .= "
    <div > 
    <div class='card my-3 mx-auto text-center rounded-3 text-light border-light animate__animated animate__fadeInUpBig' style='width: 18rem;' id ='card'>
  <img src='{$row['image']}' class='card-img-top' alt='Book cover of {$row['title']}'>
  <div class='card-body'>
    <h5 class='card-title px-2'>{$row['title']}</h5>
    <br>
    <a href='publisher.php?publisher={$row['publisher_name']}' class='btn border-secondary-bottom bg-gradient text-light' title = 'Click to see more Media by the same publisher/producer'>{$row['publisher_name']}</a>
    <p class='card-text'>{$row['type']}</p>
    <a href='details.php?media={$row['id']}' class='btn border-info   bg-gradient'>more</a>
  </div>
</div>
    </div>";
    }
} else {
    $layout = 'No media is available';
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Literary Oasis</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>

    <div class="container-fluid  text-center">

        <!-- navbar -->
        <div class="container-fluid  d-flex justify-content-around align-items-center mx-auto animate__animated  animate__fadeInDown" id="nav">

            <div data-tilt data-tilt-glare data-tilt-max-glare="0.8" style="border-radius:47% ;"><img src="images/Logo_L.O.png" alt="logo L.O." id="logo"></div>

            <a class=" btn border-info-bottom bg-gradient " href="index.php"><i class="fa-solid fa-house" style="color: #1f7a6b;"></i></a>
            <a href="about.php" class="btn border-secondary-bottom bg-gradient ">About Us</a>
            <a href="welcome.php" class="btn border-secondary-bottom bg-gradient ">Register</a>


            <div class="text-light animate__animated animate__bounceIn">
                <em><strong>

                        <?= $displayUser ?>

                    </strong></em>
            </div>


            <form method="GET" action="search.php">
                <input type="text" placeholder="Search by title or author" name="search_box" class="rounded-4 border-light">

                <input type="submit" class="btn border-light bg-gradient text-light" name="search" value="Search">
                <i class="fa-solid fa-magnifying-glass text-light"></i>
            </form>
        </div>

        <a href="create.php" class="btn border-light bg-gradient mt-5 mb-3 animate__animated  animate__fadeInDown" id="btnDon">Donate Knowledge</a>
        <br>
        <br>

        <h1 class="display-2 animate__animated  animate__fadeIn">LIST of MEDIA</h1>


        <!-- cards media -->

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">


            <?= $layout ?>

        </div>
        <div class="footer animate__animated  animate__fadeInUp">
            <div class="social d-flex justify-content-around py-3 text-light text-opacity-75">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-square-instagram"></i>
                <i class="fa-brands fa-twitter"></i>

            </div>
            <div class="py-3 text-light text-opacity-50">All rights reserved Literary Oasis &copy; 2024</div>

        </div>

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.1/vanilla-tilt.min.js" integrity="sha512-wC/cunGGDjXSl9OHUH0RuqSyW4YNLlsPwhcLxwWW1CR4OeC2E1xpcdZz2DeQkEmums41laI+eGMw95IJ15SS3g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>