<?php
    require "../index/connection.php";
    session_start();

    if ($_POST['type']=="genpurpose") {
        $username = $_SESSION["username"];
        $price = $_POST["price"];

        if (empty($_POST["newbrand"])) {
            $brand = $_POST["brand"];
        } else {
            $brand = $_POST["newbrand"];
        }

        if (empty($_POST["newquantity"])) {
            $quantity = $_POST["quantity"];
        } else {
            $quantity = $_POST["newquantity"];
        }

        $name = $_POST["name"];

        $licenseduration = $_POST["licenseduration"];
        if (empty($_POST["newlicenseduration"])) {
            $licenseduration = $_POST["licenseduration"];
        } else {
            $licenseduration = $_POST["newlicenseduration"];
        }

        $licensenum = $_POST["licensenum"];

        $genpurpose = "INSERT INTO genpurpose(username, price, brand, name, licenseduration, licensenum) 
        VALUES ('$username', '$price', '$brand', '$name', '$licenseduration', '$licensenum')";

        for ($i=0; $i <= $quantity; $i++) {
            if ($i == $quantity) {
                break;
            } else {
                $addgenpurpose = mysqli_query($connection, $genpurpose);

                if (!$addgenpurpose) {
                    $_SESSION['addfail'] = die(mysqli_error($connection));
                    header("Location: http://localhost/inventory_management_system/recordkeep/addfail.php");
                } else {
        
                }
            }
        }

        header("Location: http://localhost/inventory_management_system/recordkeep/addsuccess.php");

    } elseif ($_POST['type']=="opersystem") {
        $username = $_SESSION["username"];
        $price = $_POST["price"];

        if (empty($_POST["newbrand"])) {
            $brand = $_POST["brand"];
        } else {
            $brand = $_POST["newbrand"];
        }

        if (empty($_POST["newquantity"])) {
            $quantity = $_POST["quantity"];
        } else {
            $quantity = $_POST["newquantity"];
        }

        $name = $_POST["name"];
        $licenseduration = $_POST["licenseduration"];
        $licensenum = $_POST["licensenum"];

        $opersystem = "INSERT INTO opersystem(username, price, brand, name, licenseduration, licensenum) 
        VALUES ('$username', '$price', '$brand', '$name', '$licenseduration', '$licensenum')";

        for ($i=0; $i <= $quantity; $i++) {
            if ($i == $quantity) {
                break;
            } else {
                $addopersystem = mysqli_query($connection, $opersystem);

                if (!$addopersystem) {
                    $_SESSION['addfail'] = die(mysqli_error($connection));
                    header("Location: http://localhost/inventory_management_system/recordkeep/addfail.php");
                } else {
        
                }
            }
        }

        header("Location: http://localhost/inventory_management_system/recordkeep/addsuccess.php");

    } elseif ($_POST['type']=="utility") {
        $username = $_SESSION["username"];
        $price = $_POST["price"];

        if (empty($_POST["newbrand"])) {
            $brand = $_POST["brand"];
        } else {
            $brand = $_POST["newbrand"];
        }

        if (empty($_POST["newquantity"])) {
            $quantity = $_POST["quantity"];
        } else {
            $quantity = $_POST["newquantity"];
        }

        $name = $_POST["name"];
        $licenseduration = $_POST["licenseduration"];
        $licensenum = $_POST["licensenum"];

        $utility = "INSERT INTO utility(username, price, brand, name, licenseduration, licensenum) 
        VALUES ('$username', '$price', '$brand', '$name', '$licenseduration', '$licensenum')";

        for ($i=0; $i <= $quantity; $i++) {
            if ($i == $quantity) {
                break;
            } else {
                $addutility = mysqli_query($connection, $utility);

                if (!$addutility) {
                    $_SESSION['addfail'] = die(mysqli_error($connection));
                    header("Location: http://localhost/inventory_management_system/recordkeep/addfail.php");
                } else {
        
                }
            }
        }

        header("Location: http://localhost/inventory_management_system/recordkeep/addsuccess.php");

    } elseif ($_POST['type']=="misc") {
        $username = $_SESSION["username"];
        $price = $_POST["price"];

        if (empty($_POST["newbrand"])) {
            $brand = $_POST["brand"];
        } else {
            $brand = $_POST["newbrand"];
        }

        if (empty($_POST["newquantity"])) {
            $quantity = $_POST["quantity"];
        } else {
            $quantity = $_POST["newquantity"];
        }

        $name = $_POST["name"];
        $licenseduration = $_POST["licenseduration"];
        $licensenum = $_POST["licensenum"];

        $misc = "INSERT INTO miscsoft(username, price, brand, name, licenseduration, licensenum) 
        VALUES ('$username', '$price', '$brand', '$name', '$licenseduration', '$licensenum')";

        for ($i=0; $i <= $quantity; $i++) {
            if ($i == $quantity) {
                break;
            } else {
                $addmisc = mysqli_query($connection, $misc);

                if (!$addmisc) {
                    $_SESSION['addfail'] = die(mysqli_error($connection));
                    header("Location: http://localhost/inventory_management_system/recordkeep/addfail.php");
                } else {
        
                }
            }
        }

        header("Location: http://localhost/inventory_management_system/recordkeep/addsuccess.php");

    }
?>