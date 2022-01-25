<?php

include 'templates/header.php';

?>
<div class="selected-product-wrap">
    <div class="selected-product">
        <div class="selected-product-pic"></div>
        <div class="selected-product-summary"></div>
    </div>
    <div class="selected-product-pic-roll"></div>
</div>
<?php include 'components/seller-card.php'?>
<?php include 'components/order-card.php'?>
<div class="selected-product-details-wrap">
    <p>Product Details</p>
    <p>Lore ipsum dolor sit amet</p>
    <div class="selected-product-pic-gallery">
        <img src="" alt="">
        <img src="" alt="">
    </div>
</div>
<?php include 'components/reviews.php'?>