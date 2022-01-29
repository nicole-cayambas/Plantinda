<?php include 'templates/header.php';
require '../db/config.php';
$sql = "select * from users";
$rows = $db->query($sql);
?>

<div style="width:90vw;" class="mx-auto">
<br>
    <h1>Users</h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col" class="col-md-1">#</th>
                <th scope="col" class="col-md-2">Username</th>
                <th scope="col" class="col-md-1">First Name</th>
                <th scope="col" class="col-md-2">Last Name</th>
                <th scope="col" class="col-md-2">Email</th>
                <th scope="col" class="col-md-2">Phone Number</th>
                <th scope="col" class="col-md-2">Password</th>
                <th scope="col" class="col-md-2">User Type</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php while($row = $rows->fetch_assoc()): ?>
                <th><?php echo $row['id'] ?></th>
                <td><?php echo $row['username'] ?></td>
                <td><?php echo $row['firstName'] ?></td>
                <td><?php echo $row['lastName'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['phoneNumber'] ?></td>
                <td><?php echo $row['password'] ?></td>
                <td><?php echo $row['userType'] ?></td>
                <td class="col-md-1"><a href="" class="btn btn-success">Edit</a></td>
                <td class="col-md-1"><a href="" class="btn btn-danger">Delete</a></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
<?php include 'templates/footer.php';?>