<?php

include 'templates/header.php';

?>
<link rel="stylesheet" href="css/product.css">
<section class="selected-product-wrap">
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
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae iaculis nibh. Quisque scelerisque, nunc ac sagittis bibendum, tellus ligula accumsan justo, ac consectetur est ex quis eros.</p>
            <hr>
            <form id="price-ranges">
                <div>
                <input type="radio" id="price-range-1" name="1" checked>
                    <label for="price-range-1">
                        <h4>Php 200</h4>
                        <p>10-24 pcs</p>
                    </label>
                </div>
                <div>
                    <input type="radio" id="price-range-2" name="1">
                    <label for="price-range-2">
                        <h4>Php 190</h4>
                        <p>25-49 pcs</p>
                    </label>
                </div>
                <div>
                    <input type="radio" id="price-range-3" name="1">
                    <label for="price-range-3">
                        <h4>Php 180</h4>
                        <p>50-99 pcs</p>
                    </label>
                </div>
                <div>
                    <input type="radio" id="price-range-4" name="1">
                    <label for="price-range-4">
                        <h4>Php 170</h4>
                        <p>100-100000 pcs</p>
                    </label>
                </div>
            </form>
            <hr>
        </div>
    </div>
    <div class="selected-product-pic-roll">
        <div></div>
        <div></div>
        <div></div>
    </div>

    <?php include 'components/seller-card.php';?>
    
    <div class="selected-product-details-wrap">
        <h2 class="normal-weight">Product Details</h2>
        <p>Lore ipsum dolor sit amet</p>
        <div class="selected-product-pic-gallery">
            <img src="" alt="">
            <img src="" alt="">
        </div>
    </div>
    
</section>


<!-- <?php include 'components/order-card.php';?>
<?php include 'components/reviews.php';?> -->