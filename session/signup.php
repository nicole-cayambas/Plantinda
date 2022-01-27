<link rel="stylesheet" href="../css/form.css">
<div class="form-wrap">
    <form class="form" action="registration.php" method="POST">
        <label for="firstName">First Name</label>
        <input type="text" name="firstName" id="firstName" required>
        <label for="lastName">Last Name</label>
        <input type="text" name="lastName" id="lastName" required>
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <label for="phoneNumber">Phone Number</label>
        <input type="number" name="phoneNumber" id="phoneNumber" required>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>
        <label for="username">Password</label>
        <input type="password" name="password" id="password" required>
        <div style="display:flex; justify-content:center; align-items:center; gap: 10px;">
            <input type="radio" name="userType" id="buyer" value="buyer" checked>
            <label for="buyer">Buyer</label>
            <input type="radio" name="userType" id="seller" value="seller">
            <label for="seller">Seller</label>
        </div>
        <button type="submit">Sign Up</button>
        <a href="login.php">Login</a>
</form>
</div>