<?php include 'templates/header.php';
require '../db/config.php';
$sql = "select * from sellers";
$rows = $db->query($sql);
?>

<div style="width:90vw;" class="mx-auto">
<br>
    <h1>Stores</h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col" class="col-md-1">#</th>
                <th scope="col" class="col-md-2">Name</th>
                <th scope="col" class="col-md-2">Seller</th>
                <th scope="col" class="col-md-2">Main Products</th>
                <th scope="col" class="col-md-2">Main Markets</th>
                <th scope="col" class="col-md-2">Certification</th>
                <th scope="col" class="col-md-2">Response Time</th>
                <th scope="col" class="col-md-2">Delivery Rate</th>
                <th scope="col" class="col-md-2">Transaction</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php while($row = $rows->fetch_assoc()): ?>
                <th><?php echo $row['id'] ?></th>
                <td><?php echo $row['store_name'] ?></td>
                <td><?php echo $row['username'] ?></td>
                <td><?php echo $row['main_products'] ?></td>
                <td><?php echo $row['main_markets'] ?></td>
                <td><?php echo $row['certification'] ?></td>
                <td><?php echo $row['response_time'] ?></td>
                <td><?php echo $row['delivery_rate'] ?></td>
                <td><?php echo $row['num_transactions'] ?></td>
                <td class="col-md-1"><a href="" class="btn btn-success">Edit</a></td>
                <td class="col-md-1"><a href="" class="btn btn-danger">Delete</a></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
<?php include 'templates/footer.php';?>