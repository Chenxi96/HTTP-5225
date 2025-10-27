<?php
    $connect = mysqli_connect(
        'localhost', // URL
        'root', // Username
        'root', // Password
        'programs' // Database Name
    );

    if(!$connect) {
        die('Connection Failed: ' . mysqli_connect_error());
    }