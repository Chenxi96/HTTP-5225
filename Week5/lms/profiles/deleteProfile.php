<?php

    include('../connect.php');
    include('loginFunction.php');

    $query = 'DELETE FROM users WHERE id = "' . $_SESSION['id'] .'" ';
    mysqli_query($connect, $query);
    session_destroy();
    header('Location: ../index.php');