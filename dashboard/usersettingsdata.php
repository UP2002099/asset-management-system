<?php

    require "../index/connection.php";
    session_start();

    $change = $_POST['change'];

    if ($change == "forusername") {
        $id = $_SESSION['id'];
        $sessionpass = $_SESSION['password'];
        $newusername = $_POST['newusername'];

        $confirm = $_POST['confirm'];
        $hashconfirm = hash('sha256', $confirm);

        if ($hashconfirm != $sessionpass) {
            echo "Incorrect Password! Retry again.";

        } else {
            $update = "UPDATE login SET username = '$newusername' WHERE id = '$id'";
            $updateout = mysqli_query($connection, $update);

            if (!$updateout) {
                $_SESSION['userfail'] = die(mysqli_error($connection));
                header("Location: http://localhost/inventory_management_system/dashboard/usersettingfail.php");
            } else {
                header("Location: http://localhost/inventory_management_system/index/landing_upusersetting.php");
            }
        }

    } else if ($change == "forpassword") {
        $id = $_SESSION['id'];
        $sessionpass = $_SESSION['password'];
        $oldpassword = $_POST["oldpassword"];
        $hashlogoldpass = hash('sha256', $oldpassword);
        $newpassword = $_POST['newpassword'];
        $hashlognewpass = hash('sha256', $newpassword);

        if ($sessionpass != $hashlogoldpass) {
            echo "Incorrect Password! Retry again.";

        } else {
            $update = "UPDATE login SET password = '$hashlognewpass' WHERE id = '$id'";
            $updateout = mysqli_query($connection, $update);

            if (!$updateout) {
                $_SESSION['userfail'] = die(mysqli_error($connection));
                header("Location: http://localhost/inventory_management_system/dashboard/usersettingfail.php");
            } else {
                header("Location: http://localhost/inventory_management_system/index/landing_upusersetting.php");
            }
        }

    } else if ($change == "foremail") {
        $id = $_SESSION['id'];
        $sessionpass = $_SESSION['password'];
        $newemail = $_SESSION['newemail'];

        $confirm = $_POST['confirm'];
        $hashlogpass = hash('sha256', $confirm);
        
        if ($hashlogpass != $sessionpass) {
            echo "Incorrect Password! Retry again.";

        } else {
            $update = "UPDATE login SET email = '$newemail' WHERE id = '$id'";
            $updateout = mysqli_query($connection, $update);

            if (!$updateout) {
                $_SESSION['userfail'] = die(mysqli_error($connection));
                header("Location: http://localhost/inventory_management_system/dashboard/usersettingfail.php");
            } else {
                header("Location: http://localhost/inventory_management_system/index/landing_upusersetting.php");
            }
        }
    }

?>