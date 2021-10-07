<?php
require "../index/connection.php";

    $pc = "SELECT db_id, brand, name, model FROM pc";
    
    $pcresult = $connection->query($pc);
    $arr_pc = [];
    if ($pcresult->num_rows > 0) {
        $arr_pc = $pcresult->fetch_all(MYSQLI_ASSOC);
    }

    $laptop = "SELECT db_id, brand, name, model FROM laptop";

    $laptopresult = $connection->query($laptop);
    $arr_laptop = [];
    if ($laptopresult->num_rows > 0) {
        $arr_laptop = $laptopresult->fetch_all(MYSQLI_ASSOC);
    }

?>