<?php
    $ipserver = 'localhost';
    $usernameSQL = 'root';
    $passwordSQL = '';
    $database = 'demo-php';

    $connect = new mysqli(
        $ipserver,
        $usernameSQL,
        $passwordSQL,
        $database
    );

    // if($connect->connect_error) {
    //     die('Connect Error: ' . $connect->connect_error);
    // }
    // else {
    //     echo ' <br> <br> Connect Success!!!!';
    // }
?>