<?php 
include "templates/header.php"; 
if(!isset($_SESSION['username'])){
    echo '<script>alert("Log In needed")</script>';
    header('location:session/login.php');
} else {
    $id = $_SESSION['id'];
    $profileQuery = "select * from users where id='$id'";
    $profile = $db->query($profileQuery);
    $profile = $profile->fetch_assoc();
}
?>
<link rel="stylesheet" href="css/profile.css">
<section id="profile-wrap">
    <h1>Profile</h1>
    <form action="" class="profile-info">
        <div class="form-control">
            <label for="fullName">Full Name</label>
            <input type="text" id="fullName" value="<?php echo $profile['firstName'] . ' ' . $profile['lastName'];?>" readonly>
            <button class="btn-small">Edit</button>
        </div>
        <div class="form-control">
            <label for="email">Email</label>
            <input type="text" id="email" value="<?php echo $profile['email'];?>" readonly>
            <button class="btn-small">Edit</button>
        </div>
        <div class="form-control">
            <label for="phoneNumber">Phone Number</label>
            <input type="number" id="phoneNumber" value="<?php echo $profile['phoneNumber'];?>" readonly>
            <button class="btn-small">Edit</button>
        </div>
        <div class="form-control">
            <label for="username">Username</label>
            <input type="text" id="username" value="<?php echo $profile['username'];?>" readonly>
            <button class="btn-small">Edit</button>
        </div>
        <div class="form-control">
            <label for="password">Password</label>
            <input type="text" id="password" value="<?php echo $profile['password'];?>" readonly>
            <button class="btn-small">Edit</button>
        </div>
        <div class="form-control">
            <label for="address">Address</label>
            <?php 
            $addressQuery = "select * from addresses where id='$profile[address]'";
            $address = $db->query($addressQuery);
            $address = $address->fetch_assoc();
            ?>
            <input type="text" id="address" value="<?php echo $address['address']
            . ', ' . $address['municipality'] . ', ' . $address['zip'] . ', ' . $address['province'];?>" readonly>
            <button class="btn-small">Edit</button>
        </div>
    </form>
    <br>
    <a href="session/logout.php">
        <div class="btn-neutral">Logout</div>
    </a>
</section>
<?php include "templates/footer.php"; ?>