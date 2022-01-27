<?php 
    require '../db/config.php';
    $username = ($_POST['username']);
    $password = ($_POST['password']);
    $firstName = ($_POST['firstName']);
    $lastName = ($_POST['lastName']);
    $email = ($_POST['email']);
    $phoneNumber = ($_POST['phoneNumber']);
    $userType = ($_POST['userType']);
    $authSQL = "select * from users where username='$username'";
    $users = $db->query($authSQL);
    if(mysqli_num_rows($users)==1){
        echo '<p class="text-danger">Username already taken.</p>';
    } else {
        $reg = "insert into users(username, password, firstName, lastName, email, phoneNumber, userType) values ('$username', '$password', '$firstName', '$lastName', '$email', '$phoneNumber', '$userType')";
        $db->query($reg);
        echo '<script>alert("Signup Successful")</script>';
        header('location: login.php');
    }
?>
