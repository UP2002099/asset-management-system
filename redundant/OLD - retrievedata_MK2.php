<?php

    require "../index/connection.php";

    $pc = mysqli_query($connection, "SELECT * FROM pc")or die(mysqli_error($connection));
    $arrval = array();

    $i=1;
    while ($row = mysqli_fetch_array($pc)) {
        $listrow = array(
            'db_id' => $i,
            'status' => $row['status'],
            'brand' => $row['brand'],
            'name' => $row['name'],
            'model' => $row['model'],
            'quantity' => $row['quantity'],
            'warranty' => $row['warranty'],
            'cpu_make' => $row['cpu_make'],
            'cpu_model' => $row['cpu_model'],
            'gpu_make' => $row['gpu_make'],
            'gpu_model' => $row['gpu_model'],
            'storage_type' => $row['storage_type'],
            'storage_cap' => $row['storage_cap'],
            'ram_size' => $row['ram_size'],
            'ram_speed' => $row['ram_speed'],
            'timestamp' => $row['timestamp']
        );

        array_push($arrval, $listrow);

        $i++;

    }
        echo json_encode($arrval);

mysqli_close($connection);

?>