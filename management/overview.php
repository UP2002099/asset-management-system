<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: http://localhost/inventory_management_system/index/landing.php");
    }

    require "../management/retrievealldata.php";
?>

<!doctype html>
<html lang="en">
<head>
    <title>Inventory Overview</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../scripts/navbar.css">
    <link rel="stylesheet" href="../scripts/notice.css">
    <link rel="stylesheet" href="../scripts/headundernav.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>
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
                    <a class="nav-link dropdown-toggle active" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Inventory Management</a>
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

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center undernav-h1">
        <h1 class="h2 pl-3">Inventory Management - Inventory Overview</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
        </div>
    </div>

    <br>

    <div class="row d-flex" style="padding-left:16px; padding-right:16px;">
        <div class="col-6 d-flex" style="justify-content:flex-start;">
            <h5 style="margin-bottom:0px;">Hardware</h5>
        </div>
        <div class="col-6 d-flex" style="justify-content:flex-end;">
            <h5 style="margin-bottom:0px;">Software</h5>
        </div>
    </div>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="padding-left:0px; padding-right:0px;">
            <div class="col-6 d-flex" style="justify-content:flex-start;">
                <li class="breadcrumb-item">
                    <div class="form-check-inline">
                        <label class="form-check-label" for="pc">
                            <input type="checkbox" class="form-check-input" id="pc">PC Database
                        </label>
                    </div>
                </li>
                <li class="breadcrumb-item">
                    <div class="form-check-inline">
                        <label class="form-check-label" for="laptop">
                            <input type="checkbox" class="form-check-input" id="laptop">Laptop Database
                        </label>
                    </div>
                </li>
                <li class="breadcrumb-item">
                    <div class="form-check-inline">
                        <label class="form-check-label" for="mischard">
                            <input type="checkbox" class="form-check-input" id="mischard">Miscellaneous Database
                        </label>
                    </div>
                </li>
            </div>
            <div class="col-6 d-flex" style="justify-content:flex-end; padding-right:0px;">
                <li class="breadcrumb-item">
                    <div class="form-check-inline">
                        <label class="form-check-label" for="genpurpose">
                            <input type="checkbox" class="form-check-input" id="genpurpose">General Purpose Database
                        </label>
                    </div>
                </li>
                <li class="breadcrumb-item">
                    <div class="form-check-inline">
                        <label class="form-check-label" for="opersystem">
                            <input type="checkbox" class="form-check-input" id="opersystem">Operating System Database
                        </label>
                    </div>
                </li>
                <li class="breadcrumb-item">
                    <div class="form-check-inline">
                        <label class="form-check-label" for="utility">
                            <input type="checkbox" class="form-check-input" id="utility">Utility Database
                        </label>
                    </div>
                </li>
                <li class="breadcrumb-item">
                    <div class="form-check-inline">
                        <label class="form-check-label" for="miscsoft">
                            <input type="checkbox" class="form-check-input" id="miscsoft">Miscellaneous Database
                        </label>
                    </div>
                </li>
            </div>
        </ol>
    </nav>

    <hr class="my-4">
    
    <div class="container-fluid">
        <div class="col-12 my-auto">
            <div class="row row-form show-hide" id="showpc">
                <div class="px-3">
                <table class="table table-hover table-bordered table-responsive-sm" id="pctable" style="width: 100%;">
                    <h4>PC Hardware Database</h4>
                        <thead class="row-center">
                            <tr role="row" style="padding: 0px;" class="my-auto">
                                <th rowspan="2" colspan="1" class="row-center">ID #</th>
                                <th rowspan="2" colspan="1" class="row-center">Status</th>
                                <th rowspan="2" colspan="1" class="row-center">Holder</th>
                                <th rowspan="2" colspan="1" class="row-center">Price</th>
                                <th rowspan="2" colspan="1" class="row-center">Brand</th>
                                <th rowspan="2" colspan="1" class="row-center">Name</th>
                                <th rowspan="2" colspan="1" class="row-center">Model</th>
                                <th rowspan="2" colspan="1" class="row-center">Warranty</th>
                                <th rowspan="1" colspan="2" class="row-center" style="padding: 0px;">CPU</th>
                                <th rowspan="1" colspan="2" class="row-center" style="padding: 0px;">GPU</th>
                                <th rowspan="1" colspan="2" class="row-center" style="padding: 0px;">Storage</th>
                                <th rowspan="1" colspan="2" class="row-center" style="padding: 0px;">RAM</th>
                                <th rowspan="2" colspan="1" class="row-center">Added</th>
                            </tr>
                            <tr>
                                <th rowspan="1" colspan="1" class="row-center">Brand</th>
                                <th rowspan="1" colspan="1" class="row-center">Model</th>
                                <th rowspan="1" colspan="1" class="row-center">Brand</th>
                                <th rowspan="1" colspan="1" class="row-center">Model</th>
                                <th rowspan="1" colspan="1" class="row-center">Type</th>
                                <th rowspan="1" colspan="1" class="row-center">Capacity</th>
                                <th rowspan="1" colspan="1" class="row-center">Size</th>
                                <th rowspan="1" colspan="1" class="row-center">Speed</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($arr_pc)) { ?>
                                <?php foreach ($arr_pc as $pcrow) { ?>
                                    <tr>
                                        <td><?php echo $pcrow['db_id']; ?></td>
                                        <td><?php echo $pcrow['status']; ?></td>
                                        <td><?php echo $pcrow['userholding']; ?></td>
                                        <td><?php echo $pcrow['price']; ?></td>
                                        <td><?php echo $pcrow['brand']; ?></td>
                                        <td><?php echo $pcrow['name']; ?></td>
                                        <td><?php echo $pcrow['model']; ?></td>
                                        <td><?php echo $pcrow['warranty']; ?></td>
                                        <td><?php echo $pcrow['cpu_make']; ?></td>
                                        <td><?php echo $pcrow['cpu_model']; ?></td>
                                        <td><?php echo $pcrow['gpu_make']; ?></td>
                                        <td><?php echo $pcrow['gpu_model']; ?></td>
                                        <td><?php echo $pcrow['storage_type']; ?></td>
                                        <td><?php echo $pcrow['storage_cap']; ?></td>
                                        <td><?php echo $pcrow['ram_size']; ?></td>
                                        <td><?php echo $pcrow['ram_speed']; ?></td>
                                        <td><?php echo $pcrow['timestamp']; ?></td>                                        
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="alert alert-secondary" role="alert" id="pcoptions" style="display: none;">
                        <?php if ($_SESSION['status'] != 1) { ?>
                            <a class="btn btn-outline-success" href="http://localhost/inventory_management_system/recordkeep/edithard.php" role="button" id="pcedit"></a>
                        <?php
                        } ?>
                        <div class="btn-group" role="group">
                            <a class="btn btn-outline-success" href="http://localhost/inventory_management_system/management/withdraw.php" role="button" id="pcwithdraw" style="display: none;"></a>
                            <a class="btn btn-outline-danger" href="#" role="button" id="xpcwithdraw" style="display: none;" aria-disabled="true"></a>
                        </div>
                    </div>
                </div>
                <hr class="my-2">
            </div>

            <div class="row row-form show-hide" id="showlaptop">
                <div class="px-3">
                    <table class="table table-hover table-bordered table-responsive-sm" id="laptoptable" style="width: 100%;">
                    <h4>Laptop Hardware Database</h4>
                        <thead class="row-center">
                            <tr role="row" style="padding: 0px;" class="my-auto">
                                <th rowspan="2" colspan="1" class="row-center">ID #</th>
                                <th rowspan="2" colspan="1" class="row-center">Status</th>
                                <th rowspan="2" colspan="1" class="row-center">Holder</th>
                                <th rowspan="2" colspan="1" class="row-center">Price</th>
                                <th rowspan="2" colspan="1" class="row-center">Brand</th>
                                <th rowspan="2" colspan="1" class="row-center">Name</th>
                                <th rowspan="2" colspan="1" class="row-center">Model</th>
                                <th rowspan="2" colspan="1" class="row-center">Warranty</th>
                                <th rowspan="1" colspan="2" class="row-center" style="padding: 0px;">Display</th>
                                <th rowspan="1" colspan="2" class="row-center" style="padding: 0px;">CPU</th>
                                <th rowspan="1" colspan="2" class="row-center" style="padding: 0px;">GPU</th>
                                <th rowspan="1" colspan="2" class="row-center" style="padding: 0px;">Storage</th>
                                <th rowspan="1" colspan="2" class="row-center" style="padding: 0px;">RAM</th>
                                <th rowspan="2" colspan="1" class="row-center">Added</th>
                            </tr>
                            <tr>
                                <th rowspan="1" colspan="1" class="row-center">Size</th>
                                <th rowspan="1" colspan="1" class="row-center">Res.</th>
                                <th rowspan="1" colspan="1" class="row-center">Brand</th>
                                <th rowspan="1" colspan="1" class="row-center">Model</th>
                                <th rowspan="1" colspan="1" class="row-center">Brand</th>
                                <th rowspan="1" colspan="1" class="row-center">Model</th>
                                <th rowspan="1" colspan="1" class="row-center">Type</th>
                                <th rowspan="1" colspan="1" class="row-center">Capacity</th>
                                <th rowspan="1" colspan="1" class="row-center">Size</th>
                                <th rowspan="1" colspan="1" class="row-center">Speed</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($arr_laptop)) { ?>
                                <?php foreach ($arr_laptop as $laptoprow) { ?>
                                    <tr>
                                        <td><?php echo $laptoprow['db_id']; ?></td>
                                        <td><?php echo $laptoprow['status']; ?></td>
                                        <td><?php echo $laptoprow['userholding']; ?></td>
                                        <td><?php echo $laptoprow['price']; ?></td>
                                        <td><?php echo $laptoprow['brand']; ?></td>
                                        <td><?php echo $laptoprow['name']; ?></td>
                                        <td><?php echo $laptoprow['model']; ?></td>
                                        <td><?php echo $laptoprow['warranty']; ?></td>
                                        <td><?php echo $laptoprow['screensize']; ?></td>
                                        <td><?php echo $laptoprow['screenres']; ?></td>
                                        <td><?php echo $laptoprow['cpu_make']; ?></td>
                                        <td><?php echo $laptoprow['cpu_model']; ?></td>
                                        <td><?php echo $laptoprow['gpu_make']; ?></td>
                                        <td><?php echo $laptoprow['gpu_model']; ?></td>
                                        <td><?php echo $laptoprow['storage_type']; ?></td>
                                        <td><?php echo $laptoprow['storage_cap']; ?></td>
                                        <td><?php echo $laptoprow['ram_size']; ?></td>
                                        <td><?php echo $laptoprow['ram_speed']; ?></td>
                                        <td><?php echo $laptoprow['timestamp']; ?></td>                                        
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="alert alert-secondary" role="alert" id="laptopoptions" style="display: none;">
                        <?php if ($_SESSION['status'] != 1) { ?>
                            <a class="btn btn-outline-success" href="http://localhost/inventory_management_system/recordkeep/edithard.php" role="button" id="laptopedit"></a>
                        <?php
                        } ?>
                        <div class="btn-group" role="group">
                            <a class="btn btn-outline-success" href="http://localhost/inventory_management_system/management/withdraw.php" role="button" id="laptopwithdraw" style="display: none;"></a>
                            <a class="btn btn-outline-danger" href="#" role="button" id="xlaptopwithdraw" style="display: none;" aria-disabled="true"></a>
                        </div>
                    </div>
                </div>
                <hr class="my-2">
            </div>

            <div class="row row-form show-hide" id="showmischard">
                <div class="px-3">
                    <table class="table table-hover table-bordered table-responsive-sm" id="mischardtable" style="width: 100%;">
                    <h4>Miscellaneous Hardware Database</h4>
                        <thead class="row-center">
                            <tr role="row" style="padding: 0px;" class="my-auto">
                                <th rowspan="1" colspan="1" class="row-center">ID #</th>
                                <th rowspan="1" colspan="1" class="row-center">Status</th>
                                <th rowspan="1" colspan="1" class="row-center">Holder</th>
                                <th rowspan="1" colspan="1" class="row-center">Price</th>
                                <th rowspan="1" colspan="1" class="row-center">Brand</th>
                                <th rowspan="1" colspan="1" class="row-center">Name</th>
                                <th rowspan="1" colspan="1" class="row-center">Model</th>
                                <th rowspan="1" colspan="1" class="row-center">Type</th>
                                <th rowspan="1" colspan="1" class="row-center">Warranty</th>
                                <th rowspan="1" colspan="1" class="row-center">Serial</th>
                                <th rowspan="1" colspan="1" class="row-center">Added</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($arr_mischard)) { ?>
                                <?php foreach ($arr_mischard as $mischardrow) { ?>
                                    <tr>
                                        <td><?php echo $mischardrow['db_id']; ?></td>
                                        <td><?php echo $mischardrow['status']; ?></td>
                                        <td><?php echo $mischardrow['userholding']; ?></td>
                                        <td><?php echo $mischardrow['price']; ?></td>
                                        <td><?php echo $mischardrow['brand']; ?></td>
                                        <td><?php echo $mischardrow['name']; ?></td>
                                        <td><?php echo $mischardrow['model']; ?></td>
                                        <td><?php echo $mischardrow['misctype']; ?></td>
                                        <td><?php echo $mischardrow['warranty']; ?></td>
                                        <td><?php echo $mischardrow['serialnum']; ?></td>
                                        <td><?php echo $mischardrow['timestamp']; ?></td>                                        
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="alert alert-secondary" role="alert" id="mischardoptions" style="display: none;">
                        <?php if ($_SESSION['status'] != 1) { ?>
                            <a class="btn btn-outline-success" href="http://localhost/inventory_management_system/recordkeep/edithard.php" role="button" id="mischardedit"></a>
                        <?php
                        } ?>
                        <div class="btn-group" role="group">
                            <a class="btn btn-outline-success" href="http://localhost/inventory_management_system/management/withdraw.php" role="button" id="mischardwithdraw" style="display: none;"></a>
                            <a class="btn btn-outline-danger" href="#" role="button" id="xmischardwithdraw" style="display: none;" aria-disabled="true"></a>
                        </div>
                    </div>
                </div>
                <hr class="my-2">
            </div>

            <div class="row row-form show-hide" id="showgenpurpose" style="display: none;">
                <div class="px-3">
                    <table class="table table-hover table-bordered table-responsive-sm" id="genpurposetable" style="width: 100%;">
                    <h4>General Purpose Software Database</h4>
                        <thead class="row-center">
                            <tr role="row" style="padding: 0px;" class="my-auto">
                                <th rowspan="2" colspan="1" class="row-center">ID #</th>
                                <th rowspan="2" colspan="1" class="row-center">Status</th>
                                <th rowspan="2" colspan="1" class="row-center">Holder</th>
                                <th rowspan="2" colspan="1" class="row-center">Price</th>
                                <th rowspan="2" colspan="1" class="row-center">Brand</th>
                                <th rowspan="2" colspan="1" class="row-center">Name</th>
                                <th rowspan="1" colspan="2" class="row-center" style="padding: 0px;">License</th>
                                <th rowspan="2" colspan="1" class="row-center">Added</th>
                            </tr>
                            <tr>
                                <th rowspan="1" colspan="1" class="row-center">Duration</th>
                                <th rowspan="1" colspan="1" class="row-center">Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($arr_genpurpose)) { ?>
                                <?php foreach ($arr_genpurpose as $genpurposerow) { ?>
                                    <tr>
                                        <td><?php echo $genpurposerow['db_id']; ?></td>
                                        <td><?php echo $genpurposerow['status']; ?></td>
                                        <td><?php echo $genpurposerow['userholding']; ?></td>
                                        <td><?php echo $genpurposerow['price']; ?></td>
                                        <td><?php echo $genpurposerow['brand']; ?></td>
                                        <td><?php echo $genpurposerow['name']; ?></td>
                                        <td><?php echo $genpurposerow['licenseduration']; ?></td>
                                        <td><?php echo $genpurposerow['licensenum']; ?></td>
                                        <td><?php echo $genpurposerow['timestamp']; ?></td>                                        
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="alert alert-secondary" role="alert" id="genpurposeoptions" style="display: none;">
                        <?php if ($_SESSION['status'] != 1) { ?>
                            <a class="btn btn-outline-success" href="http://localhost/inventory_management_system/recordkeep/edithard.php" role="button" id="genpurposeedit"></a>
                        <?php
                        } ?>
                        <div class="btn-group" role="group">
                            <a class="btn btn-outline-success" href="http://localhost/inventory_management_system/management/withdraw.php" role="button" id="genpurposewithdraw" style="display: none;"></a>
                            <a class="btn btn-outline-danger" href="#" role="button" id="xgenpurposewithdraw" style="display: none;" aria-disabled="true"></a>
                        </div>
                    </div>
                </div>
                <hr class="my-2">
            </div>

            <div class="row row-form show-hide" id="showopersystem" style="display: none;">
                <div class="px-3">
                    <table class="table table-hover table-bordered table-responsive-sm" id="opersystemtable" style="width: 100%;">
                    <h4>Operating System Software Database</h4>
                        <thead class="row-center">
                            <tr role="row" style="padding: 0px;" class="my-auto">
                                <th rowspan="2" colspan="1" class="row-center">ID #</th>
                                <th rowspan="2" colspan="1" class="row-center">Status</th>
                                <th rowspan="2" colspan="1" class="row-center">Holder</th>
                                <th rowspan="2" colspan="1" class="row-center">Price</th>
                                <th rowspan="2" colspan="1" class="row-center">Brand</th>
                                <th rowspan="2" colspan="1" class="row-center">Name</th>
                                <th rowspan="1" colspan="2" class="row-center" style="padding: 0px;">License</th>
                                <th rowspan="2" colspan="1" class="row-center">Added</th>
                            </tr>
                            <tr>
                                <th rowspan="1" colspan="1" class="row-center">Duration</th>
                                <th rowspan="1" colspan="1" class="row-center">Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($arr_opersystem)) { ?>
                                <?php foreach ($arr_opersystem as $opersystemrow) { ?>
                                    <tr>
                                        <td><?php echo $opersystemrow['db_id']; ?></td>
                                        <td><?php echo $opersystemrow['status']; ?></td>
                                        <td><?php echo $opersystemrow['userholding']; ?></td>
                                        <td><?php echo $opersystemrow['price']; ?></td>
                                        <td><?php echo $opersystemrow['brand']; ?></td>
                                        <td><?php echo $opersystemrow['name']; ?></td>
                                        <td><?php echo $opersystemrow['licenseduration']; ?></td>
                                        <td><?php echo $opersystemrow['licensenum']; ?></td>
                                        <td><?php echo $opersystemrow['timestamp']; ?></td>                                        
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="alert alert-secondary" role="alert" id="opersystemoptions" style="display: none;">
                        <?php if ($_SESSION['status'] != 1) { ?>
                            <a class="btn btn-outline-success" href="http://localhost/inventory_management_system/recordkeep/edithard.php" role="button" id="opersystemedit"></a>
                        <?php
                        } ?>
                        <div class="btn-group" role="group">
                            <a class="btn btn-outline-success" href="http://localhost/inventory_management_system/management/withdraw.php" role="button" id="opersystemwithdraw" style="display: none;"></a>
                            <a class="btn btn-outline-danger" href="#" role="button" id="xopersystemwithdraw" style="display: none;" aria-disabled="true"></a>
                        </div>
                    </div>
                </div>
                <hr class="my-2">
            </div>

            <div class="row row-form show-hide" id="showutility" style="display: none;">
                <div class="px-3">
                    <table class="table table-hover table-bordered table-responsive-sm" id="utilitytable" style="width: 100%;">
                    <h4>Utility Software Database</h4>
                        <thead class="row-center">
                            <tr role="row" style="padding: 0px;" class="my-auto">
                                <th rowspan="2" colspan="1" class="row-center">ID #</th>
                                <th rowspan="2" colspan="1" class="row-center">Status</th>
                                <th rowspan="2" colspan="1" class="row-center">Holder</th>
                                <th rowspan="2" colspan="1" class="row-center">Price</th>
                                <th rowspan="2" colspan="1" class="row-center">Brand</th>
                                <th rowspan="2" colspan="1" class="row-center">Name</th>
                                <th rowspan="1" colspan="2" class="row-center" style="padding: 0px;">License</th>
                                <th rowspan="2" colspan="1" class="row-center">Added</th>
                            </tr>
                            <tr>
                                <th rowspan="1" colspan="1" class="row-center">Duration</th>
                                <th rowspan="1" colspan="1" class="row-center">Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($arr_utility)) { ?>
                                <?php foreach ($arr_utility as $utilityrow) { ?>
                                    <tr>
                                        <td><?php echo $utilityrow['db_id']; ?></td>
                                        <td><?php echo $utilityrow['status']; ?></td>
                                        <td><?php echo $utilityrow['userholding']; ?></td>
                                        <td><?php echo $utilityrow['price']; ?></td>
                                        <td><?php echo $utilityrow['brand']; ?></td>
                                        <td><?php echo $utilityrow['name']; ?></td>
                                        <td><?php echo $utilityrow['licenseduration']; ?></td>
                                        <td><?php echo $utilityrow['licensenum']; ?></td>
                                        <td><?php echo $utilityrow['timestamp']; ?></td>                                        
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="alert alert-secondary" role="alert" id="utilityoptions" style="display: none;">
                        <?php if ($_SESSION['status'] != 1) { ?>
                            <a class="btn btn-outline-success" href="http://localhost/inventory_management_system/recordkeep/edithard.php" role="button" id="utilityedit"></a>
                        <?php
                        } ?>
                        <div class="btn-group" role="group">
                            <a class="btn btn-outline-success" href="http://localhost/inventory_management_system/management/withdraw.php" role="button" id="utilitywithdraw" style="display: none;"></a>
                            <a class="btn btn-outline-danger" href="#" role="button" id="xutilitywithdraw" style="display: none;" aria-disabled="true"></a>
                        </div>
                    </div>
                </div>
                <hr class="my-2">
            </div>

            <div class="row row-form show-hide" id="showmiscsoft" style="display: none;">
                <div class="px-3">
                    <table class="table table-hover table-bordered table-responsive-sm" id="miscsofttable" style="width: 100%;">
                    <h4>Miscellaneous Software Database</h4>
                        <thead class="row-center">
                            <tr role="row" style="padding: 0px;" class="my-auto">
                                <th rowspan="2" colspan="1" class="row-center">ID #</th>
                                <th rowspan="2" colspan="1" class="row-center">Status</th>
                                <th rowspan="2" colspan="1" class="row-center">Holder</th>
                                <th rowspan="2" colspan="1" class="row-center">Price</th>
                                <th rowspan="2" colspan="1" class="row-center">Brand</th>
                                <th rowspan="2" colspan="1" class="row-center">Name</th>
                                <th rowspan="1" colspan="2" class="row-center" style="padding: 0px;">License</th>
                                <th rowspan="2" colspan="1" class="row-center">Added</th>
                            </tr>
                            <tr>
                                <th rowspan="1" colspan="1" class="row-center">Duration</th>
                                <th rowspan="1" colspan="1" class="row-center">Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($arr_miscsoft)) { ?>
                                <?php foreach ($arr_miscsoft as $miscsoftrow) { ?>
                                    <tr>
                                        <td><?php echo $miscsoftrow['db_id']; ?></td>
                                        <td><?php echo $miscsoftrow['status']; ?></td>
                                        <td><?php echo $miscsoftrow['userholding']; ?></td>
                                        <td><?php echo $miscsoftrow['price']; ?></td>
                                        <td><?php echo $miscsoftrow['brand']; ?></td>
                                        <td><?php echo $miscsoftrow['name']; ?></td>
                                        <td><?php echo $miscsoftrow['licenseduration']; ?></td>
                                        <td><?php echo $miscsoftrow['licensenum']; ?></td>
                                        <td><?php echo $miscsoftrow['timestamp']; ?></td>                                        
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="alert alert-secondary" role="alert" id="miscsoftoptions" style="display: none;">
                        <?php if ($_SESSION['status'] != 1) { ?>
                            <a class="btn btn-outline-success" href="http://localhost/inventory_management_system/recordkeep/edithard.php" role="button" id="miscsoftedit"></a>
                        <?php
                        } ?>
                        <div class="btn-group" role="group">
                            <a class="btn btn-outline-success" href="http://localhost/inventory_management_system/management/withdraw.php" role="button" id="miscsoftwithdraw" style="display: none;"></a>
                            <a class="btn btn-outline-danger" href="#" role="button" id="xmiscsoftwithdraw" style="display: none;" aria-disabled="true"></a>
                        </div>
                    </div>
                </div>
                <hr class="my-2">
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
    <script src="../scripts/navbar.js"></script>
    <script src="../scripts/overview.js"></script>
</body>
</html>