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
                    if ($_SESSION['status'] == 1 || 10) { //1 is normal user, 10 is priviledged and 100 is admin
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
        <h1 class="h2 pl-3">Record Keeping - Add New Hardware</h1>
    </div>

    <hr class="my-4">

    <div class="container">
        <div class="col">
            <h4>New Hardware Details</h4>
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
                            <input type="radio" class="form-check-input" id="pc" onclick="loadform();" name="load">PC Hardware
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="laptop">
                            <input type="radio" class="form-check-input" id="laptop" onclick="loadform();" name="load">Laptop Hardware
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="misc">
                            <input type="radio" class="form-check-input" id="misc" onclick="loadform();" name="load">Miscellaneous Hardware
                        </label>
                    </div>
                    <br>
                    <small style="color:darkgray"><i>Please be aware that changing hardware types mid-way may affect your inputted information</i></small>
                </div>
                <div class="col-4">
                    <button value="Refresh Page" onClick="window.location.href=window.location.href" type="button" class="btn btn-primary" style="float:right;">Reset to Default</button>
                </div>
            </div>

            <hr class="my-2">

            <form action="http://localhost/inventory_management_system/recordkeep/storehard.php" method="post">
                <input type="hidden" name="type" value="pc">
                <div id="pcform" style="display:none">
                    <div class="row row-form">
                        <div class="col">
                            <label for="price">Price</label>
                            <br>
                            <input class="form-control" type="text" name="price" placeholder=">>> Enter a price" required>
                        </div>
                        <div class="col">
                            <label for="warranty">Length of Warranty</label>
                            <br>
                            <select class="form-control" name="warranty" onchange="showwarranty(this.options[this.selectedIndex].value)" required>
                                <option selected value=""> >>> Select amount of years</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="Other">Other</option>
                            </select>
                            <div class="other-style" id="warrantyother"></div>
                        </div>
                    </div>

                    <div class="row row-form">
                        <div class="col">
                            <label for="brand">PC Brand</label>
                                <br>
                                <select class="form-control" name="brand" onchange="showbrand(this.options[this.selectedIndex].value)" required>
                                    <option selected value=""> >>> Select a brand</option>
                                    <option value="Acer">Acer</option>
                                    <option value="Apple">Apple</option>
                                    <option value="Asus">Asus</option>
                                    <option value="Dell">Dell</option>
                                    <option value="HP">HP</option>
                                    <option value="Lenovo">Lenovo</option>
                                    <option value="MSI">MSI</option>
                                    <option id="other" value="Other">Other</option>
                                </select>
                            <div class="other-style" id="brandother"></div>
                        </div>
                        <div class="col">
                            <label for="name">PC Name</label>
                            <br>
                            <input class="form-control" type="text" name="name" placeholder=">>> Enter a name" required>
                        </div> 
                    </div>

                    <div class="row row-form">
                        <div class="col">
                            <label for="model">PC Model</label>
                            <br>
                            <input class="form-control" type="text" name="model" placeholder=">>> Enter a model" required>
                            <div class="other-style"></div>
                        </div>
                        <div class="col">
                            <label for="brand">Quantity</label>
                                <br>
                                <select class="form-control" name="quantity" onchange="showquantity(this.options[this.selectedIndex].value)" required>
                                    <option selected value=""> >>> Select a quantity</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="Other">Other</option>
                                </select>
                            <div class="other-style" id="quantityother"></div>
                        </div>
                        <div class="col">
                            <label for="serialnum">Serial Number</label>
                            <br>
                            <input class="form-control" type="text" name="serialnum" placeholder=">>> Enter a serial number" required>
                        </div>
                    </div>

                    <div class="row row-form">
                        <div class="col">
                            <label for="cpu_make">CPU Details</label>
                            <br>
                            <select class="form-control" name="cpu_make" onchange="showcpu(this.options[this.selectedIndex].value)" required>
                                <option selected value=""> >>> Select CPU's brand</option>
                                <option value="Intel">Intel</option>
                                <option value="AMD">AMD</option>
                                <option value="cpuother">Other</option>
                            </select>
                            <div class="other-style" id="cpuother"></div>
                            <input class="form-control" type="text" name="cpu_model" placeholder="Model example: i7-9700K" required>
                        </div>
                        <div class="col">
                            <label for="gpu_make">GPU Details</label>
                            <br>
                            <select class="form-control" name="gpu_make" onchange="showgpu(this.options[this.selectedIndex].value)" required>
                                <option selected value=""> >>> Select GPU's brand</option>
                                <option value="Nvidia">Nvidia</option>
                                <option value="AMD">AMD</option>
                                <option value="Intel">Intel</option>
                                <option value="gpuother">Other</option>
                            </select>
                            <div class="other-style" id="gpuother"></div>
                            <input class="form-control" type="text" name="gpu_model" placeholder="Model example: RTX 2060" required>
                        </div>
                        <div class="col">
                            <label for="storage_type">Storage Details</label>
                            <br>
                            <select class="form-control" name="storage_type" required>
                                <option selected value=""> >>> Select a storage type</option>
                                <option value="HDD">HDD</option>
                                <option value="SSD">SSD</option>
                            </select>
                            <div class="other-style"></div>
                            <input class="form-control" type="text" name="storage_cap" placeholder="Capacity example: 1024GB" required>
                        </div>
                        <div class="col">
                            <label for="ram">RAM Details</label>
                            <br>
                            <input class="form-control" type="text" name="ram_size" placeholder="Size example: 16GB" required>
                            <div class="other-style"></div>
                            <input class="form-control" type="text" name="ram_speed" placeholder="Speed example: 2400MHz" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary other-style">Add Hardware to PC Database</button>
                </div>
            </form>

            <form action="http://localhost/inventory_management_system/recordkeep/storehard.php" method="post">
                <input type="hidden" name="type" value="laptop">
                <div id="laptopform" style="display:none">
                    <div class="row row-form">
                        <div class="col">
                            <label for="price">Price</label>
                            <br>
                            <input class="form-control" type="text" name="price" placeholder=">>> Enter a price" required>
                        </div>
                        <div class="col">
                            <label for="warranty">Length of Warranty</label>
                            <br>
                            <select class="form-control" name="warranty" onchange="showwarranty(this.options[this.selectedIndex].value)" required>
                                <option selected value=""> >>> Select amount of years</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="Other">Other</option>
                            </select>
                            <div class="other-style" id="lapwarrantyother"></div>
                        </div>
                    </div>

                    <div class="row row-form">
                        <div class="col">
                            <label for="brand">Laptop Brand</label>
                                <br>
                                <select class="form-control" name="brand" onchange="showbrand(this.options[this.selectedIndex].value)" required>
                                    <option selected value=""> >>> Select a brand</option>
                                    <option value="Acer">Acer</option>
                                    <option value="Apple">Apple</option>
                                    <option value="Asus">Asus</option>
                                    <option value="Dell">Dell</option>
                                    <option value="HP">HP</option>
                                    <option value="Lenovo">Lenovo</option>
                                    <option value="MSI">MSI</option>
                                    <option value="Other">Other</option>
                                </select>
                            <div class="other-style" id="lapbrandother"></div>
                        </div>
                        <div class="col">
                            <label for="name">Laptop Name</label>
                            <br>
                            <input class="form-control" type="text" name="name" placeholder=">>> Enter a name" required>
                        </div>
                        <div class="col">
                            <label for="screen">Screen Details</label>
                            <br>
                                <select class="form-control" name="screensize" onchange="showscreen(this.options[this.selectedIndex].value)" required>
                                    <option selected value=""> >>> Select a screen size</option>
                                    <option value="12.5">12.5"</option>
                                    <option value="13.3">13.3"</option>
                                    <option value="14">14.0"</option>
                                    <option value="15.6">15.6"</option>
                                    <option value="17.3">17.3"</option>
                                    <option value="Other">Other</option>
                                </select>
                            <div class="other-style" id="screenother"></div>
                                <select class="form-control" name="screenres" onchange="showscreenres(this.options[this.selectedIndex].value)" required>
                                    <option selected value=""> >>> Select a resolution</option>
                                    <option value="1280 x 720">1280 x 720</option>
                                    <option value="1366 x 768">1366 x 768</option>
                                    <option value="1920 x 1080">1920 x 1080</option>
                                    <option value="2560 x 1440">2560 x 1440</option>
                                    <option value="3840 x 2160">3840 x 2160</option>
                                    <option value="Other">Other</option>
                                </select>
                            <div class="other-style" id="screenresother"></div>
                        </div>
                    </div>

                    <div class="row row-form">
                        <div class="col">
                            <label for="model">Laptop Model</label>
                            <br>
                            <input class="form-control" type="text" name="model" placeholder=">>> Enter a model" required>
                            <div class="other-style"></div>
                        </div>
                        <div class="col">
                            <label for="quantity">Quantity</label>
                                <br>
                                <select class="form-control" name="quantity" onchange="showquantity(this.options[this.selectedIndex].value)" required>
                                    <option selected value=""> >>> Select a quantity</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="Other">Other</option>
                                </select>
                            <div class="other-style" id="lapquantityother"></div>
                        </div>
                        <div class="col">
                            <label for="serialnum">Serial Number</label>
                            <br>
                            <input class="form-control" type="text" name="serialnum" placeholder=">>> Enter a serial number" required>
                        </div>
                    </div>

                    <div class="row row-form">
                        <div class="col">
                            <label for="cpu_make">CPU Details</label>
                            <br>
                            <select class="form-control" name="cpu_make" onchange="showcpu(this.options[this.selectedIndex].value)" required>
                                <option selected value=""> >>> Select CPU's brand</option>
                                <option value="Intel">Intel</option>
                                <option value="AMD">AMD</option>
                                <option value="lapcpuother">Other</option>
                            </select>
                            <div class="other-style" id="lapcpuother"></div>
                            <input class="form-control" type="text" name="cpu_model" placeholder="Model example: i7-9700K" required>
                        </div>
                        <div class="col">
                            <label for="gpu_make">GPU Details</label>
                            <br>
                            <select class="form-control" name="gpu_make" onchange="showgpu(this.options[this.selectedIndex].value)" required>
                                <option selected value=""> >>> Select GPU's brand</option>
                                <option value="Nvidia">Nvidia</option>
                                <option value="AMD">AMD</option>
                                <option value="Intel">Intel</option>
                                <option value="lapgpuother">Other</option>
                            </select>
                            <div class="other-style" id="lapgpuother"></div>
                            <input class="form-control" type="text" name="gpu_model" placeholder="Model example: RTX 2060" required>
                        </div>
                        <div class="col">
                            <label for="storage_type">Storage Details</label>
                            <br>
                            <select class="form-control" name="storage_type" required>
                                <option selected value=""> >>> Select a storage type</option>
                                <option value="HDD">HDD</option>
                                <option value="SSD">SSD</option>
                            </select>
                            <div class="other-style"></div>
                            <input class="form-control" type="text" name="storage_cap" placeholder="Capacity example: 1024GB" required>
                        </div>
                        <div class="col">
                            <label for="ram">RAM Details</label>
                            <br>
                            <input class="form-control" type="text" name="ram_size" placeholder="Size example: 16GB" required>
                            <div class="other-style"></div>
                            <input class="form-control" type="text" name="ram_speed" placeholder="Speed example: 2400MHz" required>
                        </div>
                    </div>    

                    <button type="submit" class="btn btn-primary other-style">Add Hardware to Laptop Database</button>
                </div>
            </form>

            <form action="http://localhost/inventory_management_system/recordkeep/storehard.php" method="post">
                <input type="hidden" name="type" value="mischard">
                <div id="miscform" style="display:none">
                    <div class="row row-form">
                        <div class="col">
                            <label for="price">Price</label>
                            <br>
                            <input class="form-control" type="text" name="price" placeholder=">>> Enter a price" required>
                        </div>
                        <div class="col">
                            <label for="warranty">Length of Warranty</label>
                            <br>
                            <select class="form-control" name="warranty" onchange="showwarranty(this.options[this.selectedIndex].value)" required>
                                <option selected value=""> >>> Select amount of years</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="Other">Other</option>
                            </select>
                            <div class="other-style" id="miscwarrantyother"></div>
                        </div>
                    </div>

                    <div class="row row-form">
                        <div class="col">
                            <label for="brand">Miscellaneous Brand</label>
                                <br>
                                <select class="form-control" name="brand" onchange="showmiscbrand(this.options[this.selectedIndex].value)" required>
                                    <option selected value=""> >>> Select a brand</option>
                                    <option value="Corsair">Corsair</option>
                                    <option value="Logitech">Logitech</option>
                                    <option value="Microsoft">Microsoft</option>
                                    <option value="laptopaccessory">Laptop-bundled Accessory</option>
                                    <option value="pcaccessory">PC-bundled Accessory</option>
                                    <option value="Other">Other</option>
                                </select>
                            <div class="other-style" id="miscbrandother"></div>
                            <div class="other-style" id="misclaptopaccessory"></div>
                            <div class="other-style" id="miscpcaccessory"></div>
                        </div>
                        <div class="col">
                            <label for="name">Miscellaneous Name</label>
                            <br>
                            <input class="form-control" type="text" name="name" placeholder=">>> Enter a name" required>
                        </div>
                        <div class="col">
                            <label for="misctype">Miscellaneous Type</label>
                            <br>
                            <select class="form-control" name="misctype" onchange="showmisctype(this.options[this.selectedIndex].value)" required>
                                <option selected value=""> >>> Select type</option>
                                <option value="Mouse">Mouse</option>
                                <option value="Keyboard">Keyboard</option>
                                <option value="Monitor">Monitor</option>
                                <option value="Other">Other</option>
                            </select>
                            <div class="other-style" id="misctypeother"></div>
                        </div>
                    </div>

                    <div class="row row-form">
                        <div class="col">
                            <label for="model">Miscellaneous Model</label>
                            <br>
                            <input class="form-control" type="text" name="model" placeholder=">>> Enter a model" required>
                            <div class="other-style"></div>
                        </div>
                        <div class="col">
                            <label for="quantity">Quantity</label>
                                <br>
                                <select class="form-control" name="quantity" onchange="showquantity(this.options[this.selectedIndex].value)" required>
                                    <option selected value=""> >>> Select a quantity</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="Other">Other</option>
                                </select>
                            <div class="other-style" id="miscquantityother"></div>
                        </div>
                        <div class="col">
                            <label for="serialnum">Serial Number</label>
                            <br>
                            <input class="form-control" type="text" name="serialnum" placeholder=">>> Enter a serial number" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary other-style">Add Hardware to Miscellaneous Database</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../scripts/navbar.js"></script>
</body>
</html>