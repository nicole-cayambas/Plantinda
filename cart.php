<?php include "templates/header.php";
?>
<link rel="stylesheet" href="css/cart.css">
<form class="cart-wrap">
    <h1>Cart</h1>
    <div class="labels">
        <p class="product-label">Product</p>
        <p class="label">Unit Price</p>
        <p class="label">Quantity</p>
        <p class="label">Total</p>
        <div class="label"></div>
    </div>
    <hr>
    <br>
    <?php 
    if(!isset($_SESSION['username'])){
        echo '<script>alert("Log In needed")</script>';
        header('location:session/login.php');
    } else {
        $user_id = $_SESSION['id'];
        $query = "select * from cart where user_id='$user_id'";
        $carts = $db->query($query);
        while($cart = $carts->fetch_assoc()){
            $product_id = $cart['product_id'];
            $productQuery = "select * from product where id='$product_id'";
            $products = $db->query($productQuery);?>
            <?php while($product = $products->fetch_assoc()):?>
            <label>
                <div class="product-card">
                    <div class="product" id="">
                    <input type="checkbox">
                        <img src="<?php echo $product['picture']; ?>" width="120px" height="120px" style="border-radius:12px;">
                        <div style="margin-top: 20px;">
                        <?php 
                        $seller_id = $product['seller_id'];
                        $sellerQuery = "select * from sellers where id='$seller_id'";
                        $seller = $db->query($sellerQuery);
                        $seller = $seller->fetch_assoc();
                        $seller_name = $seller['username'];
                        ?>
                            <p style="color:#555555;"><?php echo $seller_name; ?></p>
                            <h3 class="normal-weight"><?php echo $product['name']; ?></h3>
                        </div>
                    </div>
                    <p class="align"><?php echo $cart['unit_price']; ?></p>
                    <p class="align"><?php echo $cart['quantity']; ?></p>
                    <p class="align totalPrice"><?php echo $cart['quantity'] * $cart['unit_price']; ?></p>
                    <a href="" class="align-small btn">Delete</a>
                </div>
            </label>
            <?php endwhile; ?>
        <?php }
    }?>
    
    
    <div class="product-card green">
        <a href="" style="text-decoration:underline;">Delete All</a>
        <h2 id="sumPrice"></h2>
        <btn type="submit" class="btn">Check Out</a>
    </div>
</form>
<script src="js/cart.js"></script>