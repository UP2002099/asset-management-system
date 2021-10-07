<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: http://localhost/inventory_management_system/index/landing.php");
    }
?>

<!doctype html>
<html lang="en">
<head>
    <title>Add Software</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../scripts/navbar.css">
    <link rel="stylesheet" href="../scripts/notice.css">
    <link rel="stylesheet" href="../scripts/headundernav.css">
    <script src="../scripts/softwareform.js"></script>
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
        <h1 class="h2 pl-3">Inventory Augmenter - Add Software</h1>
    </div>
    
    <hr class="my-4">

    <div class="container">
        <div class="col">
            <h4>New Software Details</h4>
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
                    <label for="hardware_type">Select a Type of Hardware</label>
                    <br>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="genpurpose">
                            <input type="radio" class="form-check-input" id="genpurpose" onclick="loadform();" name="load">General Purpose Software
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="opersystem">
                            <input type="radio" class="form-check-input" id="opersystem" onclick="loadform();" name="load">Operating System Software
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="utility">
                            <input type="radio" class="form-check-input" id="utility" onclick="loadform();" name="load">Utility Software
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="misc">
                            <input type="radio" class="form-check-input" id="misc" onclick="loadform();" name="load">Miscellaneous Software
                        </label>
                    </div>
                    <br>
                    <small style="color:darkgray"><i>Please be aware that changing software types mid-way may affect your inputted information</i></small>
                </div>
                <div class="col-2">
                    <button value="Refresh Page" onClick="window.location.href=window.location.href" type="button" class="btn btn-primary" style="float:inline-end;">Reset to Default</button>
                </div>
            </div>

            <hr class="my-2">

            <form action="http://localhost/inventory_management_system/inventory_augmenter/storesoftware.php" method="post">
                <div id="genpurposeform" style="display: none;">
                    <div class="row row-form">
                        <div class="col">
                            <label for="price">Price</label>
                            <br>
                            <input class="form-control" type="text" name="price" placeholder=">>> Enter a price" required>
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
                                    <option value="other">Other</option>
                                </select>
                            <div class="other-style" id="quantityother"></div>
                        </div>
                    </div>

                    <div class="row row-form">
                        <div class="col">
                            <label for="brand">Software Brands</label>
                                <br>
                                <select class="form-control" name="brand" onchange="showbrand(this.options[this.selectedIndex].value)" required>
                                    <option selected value=""> >>> Select a brand</option>
                                    <option value="autodesk">Autodesk</option>
                                    <option value="adobe">Adobe</option>
                                    <option value="apple">Apple</option>
                                    <option value="oracle">Oracle</option>
                                    <option value="ibm">IBM</option>
                                    <option value="microsoft">Microsoft</option>
                                    <option value="vmware">VMWare</option>
                                    <option value="kaspersky">Kaspersky Labs</option>
                                    <option value="rarlab">Win Rar</option>
                                    <option value="other">Other</option>
                                </select>
                            <div class="other-style" id="brandother"></div>
                        </div>
                        <div class="col">
                            <label for="name">Software Name</label>
                            <br>
                            <input class="form-control" type="text" name="name" placeholder=">>> Enter a name" required>
                        </div> 
                    </div>

                    <div class="row row-form">
                        <div class="col">
                            <label for="licenseduration">License Duration</label>
                                <br>
                                <select class="form-control" name="licenseduration" onchange="showduration(this.options[this.selectedIndex].value)" required>
                                    <option selected value=""> >>> Select amount of years</option>
                                    <option value="0.5">0.5</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="other">Other</option>
                                </select>
                            <div class="other-style" id="licensedurationother"></div>
                        </div>
                        <div class="col">
                            <label for="licensenum">License Number</label>
                            <br>
                            <input class="form-control" type="text" name="serial" placeholder=">>> Enter a license number" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary other-style">Add to General Purpose Software Database</button>
                </div>
            </form>

            <form action="http://localhost/inventory_management_system/inventory_augmenter/storesoftware.php" method="post">
                <div id="opersystemform" style="display: none;">
                    <div class="row row-form">
                        <div class="col">
                            <label for="price">Price</label>
                            <br>
                            <input class="form-control" type="text" name="price" placeholder=">>> Enter a price" required>
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
                                    <option value="other">Other</option>
                                </select>
                            <div class="other-style" id="operquantityother"></div>
                        </div>
                    </div>

                    <div class="row row-form">
                        <div class="col">
                            <label for="brand">Software Brands</label>
                                <br>
                                <select class="form-control" name="brand" onchange="showbrand(this.options[this.selectedIndex].value)" required>
                                    <option selected value=""> >>> Select a brand</option>
                                    <option value="autodesk">Autodesk</option>
                                    <option value="adobe">Adobe</option>
                                    <option value="apple">Apple</option>
                                    <option value="oracle">Oracle</option>
                                    <option value="ibm">IBM</option>
                                    <option value="microsoft">Microsoft</option>
                                    <option value="vmware">VMWare</option>
                                    <option value="kaspersky">Kaspersky Labs</option>
                                    <option value="rarlab">Win Rar</option>
                                    <option value="other">Other</option>
                                </select>
                            <div class="other-style" id="operbrandother"></div>
                        </div>
                        <div class="col">
                            <label for="name">Software Name</label>
                            <br>
                            <input class="form-control" type="text" name="name" placeholder=">>> Enter a name" required>
                        </div> 
                    </div>

                    <div class="row row-form">
                        <div class="col">
                            <label for="licenseduration">License Duration</label>
                                <br>
                                <select class="form-control" name="licenseduration" onchange="showduration(this.options[this.selectedIndex].value)" required>
                                    <option selected value=""> >>> Select amount of years</option>
                                    <option value="0.5">0.5</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="other">Other</option>
                                </select>
                            <div class="other-style" id="operlicensedurationother"></div>
                        </div>
                        <div class="col">
                            <label for="licensenum">License Number</label>
                            <br>
                            <input class="form-control" type="text" name="serial" placeholder=">>> Enter a license number" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary other-style">Add to Operating System Software Database</button>
                </div>
            </form>

            <form action="http://localhost/inventory_management_system/inventory_augmenter/storesoftware.php" method="post">
                <div id="utilityform" style="display: none;">
                    <div class="row row-form">
                        <div class="col">
                            <label for="price">Price</label>
                            <br>
                            <input class="form-control" type="text" name="price" placeholder=">>> Enter a price" required>
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
                                    <option value="other">Other</option>
                                </select>
                            <div class="other-style" id="utilityquantityother"></div>
                        </div>
                    </div>

                    <div class="row row-form">
                        <div class="col">
                            <label for="brand">Software Brands</label>
                                <br>
                                <select class="form-control" name="brand" onchange="showbrand(this.options[this.selectedIndex].value)" required>
                                    <option selected value=""> >>> Select a brand</option>
                                    <option value="autodesk">Autodesk</option>
                                    <option value="adobe">Adobe</option>
                                    <option value="apple">Apple</option>
                                    <option value="oracle">Oracle</option>
                                    <option value="ibm">IBM</option>
                                    <option value="microsoft">Microsoft</option>
                                    <option value="vmware">VMWare</option>
                                    <option value="kaspersky">Kaspersky Labs</option>
                                    <option value="rarlab">Win Rar</option>
                                    <option value="other">Other</option>
                                </select>
                            <div class="other-style" id="utilitybrandother"></div>
                        </div>
                        <div class="col">
                            <label for="name">Software Name</label>
                            <br>
                            <input class="form-control" type="text" name="name" placeholder=">>> Enter a name" required>
                        </div> 
                    </div>

                    <div class="row row-form">
                        <div class="col">
                            <label for="licenseduration">License Duration</label>
                                <br>
                                <select class="form-control" name="licenseduration" onchange="showduration(this.options[this.selectedIndex].value)" required>
                                    <option selected value=""> >>> Select amount of years</option>
                                    <option value="0.5">0.5</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="other">Other</option>
                                </select>
                            <div class="other-style" id="utilitylicensedurationother"></div>
                        </div>
                        <div class="col">
                            <label for="licensenum">License Number</label>
                            <br>
                            <input class="form-control" type="text" name="serial" placeholder=">>> Enter a license number" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary other-style">Add to Utility Software Database</button>
                </div>
            </form>

            <form action="http://localhost/inventory_management_system/inventory_augmenter/storesoftware.php" method="post">
                <div id="miscform" style="display: none;">
                    <div class="row row-form">
                        <div class="col">
                            <label for="price">Price</label>
                            <br>
                            <input class="form-control" type="text" name="price" placeholder=">>> Enter a price" required>
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
                                    <option value="other">Other</option>
                                </select>
                            <div class="other-style" id="miscquantityother"></div>
                        </div>
                    </div>

                    <div class="row row-form">
                        <div class="col">
                            <label for="brand">Software Brands</label>
                                <br>
                                <select class="form-control" name="brand" onchange="showbrand(this.options[this.selectedIndex].value)" required>
                                    <option selected value=""> >>> Select a brand</option>
                                    <option value="autodesk">Autodesk</option>
                                    <option value="adobe">Adobe</option>
                                    <option value="apple">Apple</option>
                                    <option value="oracle">Oracle</option>
                                    <option value="ibm">IBM</option>
                                    <option value="microsoft">Microsoft</option>
                                    <option value="vmware">VMWare</option>
                                    <option value="kaspersky">Kaspersky Labs</option>
                                    <option value="rarlab">Win Rar</option>
                                    <option value="other">Other</option>
                                </select>
                            <div class="other-style" id="miscbrandother"></div>
                        </div>
                        <div class="col">
                            <label for="name">Software Name</label>
                            <br>
                            <input class="form-control" type="text" name="name" placeholder=">>> Enter a name" required>
                        </div> 
                    </div>

                    <div class="row row-form">
                        <div class="col">
                            <label for="licenseduration">License Duration</label>
                                <br>
                                <select class="form-control" name="licenseduration" onchange="showduration(this.options[this.selectedIndex].value)" required>
                                    <option selected value=""> >>> Select amount of years</option>
                                    <option value="0.5">0.5</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="other">Other</option>
                                </select>
                            <div class="other-style" id="misclicensedurationother"></div>
                        </div>
                        <div class="col">
                            <label for="licensenum">License Number</label>
                            <br>
                            <input class="form-control" type="text" name="serial" placeholder=">>> Enter a license number" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary other-style">Add to Miscellaneous Software Database</button>
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