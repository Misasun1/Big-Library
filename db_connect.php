<?php

try {
    $host = '173.212.235.205';
    $user = 'misacodefactory_root';
    $password = "u+aY6ox;lMmH";
    $database = 'misacodefactory_big_library';

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
