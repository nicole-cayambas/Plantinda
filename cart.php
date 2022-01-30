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
    <label for="prod-check">
        <div class="product-card">
            <div class="product">
            <input type="checkbox" id="prod-check">
                <img src="image/product/plant.png" width="120px" height="120px" style="border-radius:12px;">
                <div style="margin-top: 20px;">
                    <p style="color:#555555;">thisSeller</p>
                    <h3 class="normal-weight">Plant Name</h3>
                </div>
            </div>
            <p class="align">Php 50</p>
            <p class="align">3</p>
            <p class="align">Php 150</p>
            <a href="" class="align-small btn">Delete</a>
        </div>
    </label>
    <div class="product-card green">
        <a href="" style="text-decoration:underline;">Delete All</a>
        <h2>Total: Php 150.00</h2>
        <btn type="submit" class="btn">Check Out</a>
    </div>
</form>
