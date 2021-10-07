<?php

    require "../index/connection.php";
    session_start();

    $id = $_GET['id'];
    $type = $_GET['type'];
    $username = $_SESSION['username'];

    $select = "INSERT INTO $type (accessory) VALUES ('$id')";
    $selectsql = mysqli_query($connection, $select);

    if (!$selectsql) {
        $_SESSION['selectfail'] = die(mysqli_error($connection));
        header("Location: http://localhost/inventory_management_system/recordkeep/withdrawfail.php");
    } else {
        header("Location: http://localhost/inventory_management_system/management/withdrawsuccess.php");
    }

?>