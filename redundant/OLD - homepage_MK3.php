<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: http://localhost/inventory_management_system/index/landing.php");
    }
?>

<!doctype html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .list-group-item {
            position: relative;
            display: block;
            padding: .5rem 1rem;
            margin-bottom: -1px;
            background-color: #fff;
            border: 1px solid rgba(0,0,0,.125);
        }
    </style>
</head>
<body>
<div class="container-fluid px-0">
        <div class="d-flex flex-row no-gutters">
            <div class="col">
                <div class="card-header">
                    <div class="d-flex justify-content-between">                    
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="homepage.php">Dashboard</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Inventory Management</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="invmanagehard.php">Manage Hardware</a>
                                    <a class="dropdown-item" href="invmanagesoft.php">Manage Software</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Inventory Editor</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="invedithard.php">Add Hardware</a>
                                    <a class="dropdown-item" href="inveditsoft.php">Add Software</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="nav nav-tabs card-header-tabs">
                            <?php
                            if ($_SESSION['status'] == 1) { //1 is normal user, 10 and above is admin
                                ?>
                                <li class="nav-item">
                                    <a class="nav-link disabled">Admin</a>
                                </li>
                            <?php
                            } else {
                                ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="admin.php">Admin</a>
                                </li>
                            <?php
                            }
                            ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <?php
                                        echo $_SESSION['username'];
                                    ?>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="usersettings.php">User Settings</a>
                                    <a class="dropdown-item" href="#">Settings_2</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card text-center">
        <div class="jumbotron jumbotron-fluid" style="background-image: url(http://yourImageUrl.jpg); background-size: 100% 100%; margin-bottom: 0rem;">
            <div class="container">
                <h1 class="display-3">Company Name</h1>
                    <hr class="my-2">
                    <p class="lead">
                        Welcome to the dashboard, 
                        <?php 
                        echo $_SESSION['username'];
                        ?>
                    </p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="info">
            <div class="infodocs">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Notice_board</h5>
                        <div class="card-text">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <details>
                                        <summary> Notice_1 <small>Date_published</small> </summary>
                                        <p>Details and info about notice</p>
                                    </details>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="infodocs">
                <div class="card">                
                    <div class="card-body">
                        <h5 class="card-title">News_title_1</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Date_published</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>

                <div class="card">                
                    <div class="card-body">
                        <h5 class="card-title">News_title_1</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Date_published</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>