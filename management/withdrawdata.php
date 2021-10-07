<?php

    require "../index/connection.php";
    session_start();

    $id = $_GET['id'];
    $type = $_GET['type'];
    $username = $_SESSION['username'];

    $withdraw = "UPDATE $type SET status = 'N/A', userholding = '$username' WHERE db_id = '$id'";
    $withdrawout = mysqli_query($connection, $withdraw);

    if (!$withdrawout) {
        $_SESSION['withdrawfail'] = die(mysqli_error($connection));
        header("Location: http://localhost/inventory_management_system/management/withdrawfail.php");
    } else {
        header("Location: http://localhost/inventory_management_system/management/withdrawsuccess.php");
    }

?>