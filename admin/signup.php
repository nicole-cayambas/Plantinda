<?php
include 'templates/header.php';
?>
<div class="container" style="max-width: 500px;">
    <form action="registration.php" method="POST">
        <h1 style="text-align: center;">Sign Up</h1>
        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Enter First Name" required>
        </div>
        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Enter Last Name" required>
        </div>
        <div class="form-group">
            <label for="phoneNumber">Phone Number</label>
            <input type="number" class="form-control" name="phoneNumber" id="phoneNumber" placeholder="Enter Last Name" required>
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="userType" id="buyer" value="buyer" checked>
            <label class="form-check-label" for="buyer">Buyer</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="userType" id="seller" value="seller">
            <label class="form-check-label" for="seller">Seller</label>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
        <a href="login.php" class="btn btn-outline-primary btn-sm btn-block">Login</a>
    </form>
</div>
<?php include 'templates/footer.php';?>
