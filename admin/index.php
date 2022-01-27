<?php 
require '../db/config.php';
include 'templates/header.php';?>
<?php
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>

    <h1>Welcome <?php echo $_SESSION['username']; ?>!</h1>
    <a href="logout.php" class="btn btn-neutral">Logout</a>

<?php include 'templates/footer.php';?>
