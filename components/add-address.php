<?php

    require "../db/config.php" ;
    if(!isset($_SESSION['username'])){
        echo '<script>alert("Log In needed")</script>';
        header('location:../session/login.php');
    } else {
        if(isset($_POST['sendAddress'])){
            $address = $_POST['address'];
            $municipality = $_POST['municipality'];
            $zip = $_POST['zip'];
            $province = $_POST['province'];
            $user_id = $_SESSION['id'];
            $sql = "insert into addresses (address, municipality, zip, province, user_id) values ('$address', '$municipality', '$zip', '$province', '$user_id')";
            $val = $db->query($sql);
            $id = mysqli_insert_id($db);
            $sql2 = "update users set address='$id' where id='$user_id'";
            $db->query($sql2);
            if($val){
                header('location: ../cart.php');
            }
        }
    }


?>