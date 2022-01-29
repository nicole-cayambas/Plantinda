<?php include 'templates/header.php';
require '../db/config.php';
$sql = "select * from product";
$rows = $db->query($sql);
?>

<div style="width:90vw;" class="mx-auto">
<br>
    <h1>Products</h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col" class="col-md-1">#</th>
                <th scope="col" class="col-md-2">Name</th>
                <th scope="col" class="col-md-1">Rating</th>
                <th scope="col" class="col-md-2">Picture</th>
                <th scope="col" class="col-md-2">Seller</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php while($row = $rows->fetch_assoc()): ?>
                <th><?php echo $row['id'] ?></th>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['rating'] ?></td>
                <td><img src="../<?php echo $row['picture'] ?>" width="50px" height="50px"></td>
                <td><?php $sellerID=$row['seller_id'];
                $sql2 = "select * from sellers where id='$sellerID'";
                $seller = $db->query($sql2)->fetch_assoc();
                echo $seller['username']; ?></td>
                <td class="col-md-1"><a href="" class="btn btn-success">Edit</a></td>
                <td class="col-md-1"><a href="" class="btn btn-danger">Delete</a></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
<?php include 'templates/footer.php';?>