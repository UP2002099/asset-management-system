<?php
    require "connection.php";

    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $hashlogpass = hash('sha256', $password);

    $sql2 = "SELECT * FROM login WHERE username=? AND password=?";
    $stmt2 = mysqli_prepare($connection, $sql2);
    mysqli_stmt_bind_param($stmt2, "ss", $username, $hashlogpass);
        //"ss" for string. first s = $username, second s = $hashlogpass. prevent sql injection
    mysqli_execute($stmt2);
    $result_user = mysqli_stmt_get_result($stmt2);
    if ($result_user->num_rows == 1) {
        session_start();
        $row = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
        $_SESSION['username'] = $row['username'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['status'] = $row['status'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        header("Location: http://localhost/inventory_management_system/dashboard/homepage.php");
    } else {
        header("Location: landing.php");
    }

?>