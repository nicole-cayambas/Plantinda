<?php
require "db/config.php";
if(isset($_SESSION['username'])){
    if(isset($_POST['addToWishlist'])){
        $product_id = $_POST['product_id'];
        $user_id = $_SESSION['id'];
        $sql = "insert into wishlist (product_id, user_id) values ('$product_id', '$user_id')";
        $val = $db->query($sql);
        if($val){
            echo '<script>alert("Added to Wishlist") 
                history.back()
                </script>';
        } else {
            echo '<script>alert("Error")
            history.back()
            </script>';
        }
    }
} else {
    echo '<script>alert("Log In needed")</script>';
    header('location:session/login.php');
}
?>