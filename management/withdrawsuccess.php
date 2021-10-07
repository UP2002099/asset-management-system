<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: http://localhost/inventory_management_system/index/landing.php");
    }
?>

<!doctype html>
<html lang="en">
<head>
    <title>Withdrawal Successful</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../scripts/navbar.css">
    <link rel="stylesheet" href="../scripts/notice.css">
    <link rel="stylesheet" href="../scripts/headundernav.css">
</head>
<body>
    <div class="navbar navbar-expand-lg navbar-dark fixed-top mb-4" style="background-color: #344445;" role="navigation">
        <a class="navbar-brand" href="http://localhost/inventory_management_system/dashboard/homepage.php">Company Name</a>
        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/inventory_management_system/dashboard/homepage.php">Dashboard</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Inventory Management</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown1">
                        <li class="dropdown-item dropdown">
                            <a class="dropdown-toggle" id="dropdown1.1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Inventory Control</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown1.1" style="top: -999px; left: -999px;">
                                <li class="dropdown-item">
                                <a href="http://localhost/inventory_management_system/management/withdraw.php">Withdraw Inventory</a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="http://localhost/inventory_management_system/management/return.php">Return Inventory</a>
                                </li>
                            </ul>
                        </li>
                        <div class="dropdown-divider"></div>
                        <li class="dropdown-item">
                            <a class="dropdown" href="http://localhost/inventory_management_system/management/overview.php">Inventory Overview</a>
                        </li>
                    </ul>
                </li>
                <?php if ($_SESSION['status'] != 1) { ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="dropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Record Keeping</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown2">
                        <li class="dropdown-item dropdown">
                            <a class="dropdown-toggle" id="dropdown2.1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add Inventory</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown2.1" style="top: -999px; left: -999px;">
                                <li class="dropdown-item">
                                    <a href="http://localhost/inventory_management_system/recordkeep/addhard.php">Add Hardware</a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="http://localhost/inventory_management_system/recordkeep/addsoft.php">Add Software</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-item dropdown">
                            <a class="dropdown-toggle" id="dropdown2.2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Edit Inventory</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown2.2" style="top: -999px; left: -999px;">
                                <li class="dropdown-item">
                                    <a href="http://localhost/inventory_management_system/recordkeep/edithard.php">Edit Hardware</a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="http://localhost/inventory_management_system/recordkeep/editsoft.php">Edit Software</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <?php
                } else { ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="dropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Record Keeping</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown2">
                    <h6 class="dropdown-header">USER HAS NO RIGHTS:<br>RECORD KEEPING DISABLED</h6>
                        <li class="dropdown-item dropdown">
                            <a class="dropdown-toggle" id="dropdown2.1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add Inventory</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown2.1" style="top: -999px; left: -999px;">
                                <li class="dropdown-item disabled">
                                    <a>DISABLED</a>
                                </li>
                                <li class="dropdown-item disabled">
                                    <a>DISABLED</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-item dropdown">
                            <a class="dropdown-toggle" id="dropdown2.2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Edit Inventory</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown2.2" style="top: -999px; left: -999px;">
                                <li class="dropdown-item disabled">
                                    <a>DISABLED</a>
                                </li>
                                <li class="dropdown-item disabled">
                                    <a>DISABLED</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <?php
                } ?>
            </ul>
            
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <?php
                    if ($_SESSION['status'] != '100') { //1 is normal user, 10 is priviledged and 100 is admin
                        ?>
                        <a class="nav-link disabled">Admin</a>
                    <?php
                    } else if ($_SESSION['status'] == '100') {
                    ?>
                    <a class="nav-link" href="http://localhost/phpmyadmin/db_structure.php?server=1&db=ims">Admin</a>
                    <?php
                    }
                    ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="dropdown3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php
                                echo $_SESSION['username'];
                            ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown3">
                            <li class="dropdown-item">
                                <a href="http://localhost/inventory_management_system/dashboard/usersettings.php">User Settings</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/inventory_management_system/dashboard/logout.php">Logout</a>
                    </li>
                </li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="alert alert-success" style="margin-top: 80px;" role="alert">
        <h4 class="alert-heading" style="padding-bottom: 10px;">Item has been successfully withdrawn!</h4>
            <ul>
            <li><a href="http://localhost/inventory_management_system/recordkeep/addhard.php">Add more Hardware</a></li>
                <hr class="my-2">
                <li><a href="http://localhost/inventory_management_system/recordkeep/addsoft.php">Add more Software</a></li>
                <hr class="my-2">
                <li><a href="http://localhost/inventory_management_system/management/overview.php">Check Inventory</a></li>
                <hr class="my-2">
                <li><a href="http://localhost/inventory_management_system/mangement/withdraw.php">Withdraw Inventory</a></li>
                <hr class="my-2">
                <li><a href="http://localhost/inventory_management_system/mangement/return.php">Return Inventory</a></li>
                <hr class="my-2">
                <li><a href="http://localhost/inventory_management_system/dashboard/homepage.php">Back to the Dashboard</a></li>
            </ul>
        </div>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../scripts/navbar.js"></script>
</body>
</html>