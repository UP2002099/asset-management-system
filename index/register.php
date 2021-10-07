<?php
    require "connection.php";

    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    $hashlogpass = hash('sha256', $password);

    $credential = "INSERT INTO login(username, password, email) VALUES ('$username', '$hashlogpass', '$email')";

    $result = mysqli_query($connection, $credential);

    if (!$result) {
        die("Query failed" . mysqli_error($connection));
    } else {
        header("Location: registersuccess.php");
    }

    mysqli_close($connection);
?>