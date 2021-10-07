<?php

    require "../index/connection.php";
    session_start();

    $type = $_GET["type"];    

    if ($type == "pc") {
        $username = $_SESSION["username"];
        $id = $_GET["id"];
        $price = $_GET["price"];
        $warranty = $_GET["warranty"];
        $brand = $_GET["brand"];
        $name = $_GET["name"];
        $model = $_GET["model"];
        $cpu_make = $_GET["cpu_make"];
        $cpu_model = $_GET["cpu_model"];
        $gpu_make = $_GET["gpu_make"];
        $gpu_model = $_GET["gpu_model"];
        $storage_type = $_GET["storage_type"];
        $storage_cap = $_GET["storage_cap"];
        $ram_size = $_GET["ram_size"];
        $ram_speed = $_GET["ram_speed"];

        $update = "UPDATE pc SET price = '$price', warranty = '$warranty', brand = '$brand', name = '$name', model = '$model' 
        , cpu_make = '$cpu_make', cpu_model = '$cpu_model', gpu_make = '$gpu_make', gpu_model = '$gpu_model'
        , storage_type = '$storage_type', storage_cap = '$storage_cap', ram_size = '$ram_size', ram_speed = '$ram_speed' WHERE db_id = '$id'";
        $updateout = mysqli_query($connection, $update);

        if (!$updateout) {
            $_SESSION['updatefail'] = die(mysqli_error($connection));
            //
            // ───────────────────────────── EDITFAIL IS NOT YET COMPLETED ─────
            //    
            header("Location: http://localhost/inventory_management_system/recordkeep/editfail.php");
        } else {
            header("Location: http://localhost/inventory_management_system/recordkeep/edithard.php");
        }

    } else if ($type == "laptop") {
        $username = $_SESSION["username"];
        $id = $_GET["id"];
        $price = $_GET["price"];
        $warranty = $_GET["warranty"];
        $screensize = $_GET["screensize"];
        $screenres = $_GET["screenres"];
        $brand = $_GET["brand"];
        $name = $_GET["name"];
        $model = $_GET["model"];
        $screensize = $_GET["screensize"];
        $screenres = $_GET["screenres"];
        $cpu_make = $_GET["cpu_make"];
        $cpu_model = $_GET["cpu_model"];
        $gpu_make = $_GET["gpu_make"];
        $gpu_model = $_GET["gpu_model"];
        $storage_type = $_GET["storage_type"];
        $storage_cap = $_GET["storage_cap"];
        $ram_size = $_GET["ram_size"];
        $ram_speed = $_GET["ram_speed"];

         $update = "UPDATE laptop SET price = '$price', warranty = '$warranty', brand = '$brand', name = '$name', model = '$model' 
        , cpu_make = '$cpu_make', cpu_model = '$cpu_model', gpu_make = '$gpu_make', gpu_model = '$gpu_model'
        , storage_type = '$storage_type', storage_cap = '$storage_cap', ram_size = '$ram_size', ram_speed = '$ram_speed' WHERE db_id = '$id'";
        $updateout = mysqli_query($connection, $update);

        if (!$updateout) {
            $_SESSION['updatefail'] = die(mysqli_error($connection));
            //
            // ───────────────────────────── EDITFAIL IS NOT YET COMPLETED ─────
            //    
            header("Location: http://localhost/inventory_management_system/recordkeep/editfail.php");
        } else {
            header("Location: http://localhost/inventory_management_system/recordkeep/edithard.php");
        }

    } else if ($type == "mischard") {
        $username = $_SESSION["username"];
        $id = $_GET["id"];
        $price = $_GET["price"];
        $warranty = $_GET["warranty"];
        $screensize = $_GET["screensize"];
        $screenres = $_GET["screenres"];
        $brand = $_GET["brand"];
        $name = $_GET["name"];
        $model = $_GET["model"];
        $serialnum = $_GET["serialnum"];
        
        $update = "UPDATE mischard SET price = '$price', warranty = '$warranty', brand = '$brand', name = '$name', model = '$model' 
        , serialnum = '$serialnum' WHERE db_id = '$id'";
        $updateout = mysqli_query($connection, $update);

        if (!$updateout) {
            $_SESSION['updatefail'] = die(mysqli_error($connection));
            //
            // ───────────────────────────── EDITFAIL IS NOT YET COMPLETED ─────
            //    
            header("Location: http://localhost/inventory_management_system/recordkeep/editfail.php");
        } else {
            header("Location: http://localhost/inventory_management_system/recordkeep/edithard.php");
        }

    } else if ($type == "genpurpose") {
        $username = $_SESSION["username"];
        $id = $_GET["id"];
        $price = $_GET["price"];
        $brand = $_GET["brand"];
        $name = $_GET["name"];
        $licenseduration = $_GET["licenseduration"];
        $licensenum = $_GET["licensenum"];
        
        $update = "UPDATE genpurpose SET price = '$price', brand = '$brand', name = '$name', licenseduration = '$licenseduration'
        , licensenum = '$licensenum' WHERE db_id = '$id'";
        $updateout = mysqli_query($connection, $update);

        if (!$updateout) {
            $_SESSION['updatefail'] = die(mysqli_error($connection));
            //
            // ───────────────────────────── EDITFAIL IS NOT YET COMPLETED ─────
            //    
            header("Location: http://localhost/inventory_management_system/recordkeep/editfail.php");
        } else {
            header("Location: http://localhost/inventory_management_system/recordkeep/editsoft.php");
        }

    } else if ($type == "opersystem") {
        $username = $_SESSION["username"];
        $id = $_GET["id"];
        $price = $_GET["price"];
        $brand = $_GET["brand"];
        $name = $_GET["name"];
        $licenseduration = $_GET["licenseduration"];
        $licensenum = $_GET["licensenum"];
        
        $update = "UPDATE opersystem SET price = '$price', brand = '$brand', name = '$name', licenseduration = '$licenseduration'
        , licensenum = '$licensenum' WHERE db_id = '$id'";
        $updateout = mysqli_query($connection, $update);

        if (!$updateout) {
            $_SESSION['updatefail'] = die(mysqli_error($connection));
            //
            // ───────────────────────────── EDITFAIL IS NOT YET COMPLETED ─────
            //    
            header("Location: http://localhost/inventory_management_system/recordkeep/editfail.php");
        } else {
            header("Location: http://localhost/inventory_management_system/recordkeep/editsoft.php");
        }

    } else if ($type == "utility") {
        $username = $_SESSION["username"];
        $id = $_GET["id"];
        $price = $_GET["price"];
        $brand = $_GET["brand"];
        $name = $_GET["name"];
        $licenseduration = $_GET["licenseduration"];
        $licensenum = $_GET["licensenum"];
        
        $update = "UPDATE utility SET price = '$price', brand = '$brand', name = '$name', licenseduration = '$licenseduration'
        , licensenum = '$licensenum' WHERE db_id = '$id'";
        $updateout = mysqli_query($connection, $update);

        if (!$updateout) {
            $_SESSION['updatefail'] = die(mysqli_error($connection));
            //
            // ───────────────────────────── EDITFAIL IS NOT YET COMPLETED ─────
            //    
            header("Location: http://localhost/inventory_management_system/recordkeep/editfail.php");
        } else {
            header("Location: http://localhost/inventory_management_system/recordkeep/editsoft.php");
        }

    } else if ($type == "miscsoft") {
        $username = $_SESSION["username"];
        $id = $_GET["id"];
        $price = $_GET["price"];
        $brand = $_GET["brand"];
        $name = $_GET["name"];
        $licenseduration = $_GET["licenseduration"];
        $licensenum = $_GET["licensenum"];
        
        $update = "UPDATE miscsoft SET price = '$price', brand = '$brand', name = '$name', licenseduration = '$licenseduration'
        , licensenum = '$licensenum' WHERE db_id = '$id'";
        $updateout = mysqli_query($connection, $update);

        if (!$updateout) {
            $_SESSION['updatefail'] = die(mysqli_error($connection));
            //
            // ───────────────────────────── EDITFAIL IS NOT YET COMPLETED ─────
            //    
            header("Location: http://localhost/inventory_management_system/recordkeep/editfail.php");
        } else {
            header("Location: http://localhost/inventory_management_system/recordkeep/editsoft.php");
        }

    }

?>