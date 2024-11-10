<?php

try {
    $host = 'localhost';
    $user = 'root';
    $password = "";
    $database = 'be23_exam4_mariamisaowusu_biglibrary';

    $connection = mysqli_connect(
        $host,
        $user,
        $password,
        $database
    );

    // echo 'Successful connection';

} catch (mysqli_sql_exception $excep) {
    echo "connection to database failed" . $excep->getMessage();
}
