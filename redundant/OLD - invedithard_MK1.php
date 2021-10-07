<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: http://localhost/inventory_management_system/index/landing.php");
    }
?>

<!doctype html>
<html lang="en">
<head>
    <title>Add Hardware</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../scripts/navbar.css">
    <link rel="stylesheet" href="../scripts/notice.css">
    <link rel="stylesheet" href="../scripts/headundernav.css">
    <script src="../scripts/hardwareform.js"></script>
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

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center undernav-h1">
        <h1 class="h2 pl-3">Inventory Augmenter - Add Hardware</h1>
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
            <h4>New Hardware Details</h4>
            <hr class="my-3">
            
            <form action="http://localhost/inventory_management_system/inventory_augmenter/storeinvedithard.php" method="post">
                <div class="row row-form">
                    <div class="col-4">
                        <label for="username">Username</label>
                        <input class="form-control" type="text" placeholder=
                        <?php
                        echo $_SESSION['username'];
                        ?>
                        readonly>
                    </div>
                </div>

                <div class="row row-form">
                    <div class="col-4">
                        <label for="hardware_type">Select a Type of Hardware</label>
                        <br>
                        <select class="form-control" name="hardware_type" required>
                            <!-- $_POST will output string in "value", refer superglobal by string in "name" -->
                            <option selected value="">Type</option>
                            <option id="pc" value="pc">PC Hardware</option>
                            <option id="laptop" value="laptop">Laptop Hardware</option>
                            <option id="misc" value="misc">Miscellaneous Hardware</option> 
                        </select>
                    </div>
                </div>

                <hr class="my-2">

                <div id="content"> 
                    <a href="#" onclick="load_pc"></a>
                </div>
                <!-- <div class="row row-form">
                    <div class="col">
                        <label for="brand">PC Brand</label>
                            <br>
                            <select class="form-control" name="brand" onchange="showfield(this.options[this.selectedIndex].value)" required>
                                <option selected value="">Select a brand below</option>
                                <option value="acer">Acer</option>
                                <option value="apple">Apple</option>
                                <option value="asus">Asus</option>
                                <option value="dell">Dell</option>
                                <option value="hp">HP</option>
                                <option value="lenovo">Lenovo</option>
                                <option value="msi">MSI</option>
                                <option value="other">Other</option>
                            </select>
                            <div class="other-style" id="inputother"></div>
                    </div>

                    <div class="col">
                        <label for="name">PC Name</label>
                        <br>
                        <input class="form-control" type="text" name="name" placeholder="Dell OptiPlex 3050 Micro" required>
                    </div> 
                </div>

                <div class="row row-form">
                    <div class="col">
                        <label for="model">PC Model</label>
                        <br>
                        <input class="form-control" type="text" name="model" placeholder="Model" required>
                        <div class="other-style"></div>
                    </div>

                    <div class="col">
                        <label for="serial">Serial Number</label>
                        <br>
                        <input class="form-control" type="text" name="serial" placeholder="S/N" required>
                    </div>
                    
                </div>

                <div class="row row-form">
                    <div class="col">
                        <label for="cpu_make">CPU Details</label>
                        <br>
                        <select class="form-control" name="cpu_make" onchange="showfield1(this.options[this.selectedIndex].value)" required>
                            <option selected value="">Select a CPU brand</option>
                            <option value="c_intel">Intel</option>
                            <option value="c_amd">AMD</option>
                            <option value="cpuother">Other</option>
                        </select>
                        <div class="other-style" id="cpuinputother"></div>
                        <input class="form-control" type="text" name="cpu_model" placeholder="Model: i7-9700K" required>
                    </div>

                    <div class="col">
                        <label for="gpu_make">GPU Details</label>
                        <br>
                        <select class="form-control" name="gpu_make" onchange="showfield2(this.options[this.selectedIndex].value)" required>
                            <option selected value="">Select a GPU brand</option>
                            <option value="g_nvidia">Nvidia</option>
                            <option value="g_amd">AMD</option>
                            <option value="g_intel">Intel</option>
                            <option value="gpuother">Other</option>
                        </select>
                        <div class="other-style" id="gpuinputother"></div>
                        <input class="form-control" type="text" name="gpu_model" placeholder="Model: RTX 2060" required>
                    </div>

                    <div class="col">
                        <label for="storage_type">Storage Details</label>
                        <br>
                        <select class="form-control" name="storage_type" onchange="showfield2(this.options[this.selectedIndex].value)" required>
                            <option selected value="">Select a storage type</option>
                            <option value="hdd">HDD</option>
                            <option value="ssd">SSD</option>
                        </select>
                        <div class="other-style"></div>
                        <input class="form-control" type="text" name="storage_cap" placeholder="Capacity: 1 Tb" required>
                    </div>

                    <div class="col">
                        <label for="ram">RAM Details</label>
                        <br>
                        <input class="form-control" type="text" name="ram_size" placeholder="Size: 16 Gb" required>
                        <div class="other-style"></div>
                        <input class="form-control" type="text" name="ram_speed" placeholder="Speed: 2400 MHz" required>
                    </div>

                </div>
                <input type="submit"> -->
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../scripts/navbar.js"></script>
</body>
</html>