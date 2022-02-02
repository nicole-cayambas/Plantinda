<?php 
include 'templates/header.php'; 
$id = (int)$_GET['id'];
    $sql = "select * from product where id = '$id'";
    $products = $db->query($sql);
    $product = $products->fetch_assoc();
    // if(isset($_POST['send'])){
    //     $title = htmlspecialchars($_POST['title']);
    //     $description = htmlspecialchars($_POST['description']);
    //     $status = htmlspecialchars($_POST['status']);
    //     $sql2 = "update tasks set title = '$title', description = '$description', status = '$status' where id = '$id'";
    //     $db->query($sql2);
    //     header('location: index.php');
    // }

?>
<link rel="stylesheet" href="css/product.css">

<div class="product-page">
    <section class="product-main">
        <div class="product-overview">
            <div class="prod-pic-wrap">
                <img src="<?php echo $product['picture']; ?>" alt="product-image">
            </div>
            <div class="prod-summary">
                <form action="addToWishlist.php" method="post" class="inline space-between">
                    <input type="number" name="product_id" value="<?php echo $product['id']; ?>" style="display:none;">
                    <h2><?php echo $product['name']; ?></h2>
                    <button type="submit" name="addToWishlist"><img src="image/Icon- Heart.png" alt="Add to Wishlist"></button>
                </form>
                <div class="rating inline">
                    <?php for($i = 0; $i < $product['rating']; $i++) {?>
                        <img src="image/Icon- Star shaded.png">
                    <?php } ?>
                    <?php for($i = 0; $i < (5 - $product['rating']); $i++) {?>
                        <img src="image/Icon- Star unshaded.png">
                    <?php } ?>
                </div>
                <p><?php echo $product['product_summary']; ?></p>
                <hr>
                <form id="price-ranges">
                    <div>
                    <input type="radio" id="price-range-1" 
                    name="1" 
                    value="<?php echo $product['price_range_1']; ?>" 
                    checked 
                    onchange="selectPrice(this)">
                        <label for="price-range-1">
                            <h4>Php <?php echo $product['price_range_1']; ?></h4>
                            <p><?php echo $product['price_range_1_min']; ?> - <?php echo $product['price_range_1_max']; ?> pcs</p>
                        </label>
                    </div>
                    <div>
                        <input type="radio" id="price-range-2" 
                        name="1" 
                        value="<?php echo $product['price_range_2']; ?>" 
                        onchange="selectPrice(this)">
                        <label for="price-range-2">
                            <h4>Php <?php echo $product['price_range_2']; ?></h4>
                            <p><?php echo $product['price_range_2_min']; ?> - <?php echo $product['price_range_2_max']; ?> pcs</p>
                        </label>
                    </div>
                    <div>
                        <input type="radio" id="price-range-3" 
                        name="1" 
                        value="<?php echo $product['price_range_3']; ?>" 
                        onchange="selectPrice(this)">
                        <label for="price-range-3">
                            <h4>Php <?php echo $product['price_range_3']; ?></h4>
                            <p><?php echo $product['price_range_3_min']; ?> - <?php echo $product['price_range_3_max']; ?> pcs</p>
                        </label>
                    </div>
                    <div>
                        <input type="radio" id="price-range-4" 
                            name="1" 
                            value="<?php echo $product['price_range_4']; ?>" 
                            onchange="selectPrice(this)">
                        <label for="price-range-4">
                            <h4>Php <?php echo $product['price_range_4']; ?></h4>
                            <p><?php echo $product['price_range_4_min']; ?> - <?php echo $product['price_range_4_max']; ?> pcs</p>
                        </label>
                    </div>
                </form>
                <hr>
            </div>
        </div>
        <div id="seller-card">
            <div id="seller-card-icon">
                <img src="image/supplier.png" alt="">
            </div>
            <div class="seller-card-info">
                <p style="color: rgb(138, 138, 138);">Supplier</p>
                <?php 
                $seller_id = $product['seller_id']; 
                $sellerQuery = "select * from sellers where id='$seller_id'";
                $seller = $db->query($sellerQuery);
                $seller = $seller->fetch_assoc();
                ?>
                <h2 class="normal-weight"><?php echo $seller['username']; ?></h2>
                <br>
                <p>Main products: <?php echo $seller['main_products']; ?>
                    <br>Main markets: <?php echo $seller['main_markets']; ?>
                    <br>Certifications: Best garden
                </p>
                <br>
                <div class="badge-section">
                    <p class="badge"><?php echo $seller['response_time']; ?>% response time</p>
                    <p class="badge"><?php echo $seller['delivery_rate']; ?>% delivery rate</p>
                    <p class="badge"><?php echo $seller['num_transactions']; ?> transactions</p>
                </div>
            </div>
        </div>
        <div class="prod-details-wrap">
            <h2 class="normal-weight">Product Details</h2>
            <div class="prod-details">
                <p>Lore ipsum dolor sit amet. Lore ipsum dolor sit amet. Lore ipsum dolor sit amet. Lore ipsum dolor sit amet. Lore ipsum dolor sit amet. Lore ipsum dolor sit amet. Lore ipsum dolor sit amet.Lore ipsum dolor sit amet. Lore ipsum dolor sit amet. Lore ipsum dolor sit amet.Lore ipsum dolor sit amet. Lore ipsum dolor sit amet.Lore ipsum dolor sit amet. Lore ipsum dolor sit amet.Lore ipsum dolor sit amet.</p>
                <div class="selected-product-pic-gallery">
                    <img src="" alt="">
                    <img src="" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="side">
        <div class="order-wrap">
            <h3 class="grey-text normal-weight">Order Form</h3>
            <form action="addOrder.php" method="post" class="order-form">
                <input type="number" name="product_id" value="<?php echo $product['id']; ?>" style="display:none;">
                <input type="number" name="seller_id" value="<?php echo $product['seller_id']; ?>" style="display:none;">
                <input type="number" id="inputUnitPrice" name="unitPrice" style="display:none;">
                <div class="form-control">
                    <label for="quantity">Quantity</label>
                    <input type="number" id="quantity" name="quantity">
                </div>
                <h4 id="price-order" name="price-order">Php 000.00</h4>
                <div class="line"></div>
                <div class="uneditable">
                    <p>Shipping</p>
                    <p class="grey-text right">303 Blue Haven Rise OBXX Street, City, Province</p>
                </div>
                <input type="number" name="shippingPrice" id="inputShippingPrice" style="display:none;">
                <h4 name="price-shipping" id="shippingShow">Php 000.00</h4>
                <div class="line"></div>
                <div class="form-control">
                    <div class="space-between">
                        <p>Payment</p>
                        <select id="payment-type" name="payment_type" onChange="paymentType()">
                            <option value="cod" default>Cash on delivery</option>
                            <option value="card">Bank Card</option>
                            <option value="gcash">GCash</option>
                            <option value="paypal">Paypal</option>
                        </select>
                    </div>
                    <div class="card-details" id="card-details">
                        <input type="number" id="card-number" name="card-number" class="grey-text" placeholder="Card Number" style="width:100%;">
                        <input type="number" id="exp-date" name="exp-date" class="grey-text" placeholder="Expiration Date" style="width:60%">
                        <input type="number" id="cvv" name="cvv" class="grey-text" placeholder="CVV" style="width:35%">
                    </div>
                </div>
                <div class="line"></div>
                <div class="uneditable">
                    <p>Delivery</p>
                    <p class="grey-text right" name="delivery-date">Estimated: 02/30/22</p>
                </div>
                <div class="line"></div>
                <div class="uneditable">
                    <p>Total</p>
                    <input type="number" name="totalPrice" id="inputTotalValue" style="display:none;">
                    <h4 id="price-total" name="price-total">Php 0000.00</h4>
                </div>
                <button type="submit" name="sendOrder" class="btn btn-black">Send Order</button>
                <button type="submit" name="addToCart" class="btn btn-outline">Add to Cart</button>
                <a href="" class="btn">Contact Supplier</a>
            </form>
        </div>
        <div class="review-wrap">
            <h2 class="normal-weight">Reviews</h2>
            <div class="reviews">
                <div class="review">
                    <hr>
                    <div class="reviewer">
                        <img src="" alt="" class="reviewer-icon">
                        <p>Buyers Inc.</p>
                    </div>
                    <div class="rating inline">
                        <img src="image/Icon- Star shaded.png">
                        <img src="image/Icon- Star shaded.png">
                        <img src="image/Icon- Star shaded.png">
                        <img src="image/Icon- Star shaded.png">
                        <img src="image/Icon- Star unshaded.png">
                    </div>
                    <p>Very amazing product!</p>
                </div>
                <div class="review">
                    <hr>
                    <div class="reviewer">
                        <img src="" alt="" class="reviewer-icon">
                        <p>Buyers Inc.</p>
                    </div>
                    <div class="rating inline">
                        <img src="image/Icon- Star shaded.png">
                        <img src="image/Icon- Star shaded.png">
                        <img src="image/Icon- Star shaded.png">
                        <img src="image/Icon- Star shaded.png">
                        <img src="image/Icon- Star unshaded.png">
                    </div>
                    <p>Very amazing product! Healthy plant! Will order again! Lorem ipsum dolor sit amet</p>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="js/product.js"></script>