
<link rel="stylesheet" href="css/product-card.css">
<div class="product-card">
    <a href="product.php" class="product-card-link">
        <img src="<?php echo $product['picture'];?>" alt="product-picture" class="product-pic" width="280px" height="280px">
    </a>
    <div class="product-details">
        <a href="product.php" class="product-card-link">
            <h3 class="product-title"><?php echo $product['name'];?></h3>
        </a>
        <div class="rating inline">
            <?php for($i = 0; $i < $product['rating']; $i++) {?>
                <img src="image/Icon- Star shaded.png">
            <?php } ?>
            <?php for($i = 0; $i < (5 - $product['rating']); $i++) {?>
                <img src="image/Icon- Star unshaded.png">
            <?php } ?>
        </div>
        <div class="price-range inline">
            <h3 class="price-range">Php <?php echo $product['min-price'];?> - Php <?php echo $product['max-price'];?></h3>
            <a href=""><img src="image/Icon- Heart.png" alt="Add to wishlist"></a>
        </div>
        <p class="min-order">Min order: <?php echo $product['min-order'];?> pc</p>
    </div>
    
</div>
