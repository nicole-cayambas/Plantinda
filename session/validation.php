<?php 
    require '../db/config.php';
    $username = ($_POST['username']);
    $password = ($_POST['password']);
    $authSQL = "select * from users where username='$username' AND password='$password'";
    $user = $db->query($authSQL);
    if(mysqli_num_rows($user)==1){
        $_SESSION['username'] = $username;
        $user = $user->fetch_assoc();
        $_SESSION['id'] = $user['id'];
        header('location: ../index.php');
    } else {
        header('location: login.php');
    }
?>
