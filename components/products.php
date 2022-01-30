<link rel="stylesheet" href="css/products.css">
<section class="products-section">
<?php while($product = $products->fetch_assoc()): ?>
    <?php 
        include "templates/product-card.php"; 
        ?>
<?php endwhile; ?>
</section>