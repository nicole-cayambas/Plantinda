<?php include 'templates/header.php';
?>
<div class="container" style="max-width: 500px;">
    <form action="validation.php" method="POST" style="margin-top: 70px;">
        <h1 style="text-align: center;">Login</h1>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary btn-block">Login</button>
    <a href="signup.php" class="btn btn-outline-primary btn-sm btn-block">Sign Up</a>
    </form>
</div>
<?php include 'templates/footer.php';?>
