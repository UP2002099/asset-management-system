<?php
    session_start();

    if (session_destroy()) {
        header("Location: http://localhost/inventory_management_system/index/landing.php");
    }

?>