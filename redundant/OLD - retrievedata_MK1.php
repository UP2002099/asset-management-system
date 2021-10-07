<?php
    require "../index/connection.php";
    session_start();    

    mysqli_set_charset($connection, 'utf8');

    $pc = "SELECT * FROM pc";
    $pcout = mysqli_query($connection, $pc);
    if (mysqli_num_rows($pcout) > 0) {
        while ($row = mysqli_fetch_assoc($pcout)) {
            echo $row['db_id'];
            echo $row['status'];
            echo $row['brand'];
            echo $row['name'];
            echo $row['db_id'];
            echo $row['quantity'];
            echo $row['warranty'];
            echo $row['cpu_make'];
            echo $row['cpu_model'];
            echo $row['gpu_make'];
            echo $row['gpu_model'];
            echo $row['storage_type'];
            echo $row['storage_cap'];
            echo $row['ram_size'];
            echo $row['ram_speed'];
            echo $row['timestamp'];
            }
            // $_SESSION['db_id'] = $row['db_id'];
            // $_SESSION['status'] = $row['status'];
            // $_SESSION['brand'] = $row['brand'];
            // $_SESSION['name'] = $row['name'];
            // $_SESSION['model'] = $row['db_id'];
            // $_SESSION['quantity'] = $row['quantity'];
            // $_SESSION['warranty'] = $row['warranty'];
            // $_SESSION['cpu_make'] = $row['cpu_make'];
            // $_SESSION['cpu_model'] = $row['cpu_model'];
            // $_SESSION['gpu_make'] = $row['gpu_make'];
            // $_SESSION['gpu_model'] = $row['gpu_model'];
            // $_SESSION['storage_type'] = $row['storage_type'];
            // $_SESSION['storage_cap'] = $row['storage_cap'];
            // $_SESSION['ram_size'] = $row['ram_size'];
            // $_SESSION['ram_speed'] = $row['ram_speed'];
            // $_SESSION['timestamp'] = $row['timestamp'];
    }

?>