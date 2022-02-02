<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<form action="add-address.php" method="post" class="mx-auto" style="width:60%;margin-top:40px;">
    <div class="form-group">
        <label for="fullName">Full Name</label>
        <input type="text" class="form-control" name="fullName" id="fullName" required>
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" name="address" id="address" required>
    </div>
    <div class="form-group">
        <label for="municipality">Municipality/City</label>
        <input type="text" class="form-control" name="municipality" id="municipality" required>
    </div>
    <div class="form-group">
        <label for="zip">ZIP Code</label>
        <input type="text" class="form-control" name="zip" id="zip" required>
    </div>
    <div class="form-group">
        <label for="province">Province</label>
        <input type="text" class="form-control" name="province" id="province" required>
    </div>
    <button type="submit" name="sendAddress" class="btn btn-primary mx-auto" style="width:100%;">Submit</button>
</form>