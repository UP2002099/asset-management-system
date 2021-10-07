<?php
    require "../index/connection.php";
    session_start();
    
    if ($_POST['type']=="pc") {
        $username = $_SESSION["username"];
        $price = $_POST["price"];

        if (empty($_POST["newwarranty"])) {
            $warranty = $_POST["warranty"];
        } else {
            $warranty = $_POST["newwarranty"];
        }

        if (empty($_POST["newbrand"])) {
            $brand = $_POST["brand"];
        } else {
            $brand = $_POST["newbrand"];
        }

        $name = $_POST["name"];
        
        if (empty($_POST["newcolour"])) {
            $colour = " (" . strval($_POST["colour"]) . ")";
        } else {
            $colour = " (" . strval($_POST["newcolour"]) . ")";
        }
        $model = strval($_POST["model"]) . strval($colour);

        if (empty($_POST["newquantity"])) {
            $quantity = $_POST["quantity"];
        } else {
            $quantity = $_POST["newquantity"];
        }

        $serialnum = $_POST["serialnum"];

        $cpu_make = $_POST["cpu_make"];
        if (empty($_POST["newcpu_make"])) {
            $cpu_make = $_POST["cpu_make"];
        } else {
            $cpu_make = $_POST["newcpu_make"];
        }
        $cpu_model = $_POST["cpu_model"];

        if (empty($_POST["newgpu_make"])) {
            $gpu_make = $_POST["gpu_make"];
        } else {
            $gpu_make = $_POST["newgpu_make"];
        }

        $gpu_model = $_POST["gpu_model"];
        $storage_type = "1(" . strval($_POST["storage_type1"]) . ") 2(" . strval($_POST["storage_type2"]) . ")";
        $storage_cap = "1(" . strval($_POST["storage_cap1"]) . strval($_POST["storage_unit1"]) . ") 2(" . strval($_POST["storage_cap2"]) . strval($_POST["storage_unit2"]) . ")";
        $ram_size = $_POST["ram_size"] . $_POST["ram_unit"];
        $ram_speed = strval($_POST["ram_module"]) . " " .strval($_POST["ram_speed"]) . "MHz";

        $pc = "INSERT INTO pc(username, price, warranty, brand, name, model, serialnum, cpu_make, cpu_model, 
        gpu_make, gpu_model, storage_type, storage_cap, ram_size, ram_speed) 
        VALUES ('$username', '$price', '$warranty', '$brand', '$name', '$model', '$serialnum', '$cpu_make', '$cpu_model', 
        '$gpu_make', '$gpu_model', '$storage_type', '$storage_cap', '$ram_size', '$ram_speed')";

        for ($i=0; $i <= $quantity; $i++) {
            if ($i == $quantity) {
                break;
            } else {
                $addpc = mysqli_query($connection, $pc);

                if (!$addpc) {
                    $_SESSION['addfail'] = die(mysqli_error($connection));
                    header("Location: http://localhost/inventory_management_system/recordkeep/addfail.php");
                } else {
        
                }
            }
        }

        header("Location: http://localhost/inventory_management_system/recordkeep/addsuccess.php");

    } elseif ($_POST['type']=="laptop") {
        $username = $_SESSION["username"];
        $price = $_POST["price"];

        if (empty($_POST["newwarranty"])) {
            $warranty = $_POST["warranty"];
        } else {
            $warranty = $_POST["newwarranty"];
        }

        if (empty($_POST["newbrand"])) {
            $brand = $_POST["brand"];
        } else {
            $brand = $_POST["newbrand"];
        }

        $name = $_POST["name"];
        
        if (empty($_POST["newcolour"])) {
            $colour = " (" . strval($_POST["colour"]) . ")";
        } else {
            $colour = " (" . strval($_POST["newcolour"]) . ")";
        }

        $model = strval($_POST["model"]) . strval($colour);

        if (empty($_POST["newquantity"])) {
            $quantity = $_POST["quantity"];
        } else {
            $quantity = $_POST["newquantity"];
        }

        $screensize = $_POST["screensize"];
        if (empty($_POST["newscreensize"])) {
            $screensize = $_POST["screensize"];
        } else {
            $screensize = $_POST["newscreensize"];
        }

        $screenres = $_POST["screenres"];
        if (empty($_POST["newscreenres"])) {
            $screenres = $_POST["screenres"];
        } else {
            $screenres = $_POST["newscreenres"];
        }

        $serialnum = $_POST["serialnum"];

        $cpu_make = $_POST["cpu_make"];
        if (empty($_POST["newcpu_make"])) {
            $cpu_make = $_POST["cpu_make"];
        } else {
            $cpu_make = $_POST["newcpu_make"];
        }
        $cpu_model = $_POST["cpu_model"];

        if (empty($_POST["newgpu_make"])) {
            $gpu_make = $_POST["gpu_make"];
        } else {
            $gpu_make = $_POST["newgpu_make"];
        }

        $gpu_model = $_POST["gpu_model"];
        $storage_type = $_POST["storage_type"];
        $storage_cap = $_POST["storage_cap"] . $_POST["storage_unit"];
        $ram_size = $_POST["ram_size"] . $_POST["ram_unit"];
        $ram_speed = strval($_POST["ram_module"]) . " " .strval($_POST["ram_speed"]) . "MHz";

        $laptop = "INSERT INTO laptop(username, price, warranty, brand, name, screensize, screenres, model, serialnum, cpu_make, cpu_model, 
        gpu_make, gpu_model, storage_type, storage_cap, ram_size, ram_speed) 
        VALUES ('$username', '$price', '$warranty', '$brand', '$name', '$screensize', '$screenres', '$model', '$serialnum', '$cpu_make', '$cpu_model', 
        '$gpu_make', '$gpu_model', '$storage_type', '$storage_cap', '$ram_size', '$ram_speed')";
        
        for ($i=0; $i <= $quantity; $i++) {
            if ($i == $quantity) {
                break;
            } else {
                $addlaptop = mysqli_query($connection, $laptop);

                if (!$addlaptop) {
                    $_SESSION['addfail'] = die(mysqli_error($connection));
                    header("Location: http://localhost/inventory_management_system/recordkeep/addfail.php");
                } else {
        
                }
            }
        }

        header("Location: http://localhost/inventory_management_system/recordkeep/addsuccess.php");

    } elseif ($_POST['type']=="mischard") {
        $username = $_SESSION["username"];
        $price = $_POST["price"];

        if (empty($_POST["newwarranty"])) {
            $warranty = $_POST["warranty"];
        } else {
            $warranty = $_POST["newwarranty"];
        }

        if (empty($_POST["newquantity"])) {
            $quantity = $_POST["quantity"];
        } else {
            $quantity = $_POST["newquantity"];
        }

        $misctype = $_POST["misctype"];

        if (empty($_POST["newbrand"])) {
            $brand = $_POST["brand"];
        } else {
            $brand = $_POST["newbrand"];
        }

        $name = $_POST["name"];
        
        if (empty($_POST["newcolour"])) {
            $colour = " (" . strval($_POST["colour"]) . ")";
        } else {
            $colour = " (" . strval($_POST["newcolour"]) . ")";
        }

        $model = strval($_POST["model"]) . strval($colour);

        if (empty($_POST["newmisctype"])) {
            $misctype = $_POST["misctype"];
        } else {
            $misctype = $_POST["newmisctype"];
        }

        $serialnum = $_POST["serialnum"];

        $mischard = "INSERT INTO mischard(username, price, warranty, brand, name, misctype, model, serialnum) 
        VALUES ('$username', '$price', '$warranty', '$brand', '$name', '$misctype', '$model', '$serialnum')";
        $addmischard = mysqli_query($connection, $mischard);

        for ($i=0; $i <= $quantity; $i++) {
            if ($i == $quantity) {
                break;
            } else {
                $addmischard = mysqli_query($connection, $mischard);

                if (!$addmischard) {
                    $_SESSION['addfail'] = die(mysqli_error($connection));
                    header("Location: http://localhost/inventory_management_system/recordkeep/addfail.php");
                } else {
        
                }
            }
        }

        header("Location: http://localhost/inventory_management_system/recordkeep/addsuccess.php");

    }
?>