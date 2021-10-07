<?php
require "../index/connection.php";

    $pc = "SELECT db_id, status, brand, name, model, warranty, cpu_make, 
        cpu_model, gpu_make, gpu_model, storage_type, storage_cap, ram_size, 
        ram_speed, timestamp, userholding, price FROM pc";
    
    $pcresult = $connection->query($pc);
    $arr_pc = [];
    if ($pcresult->num_rows > 0) {
        $arr_pc = $pcresult->fetch_all(MYSQLI_ASSOC);
    }

// ====================================================================================

    $laptop = "SELECT db_id, status, brand, name, screensize, screenres, 
        model, warranty, cpu_make,  cpu_model, gpu_make, gpu_model, 
        storage_type, storage_cap, ram_size, ram_speed, 
        timestamp, userholding, price FROM laptop";

    $laptopresult = $connection->query($laptop);
    $arr_laptop = [];
    if ($laptopresult->num_rows > 0) {
        $arr_laptop = $laptopresult->fetch_all(MYSQLI_ASSOC);
    }

// ====================================================================================

    $mischard = "SELECT db_id, status, brand, name, misctype, 
        model, warranty, serialnum, timestamp, 
        userholding, price FROM mischard";

    $mischardresult = $connection->query($mischard);
    $arr_mischard = [];
    if ($mischardresult->num_rows > 0) {
        $arr_mischard = $mischardresult->fetch_all(MYSQLI_ASSOC);
    }

//
// ───────────────────────────────────────────────── DONT FORGET TO ADD PRICE ─────
//

    $genpurpose = "SELECT db_id, status, brand, name, 
        licenseduration, licensenum, timestamp, 
        userholding, price FROM genpurpose";

    $genpurposeresult = $connection->query($genpurpose);
    $arr_genpurpose = [];
    if ($genpurposeresult->num_rows > 0) {
        $arr_genpurpose = $genpurposeresult->fetch_all(MYSQLI_ASSOC);
    }

// ====================================================================================

    $opersystem = "SELECT db_id, status, brand, name, 
        licenseduration, licensenum, timestamp, 
        userholding, price FROM opersystem";

    $opersystemresult = $connection->query($opersystem);
    $arr_opersystem = [];
    if ($opersystemresult->num_rows > 0) {
        $arr_opersystem = $opersystemresult->fetch_all(MYSQLI_ASSOC);
    }

// ====================================================================================

    $utility = "SELECT db_id, status, brand, name, 
        licenseduration, licensenum, timestamp, 
        userholding, price FROM utility";

    $utilityresult = $connection->query($utility);
    $arr_utility = [];
    if ($utilityresult->num_rows > 0) {
        $arr_utility = $utilityresult->fetch_all(MYSQLI_ASSOC);
    }

// ====================================================================================

    $miscsoft = "SELECT db_id, status, brand, name, 
        licenseduration, licensenum, timestamp, 
        userholding, price FROM miscsoft";

    $miscsoftresult = $connection->query($miscsoft);
    $arr_miscsoft = [];
    if ($miscsoftresult->num_rows > 0) {
        $arr_miscsoft = $miscsoftresult->fetch_all(MYSQLI_ASSOC);
    }

?>