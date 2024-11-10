<?php


function imageUpload($image)
{
    if ($image['error'] == 4) {
        $imgName = "images/defeault.jpg";
        $message = "No picture has been selected";
    } else {
        $checkingImg = getimagesize($image['tmp_name']);
        $message = $checkingImg ? "Success" : "Failed";
    }

    if ($message == "Success") {


        $extens = strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));

        $imgName = uniqid("") . "." . $extens;

        $destination = "images/{$imgName}";

        move_uploaded_file($image["tmp_name"], $destination);
    }

    return [$imgName, $message];
}
