<?php

include 'templates/header.php';

?>
<link rel="stylesheet" href="css/product.css">
<div class="selected-product-wrap">
    <div class="selected-product">
        <div class="selected-product-pic">
            <img src="image/product/plant.png" alt="product-image">
        </div>
        <div class="selected-product-summary">
            <div class="inline space-between">
                <h2>Plant Name (L)</h2>
                <a href=""><img src="image/Icon- Heart.png" alt="Add to Wishlist"></a>
            </div>
            <div class="rating">
                <img src="image/Icon- star shaded.png">
                <img src="image/Icon- star shaded.png">
                <img src="image/Icon- star shaded.png">
                <img src="image/Icon- star shaded.png">
                <img src="image/Icon- star shaded.png">
            </div>
            <p style="display: block;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae iaculis nibh. Quisque scelerisque, nunc ac sagittis bibendum, tellus ligula accumsan justo, ac consectetur est ex quis eros.</p>
            <form id="price-ranges">
                <input type="radio" id="price-range-1">
                <label for="price-range-1">
                    <h4>Php 200</h4>
                    <p>10-24 pcs</p>
                </label>
                <input type="radio" id="price-range-2">
                <label for="price-range-1">
                    <h4>Php 200</h4>
                    <p>10-24 pcs</p>
                </label>
                <input type="radio" id="price-range-3">
                <label for="price-range-1">
                    <h4>Php 200</h4>
                    <p>10-24 pcs</p>
                </label>
                <input type="radio" id="price-range-4">
                <label for="price-range-1">
                    <h4>Php 200</h4>
                    <p>10-24 pcs</p>
                </label>
            </form>
            </div>
        </div>
    </div>
    <div class="selected-product-pic-roll"></div>
</div>
<?php include 'components/seller-card.php'?>
<!-- <div class="selected-product-details-wrap">
    <p>Product Details</p>
    <p>Lore ipsum dolor sit amet</p>
    <div class="selected-product-pic-gallery">
        <img src="" alt="">
        <img src="" alt="">
    </div>
</div> -->
<?php include 'components/order-card.php'?>
<?php include 'components/reviews.php'?>