<?php 
require '../db/config.php';
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
include 'templates/header.php';
?>

    
    
    <h1 style="display:block;">Welcome <?php echo $_SESSION['username']; ?>!</h1>
    

<?php include 'templates/footer.php';?>
