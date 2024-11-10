<?php
// connection both to database and file_upload
require_once "db_connect.php";
require_once "file_upload.php";


if (isset($_POST['create_media'])) {


    $title = ($_POST['title']);
    $image = imageUpload($_FILES['image']);
    $ISBN_code = ($_POST['ISBN_code']);
    $type = ($_POST['type']);
    $author_first_Name = ($_POST['author_first_Name']);
    $author_last_name = ($_POST['author_last_name']);
    $publisher_name = ($_POST['publisher_name']);
    $publisher_address = ($_POST['publisher_address']);
    $publish_date = ($_POST['publish_date']);
    $short_description = ($_POST['short_description']);
    // it is not necessary in the form, because it depends to the librarian to update the status of availabilty in the database 
    // $status = ($_POST['status']);,'$status', `status`


    // query to insert new data into the database
    $sql = "INSERT INTO `library`(`title`, `image`, `ISBN_code`, `type`, `author_first_Name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `short_description`) VALUES ('$title','$image[0]','$ISBN_code','$type','$author_first_Name','$author_last_name','$publisher_name','$publisher_address','$publish_date', '$short_description')";

    // strg + enter button (GO)
    $result = mysqli_query($connection, $sql);

    // to test
    // var_dump($result);



    if ($result) {

        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Success!</strong>Thank you for adding more knowledge to the world! A new book/media has been updated. $image[1]
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
    } else {


        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
<strong>Ops!!</strong>Something went wrong.
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
    }
    header("refresh: 3; url=index.php");
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload new</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>


    <div class="container my-5">

        <h1 class="text-center display-4 my-5 animate__animated  animate__fadeIn"> REGISTER and UPLOAD new MEDIA</h1>


        <div class="form-cont d-flex-wrap justify-content-around">

            <!--  form for Books -->
            <div class="form-wrapper animate__animated  animate__fadeInLeft form1">
                <h3 class="text-center animate__animated  animate__flipInX">Upload BOOKS</h3>


                <form method="POST" enctype="multipart/form-data" class="text-light ">

                    <!-- title,first and last name author   -->

                    <div class="mb-3 text-center">
                        <label for="title" class="form-label "><em><strong> Title</strong></em></label>
                        <input type="text" id="title" name="title" class="form-control text-center rounded-4 border-light" placeholder="Insert title" required>
                    </div>
                    <br>
                    <div class="mb-3 text-center">
                        <label for="author_first_Name" class="form-label  "><em><strong>First Name</strong></em></label>
                        <input type="text" id="author_first_Name" name="author_first_Name" class="form-control text-center rounded-4 border-light"
                            placeholder="Insert first name author"
                            required>
                    </div>
                    <br>

                    <div class="mb-3 text-center">
                        <label for="author_last_name" class="form-label  "><em><strong>Last Name</strong></em></label>
                        <input type="text" id="author_last_name" name="author_last_name" class="form-control text-center rounded-4 border-light"
                            placeholder="Insert last name author"
                            required>
                    </div>

                    <br>

                    <!-- serial code and type-media -->

                    <div class="mb-3 text-center">
                        <label for="ISBN_code" class="form-label  "><em><strong>ISBN Code</strong></em></label>
                        <input type="text" id="ISBN_code" name="ISBN_code" class="form-control text-center rounded-4 border-light"
                            placeholder="Insert ISBN code"
                            required>
                    </div>

                    <br>

                    <div class="mb-3 text-center">
                        <label for="type" class="form-label  "><em><strong>Type of media</strong></em></label>
                        <input type="text" id="type" name="type" class="form-control text-center rounded-4 border-light"
                            placeholder="Insert type of media (ex. Book,Ebook, etc..)"
                            required>
                    </div>

                    <br>


                    <!--  publisher (name,address,year) -->

                    <div class="mb-3 text-center">
                        <label for="publisher_name" class="form-label  "><em><strong>Publisher Name</strong></em></label>
                        <input type="text" id="publisher_name" name="publisher_name" class="form-control text-center rounded-4 border-light"
                            placeholder="Insert publisher name">
                    </div>

                    <br>

                    <div class="mb-3 text-center">
                        <label for="publisher_address" class="form-label  "><em><strong>Publisher Location</strong></em></label>
                        <input type="text" id="publisher_address" name="publisher_address" class="form-control text-center rounded-4 border-light"
                            placeholder="Insert publisher location">
                    </div>

                    <br>

                    <div class="mb-3 text-center">
                        <label for="publish_date" class="form-label  "><em><strong>Publication Year</strong></em></label>
                        <input type="text" id="publish_date" name="publish_date" class="form-control text-center rounded-4 border-light"
                            placeholder="Insert publication year">
                    </div>

                    <br>
                    <br>


                    <!-- description -->

                    <div class="mb-3 text-center">
                        <label for="short_description" class="form-label  "><em><strong>Brief Description</strong></em></label>
                        <input type="text" id="short_description" name="short_description" class="form-control text-center rounded-4 border-light"
                            placeholder="Insert a brief description">

                    </div>

                    <br>


                    <!-- image file uploader -->
                    <div class="mb-3 text-center">
                        <label for="image" class="form-label "><em><strong>Upload an image cover</strong></em></label>

                        <input type="file" id="image" name="image" class="form-control rounded-4 border-light">
                    </div>

                    <!-- <p class="text-center">OR</p>

                    <div class="mb-3 text-center">
                        <label for="image" class="form-label "><em><strong>Paste image cover address</strong></em></label>

                        <input type="text" id="image" name="image" class="form-control text-center rounded-4 border-light">
                    </div> -->


                    <br>


                    <div class="text-center">
                        <input type="submit" class="btn border-info  bg-gradient text-light " name="create_media" value="Submit">

                    </div>

                </form>
            </div>
            <br>


            <div class="form-wrapper animate__animated  animate__fadeInLeft  form2">

                <!-- form for uploading DVD, CDs, etc -->

                <h3 class="text-center animate__animated  animate__flipInX">Upload DVD/CDs</h3>


                <form method="POST" enctype="multipart/form-data" class="text-light ">

                    <!-- title,first and last name input  -->
                    <div class="mb-3 text-center">
                        <label for="title" class="form-label "><em><strong>Title</strong></em></label>
                        <input type="text" id="title" name="title" class="form-control text-center rounded-4 border-light" placeholder="Insert title" required>
                    </div>
                    <br>

                    <div class="mb-3 text-center">
                        <label for="author_first_Name" class="form-label  "><em><strong>First Name</strong></em></label>
                        <input type="text" id="author_first_Name" name="author_first_Name" class="form-control text-center rounded-4 border-light"
                            placeholder="Insert director/producer first name"
                            required>
                    </div>

                    <br>

                    <div class="mb-3 text-center">
                        <label for="author_last_name" class="form-label  "><em><strong>Last Name</strong></em></label>
                        <input type="text" id="author_last_name" name="author_last_name" class="form-control text-center rounded-4 border-light"
                            placeholder="Insert director/producer last name"
                            required>
                    </div>

                    <br>

                    <!-- serial code and type-media -->
                    <div class="mb-3 text-center">
                        <label for="ISBN_code" class="form-label  "><em><strong>Serial Code</strong></em></label>
                        <input type="text" id="ISBN_code" name="ISBN_code" class="form-control text-center rounded-4 border-light"
                            placeholder="Insert serial code"
                            required>
                    </div>

                    <br>

                    <div class="mb-3 text-center">
                        <label for="type" class="form-label  "><em><strong>Type of media</strong></em></label>
                        <input type="text" id="type" name="type" class="form-control text-center rounded-4 border-light"
                            placeholder="Insert type of media (ex. CD,DVD,etc..)"
                            required>
                    </div>

                    <br>

                    <!--  publisher (name,address,year) -->

                    <div class="mb-3 text-center">
                        <label for="publisher_name" class="form-label  "><em><strong>Film/Music Label Studio</strong></em></label>
                        <input type="text" id="publisher_name" name="publisher_name" class="form-control text-center rounded-4 border-light"
                            placeholder="Insert film/music label studio  name">
                    </div>

                    <br>

                    <div class="mb-3 text-center">
                        <label for="publisher_address" class="form-label  "><em><strong>Film/Music Label Studio Location</strong></em></label>
                        <input type="text" id="publisher_address" name="publisher_address" class="form-control text-center rounded-4 border-light"
                            placeholder="Insert film/music label studio location">
                    </div>

                    <br>

                    <div class="mb-3 text-center">
                        <label for="publish_date" class="form-label  "><em><strong>Publication Year</strong></em></label>
                        <input type="text" id="publish_date" name="publish_date" class="form-control text-center rounded-4 border-light"
                            placeholder="Insert publication year">
                    </div>

                    <br>


                    <!-- description -->

                    <div class="mb-3 text-center">
                        <label for="short_description" class="form-label  "><em><strong>Description</strong></em></label>
                        <input type="text" id="short_description" name="short_description" class="form-control text-center rounded-4 border-light"
                            placeholder="Insert a brief description">
                    </div>

                    <br>
                    <br>


                    <!-- image file uploader -->

                    <div class="mb-3 text-center">
                        <label for="image" class="form-label "><em><strong>Select an image cover</strong></em></label>


                        <input type="file" id="image" name="image" class="form-control text-center rounded-4 border-light">
                    </div>

                    <!-- <p class="text-center">OR</p>

                    <div class="mb-3 text-center">
                        <label for="image" class="form-label "><em><strong>Paste image cover address</strong></em></label>

                     
                        <input type="text" id="image" name="image" class="form-control text-center rounded-4 border-light">
                    </div> -->



                    <br>
                    <div class="text-center">
                        <input type="submit" class="btn border-info  bg-gradient text-light " name="create_media" value="Submit">

                    </div>


                </form>
            </div>
        </div>

        <br>
        <br>
        <div class="text-center">
            <a href="index.php" class="btn border-info bg-gradient my-5 mb-5 animate__animated  animate__fadeInUp"><i class="fa-solid fa-house" style="color: #2c8168;"></i></a>
        </div>

    </div>





</body>

</html>