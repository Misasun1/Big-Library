<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>

    <div class="container text-center text-light my-3 mx-auto ">


        <h1 class="display-3 animate__animated  animate__fadeIn">Welcome to Literary Oasis</h1>

        <form action="index.php" method="post" class="formWelc w-3 ">

            <div class="mb-3 text-center">
                <label for="first_name" class="form-label "><em><strong>First name</strong></em></label>
                <input type="text" id="first_name" name="first_name" class="form-control text-center rounded-4 border-light animate__animated animate__bounceIn" placeholder="insert first name">
            </div>
            <br>
            <div class="mb-3 text-center">
                <label for="last_name" class="form-label "><em><strong>Last name</strong></em></label>
                <input type="text" id="last_name" name="last_name" class="form-control text-center rounded-4 border-light animate__animated animate__bounceIn" placeholder="Insert last name">
            </div>
            <br>

            <div class="mb-3 text-center">
                <label for="username" class="form-label "><em><strong>Username</strong></em></label>
                <input type="text" id="username" name="username" class="form-control text-center rounded-4 border-light animate__animated animate__bounceIn" placeholder="choose an username">
            </div>
            <br>

            <div class="mb-3 text-center">
                <label for="password" class="form-label "><em><strong>Password</strong></em></label>
                <input type="password" id="password" name="password" class="form-control text-center rounded-4 border-light animate__animated animate__bounceIn" placeholder="choose a password">
            </div>
            <br>

            <div class="">
                <input type="submit" class="btn  border-info  bg-gradient text-light animate__animated  animate__fadeInUp" name="create_user" value="Sign In">
            </div>
            <br>
            <h5> OR</h5>
            <br>
            <div class="">
                <input type="submit" class="btn  border-info  bg-gradient text-light animate__animated  animate__fadeInUp" name="guest_user" value="Continue as Guest">
            </div>

        </form>
        <br>
        <br>
    </div>


</body>

</html>