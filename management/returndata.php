<?php

    require "../index/connection.php";
    session_start();

    $id = $_GET['id'];
    $type = $_GET['type'];
    $username = $_SESSION['username'];

    $return = "UPDATE $type SET status = 'A', userholding = '' WHERE db_id = '$id'";
    $returnout = mysqli_query($connection, $return);

    if (!$returnout) {
        $_SESSION['returnfail'] = die(mysqli_error($connection));
        header("Location: http://localhost/inventory_management_system/management/returnfail.php");
    } else {
        header("Location: http://localhost/inventory_management_system/management/returnsuccess.php");
    }

?>