<?php
    require "../inventory_augmenter/retreivedata.php";

    if (!isset($_SESSION['username'])) {
        header("Location: http://localhost/inventory_management_system/index/landing.php");
    }
?>

<!doctype html>
<html lang="en">
<head>
    <title>Withdraw Inventory</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../scripts/navbar.css">
    <link rel="stylesheet" href="../scripts/notice.css">
    <link rel="stylesheet" href="../scripts/headundernav.css">
    <script src="../scripts/hardwareform.js"></script>
</head>
<body>
    <div class="navbar navbar-expand-lg navbar-dark fixed mb-4" style="background-color: #344445;" role="navigation">
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
                            <a class="dropdown-toggle" id="dropdown1.1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Inventory Overview</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown1.1" style="top: -999px; left: -999px;">
                                <li class="dropdown-item">
                                    <a href="http://localhost/inventory_management_system/inventory_management/invhardstatus.php">Hardware Status</a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="http://localhost/inventory_management_system/inventory_management/invsoftstatus.php">Software Status</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-item dropdown">
                            <a class="dropdown-toggle" id="dropdown1.2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Inventory Manager</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown1.2" style="top: -999px; left: -999px;">
                                <li class="dropdown-item">
                                    <a href="http://localhost/inventory_management_system/inventory_management/invmanagehard.php">Manage Hardware</a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="http://localhost/inventory_management_system/inventory_management/invmanagesoft.php">Manage Software</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" id="dropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Inventory Augmenter</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown2">
                        <li class="dropdown-item dropdown">
                            <a class="dropdown-toggle" id="dropdown2.1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Input New Inventory</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown2.1" style="top: -999px; left: -999px;">
                                <li class="dropdown-item">
                                    <a href="http://localhost/inventory_management_system/inventory_augmenter/invedithard.php">Add Hardware</a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="http://localhost/inventory_management_system/inventory_augmenter/inveditsoft.php">Add Software</a>
                                </li>
                            </ul>
                        </li>
                        <hr class="my-0">
                        <li class="dropdown-item">
                            <a href="http://localhost/inventory_management_system/inventory_augmenter/invwithdraw.php">Withdraw Inventory</a>
                        </li>
                    </ul>
                </li>
            </ul>
            
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <?php
                    if ($_SESSION['status'] == 1) { //1 is normal user, 10 and above is admin
                        ?>
                        <a class="nav-link disabled">Admin</a>
                    <?php
                    } else {
                        ?>
                        <a class="nav-link" href="http://localhost/inventory_management_system/dashboard/admin.php">Admin</a>
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

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
        <h1 class="h2 pl-3">Inventory Augmenter - Withdraw Inventory</h1>
    </div>

    <hr class="my-4">

    <div class="container">
        <div class="col">
            <h4>Withdraw Inventory</h4>
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
                <div class="col-10">
                    <label for="hardware_type">Select either Hardware or Software</label>
                    <br>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="hard">
                            <input type="radio" class="form-check-input" id="hard" onclick="loadform();" name="load">Hardware
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="soft">
                            <input type="radio" class="form-check-input" id="soft" onclick="loadform();" name="load">Software
                        </label>
                    </div>
                    <br>
                        <div class="form-check-inline" style="display:none" id="harddatabase">
                            <label class="form-check-label radio-inline">
                                <input type="radio" class="form-check-input" name="hard" id="pcdata" onclick="loaddata();">PC Database
                            </label>
                            <label class="form-check-label radio-inline">
                                <input type="radio" class="form-check-input" name="hard" id="laptopdata" onclick="loaddata();">Laptop Database
                            </label>
                            <label class="form-check-label radio-inline">
                                <input type="radio" class="form-check-input" name="hard" id="mischarddata" onclick="loaddata();">Miscellaneous Database
                            </label>
                        </div>

                        <div class="form-check-inline" style="display:none" id="softdatabase">
                            <label class="form-check-label radio-inline">
                                <input type="radio" class="form-check-input" name="soft" id="genpurposedata" onclick="loaddata();">General Purpose Software
                            </label>
                            <label class="form-check-label radio-inline">
                                <input type="radio" class="form-check-input" name="soft" id="opersystemdata" onclick="loaddata();">Operating System Software
                            </label>
                            <label class="form-check-label radio-inline">
                                <input type="radio" class="form-check-input" name="soft" id="utilitydata" onclick="loaddata();">Utility Software
                            </label>
                            <label class="form-check-label radio-inline">
                                <input type="radio" class="form-check-input" name="soft" id="miscsoftdata" onclick="loaddata();">Miscellaneous Software
                            </label>
                        </div>
                    <br>
                    <small style="color:darkgray"><i>Please be aware that you can only withdraw one item at a time</i></small>
                </div>
                <div class="col-2">
                    <button value="Refresh Page" onClick="window.location.href=window.location.href" type="button" class="btn btn-primary" style="float:right;">Reset to Default</button>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-2">

    <div class="container-fluid">
        <div class="col-12 my-auto">
            <div class="row row-form" id="listpc" style="display:none">
                <div class="px-3">
                    <table class="table table-hover table-bordered table-responsive-sm" id="table">
                    <h4>PC Database</h4>
                        <thead class="row-center">
                            <tr role="row" style="padding: 0px;" class="my-auto">
                                <th rowspan="2" colspan="1" style="padding: 6px;" class="row-center">ID #</th>
                                <th rowspan="2" colspan="1" style="padding: 6px;" class="row-center">Status</th>
                                <th rowspan="2" colspan="1" style="padding: 6px;" class="row-center">Brand</th>
                                <th rowspan="2" colspan="1" style="padding: 6px;" class="row-center">Name</th>
                                <th rowspan="2" colspan="1" style="padding: 6px;" class="row-center">Model</th>
                                <th rowspan="2" colspan="1" style="padding: 6px;" class="row-center">Quantity</th>
                                <th rowspan="2" colspan="1" style="padding: 6px;" class="row-center">Warranty</th>
                                <th rowspan="1" colspan="2" class="row-center" style="padding: 0px;">CPU</th>
                                <th rowspan="1" colspan="2" class="row-center" style="padding: 0px;">GPU</th>
                                <th rowspan="1" colspan="2" class="row-center" style="padding: 0px;">Storage</th>
                                <th rowspan="1" colspan="2" class="row-center" style="padding: 0px;">RAM</th>
                                <th rowspan="2" colspan="1" style="padding: 6px;" class="row-center">Date added</th>
                            </tr>
                            <tr>
                                <th rowspan="1" colspan="1" style="padding: 6px;" class="row-center">Brand</th>
                                <th rowspan="1" colspan="1" style="padding: 6px;" class="row-center">Model</th>
                                <th rowspan="1" colspan="1" style="padding: 6px;" class="row-center">Brand</th>
                                <th rowspan="1" colspan="1" style="padding: 6px;" class="row-center">Model</th>
                                <th rowspan="1" colspan="1" style="padding: 6px;" class="row-center">Type</th>
                                <th rowspan="1" colspan="1" style="padding: 6px;" class="row-center">Capacity</th>
                                <th rowspan="1" colspan="1" style="padding: 6px;" class="row-center">Size</th>
                                <th rowspan="1" colspan="1" style="padding: 6px;" class="row-center">Speed</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr role="row">
                                <td><?php echo $_SESSION['db_id'] ?></td>
                                <td><?php echo $_SESSION['status'] ?></td>
                                <td><?php echo $_SESSION['brand'] ?></td>
                                <td><?php echo $_SESSION['name'] ?></td>
                                <td><?php echo $_SESSION['model'] ?></td>
                                <td><?php echo $_SESSION['quantity'] ?></td>
                                <td><?php echo $_SESSION['warranty'] ?></td>
                                <td><?php echo $_SESSION['cpu_make'] ?></td>
                                <td><?php echo $_SESSION['cpu_model'] ?></td>
                                <td><?php echo $_SESSION['gpu_make'] ?></td>
                                <td><?php echo $_SESSION['gpu_model'] ?></td>
                                <td><?php echo $_SESSION['storage_type'] ?></td>
                                <td><?php echo $_SESSION['storage_cap'] ?></td>
                                <td><?php echo $_SESSION['ram_size'] ?></td>
                                <td><?php echo $_SESSION['ram_speed'] ?></td>
                                <td><?php echo $_SESSION['timestamp'] ?></td>
                            </tr>
                            <tr role="row">
                                <td><?php echo $_SESSION['db_id'] ?></td>
                                <td><?php echo $_SESSION['status'] ?></td>
                                <td><?php echo $_SESSION['brand'] ?></td>
                                <td><?php echo $_SESSION['name'] ?></td>
                                <td><?php echo $_SESSION['model'] ?></td>
                                <td><?php echo $_SESSION['quantity'] ?></td>
                                <td><?php echo $_SESSION['warranty'] ?></td>
                                <td><?php echo $_SESSION['cpu_make'] ?></td>
                                <td><?php echo $_SESSION['cpu_model'] ?></td>
                                <td><?php echo $_SESSION['gpu_make'] ?></td>
                                <td><?php echo $_SESSION['gpu_model'] ?></td>
                                <td><?php echo $_SESSION['storage_type'] ?></td>
                                <td><?php echo $_SESSION['storage_cap'] ?></td>
                                <td><?php echo $_SESSION['ram_size'] ?></td>
                                <td><?php echo $_SESSION['ram_speed'] ?></td>
                                <td><?php echo $_SESSION['timestamp'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../scripts/invwithdraw.js"></script>
    <script src="../scripts/navbar.js"></script>
</body>
</html>