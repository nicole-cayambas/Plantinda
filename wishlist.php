<?php include "templates/header.php";?>
<link rel="stylesheet" href="css/wishlist.css">
<h1>Wishlist</h1><br>
<div class="wishlist-wrap">
<?php
if(!isset($_SESSION['username'])){
    echo '<script>alert("Log In needed")</script>';
    header('location:session/login.php');
} else {
    $user_id = $_SESSION['id'];
    $query = "select * from wishlist where user_id='$user_id'";
    $wishlists = $db->query($query);
    while($wishlist = $wishlists->fetch_assoc()){
        $product_id = $wishlist['product_id'];
        $productQuery = "select * from product where id='$product_id'";
        $products = $db->query($productQuery);?>
        <section class="products-section">
        <?php while($product = $products->fetch_assoc()): ?>
            <?php 
                include "templates/product-card.php"; 
                ?>
        <?php endwhile; ?>
        </section>
    <?php }
    } ?>
</div>