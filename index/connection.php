<?php
    $connection = mysqli_connect("localhost", "root", "", "ims");

    if (mysqli_connect_errno()) {
        echo "Cannot connect to servers. Please try again later.". mysqli_connect_error();
        
    }
    mysqli_set_charset($connection, 'utf8');
?>