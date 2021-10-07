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
    <title>Hardware Management</title>
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
                    <a class="nav-link dropdown-toggle active" id="dropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Record Keeping</a>
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
        <h1 class="h2 pl-3">Record Keeping - Edit Hardware Values</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
        </div>
    </div>
    
    <hr class="my-4">

    <div class="container">
        <div class="col">
            <h4>Edit Hardware Details</h4>
            <hr class="my-3">
            <div class="row row-form">
                <div class="col-4">
                    <label for="username">Username</label>
                    <input class="form-control" type="text" placeholder=
                    <?php
                    echo $_SESSION['username'];
                    ?>
                    readonly>
                    <small><a href="http://localhost/inventory_management_system/dashboard/logout.php">Not you?</a></small>
                </div>
            </div>

            <div class="row row-form">
                <div class="col-8">
                    <label for="hardware_type">Select a Type of Hardware</label>
                    <br>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="pc">
                            <input type="radio" class="form-check-input" id="pc" onclick="loaddata();" name="load">PC Hardware
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="laptop">
                            <input type="radio" class="form-check-input" id="laptop" onclick="loaddata();" name="load">Laptop Hardware
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="mischard">
                            <input type="radio" class="form-check-input" id="mischard" onclick="loaddata();" name="load">Miscellaneous Hardware
                        </label>
                    </div>
                    <br>
                    <small style="color:darkgray"><i>Please be aware that <strong>Admin rights</strong> is required to edit <u>'ID #', 'Status', 'Holder' and 'Added'</u></i></small>
                </div>
                <div class="col-4">
                    <button value="Refresh Page" onClick="window.location.href=window.location.href" type="button" class="btn btn-primary" style="float:right;">Reset to Default</button>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-2">

    <div class="container-fluid">
        <div class="col-12 my-auto">
            <div class="row row-form show-hide" id="pcdata">
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
                                        <td id="brand"><?php echo $pcrow['brand']; ?></td>
                                        <td><?php echo $pcrow['name']; ?></td>
                                        <td><?php echo $pcrow['model']; ?></td>
                                        <td id="warranty"><?php echo $pcrow['warranty']; ?></td>
                                        <td id="cpu"><?php echo $pcrow['cpu_make']; ?></td>
                                        <td><?php echo $pcrow['cpu_model']; ?></td>
                                        <td id="gpu"><?php echo $pcrow['gpu_make']; ?></td>
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
                </div>
                <hr class="my-2">
            </div>

            <div class="row row-form show-hide" id="laptopdata">
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
                                        <td id="brand"><?php echo $laptoprow['brand']; ?></td>
                                        <td><?php echo $laptoprow['name']; ?></td>
                                        <td><?php echo $laptoprow['model']; ?></td>
                                        <td id="warranty"><?php echo $laptoprow['warranty']; ?></td>
                                        <td id="screensize"><?php echo $laptoprow['screensize']; ?></td>
                                        <td id="screenres"><?php echo $laptoprow['screenres']; ?></td>
                                        <td id="cpu"><?php echo $laptoprow['cpu_make']; ?></td>
                                        <td><?php echo $laptoprow['cpu_model']; ?></td>
                                        <td id="gpu"><?php echo $laptoprow['gpu_make']; ?></td>
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
                </div>
                <hr class="my-2">
            </div>

            <div class="row row-form show-hide" id="mischarddata">
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
                                        <td id="brand"><?php echo $mischardrow['brand']; ?></td>
                                        <td><?php echo $mischardrow['name']; ?></td>
                                        <td><?php echo $mischardrow['model']; ?></td>
                                        <td id="misctype"><?php echo $mischardrow['misctype']; ?></td>
                                        <td id="warranty"><?php echo $mischardrow['warranty']; ?></td>
                                        <td><?php echo $mischardrow['serialnum']; ?></td>
                                        <td><?php echo $mischardrow['timestamp']; ?></td>                                        
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <hr class="my-2">
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
    <script src="../scripts/datatablecelledit.js"></script>
    <script src="../scripts/edithard.js"></script>
    <script src="../scripts/navbar.js"></script>
</body>
</html>