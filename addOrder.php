<?php 

require "db/config.php";

if (isset($_POST['addToCart'])){
    $product_id = (int)$_POST['product_id'];
    $quantity = (int)$_POST['quantity'];
    $unit_price = (int)$_POST['unitPrice'];
    $user_id = $_SESSION['id'];
    $sql = "insert into cart (user_id, product_id, quantity, unit_price) values ('$user_id', '$product_id', '$quantity', '$unit_price')";
    $val = $db->query($sql);
    if($val) {?>
        <script>
            alert("Added to Cart")
        </script>
    <?php }
} elseif (isset($_POST['sendOrder'])) {
    $product_id = (int)$_POST['product_id'];
    $quantity = (int)$_POST['quantity'];
    $unit_price = (int)$_POST['unitPrice'];
    $shipping_price = (int)$_POST['shippingPrice'];
    $total_price = (int)$_POST['totalPrice'];
    $buyer_id = $_SESSION['id'];
    $seller_id = (int)$_POST['seller_id'];
    $payment_type = $_POST['payment_type'];
    $sql = "insert into orders (buyer_id, product_id, quantity, unit_price, shipping_price, total_price, seller_id, payment_type) values ('$buyer_id', '$product_id', '$quantity', '$unit_price', '$shipping_price', '$total_price', '$seller_id', '$payment_type')";
    $val = $db->query($sql);
    if($val) {
        echo '<script>
            alert("Order Sent!")
        </script>';
    } else {
        echo '<script>
            alert("Error")
        </script>';
    }
}
?>

<script>
    history.back();
</script>