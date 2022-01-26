<?php require "db/config.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Plantinda</title>
</head>
<body>
    <header>
        <div id="logo">
            <a href="index.php" class="a-center"><h1>plantinda</h1></a>
        </div>
        <div id="search-container">
            <form action="search.php" method="post">
                <input id="search-input" type="text" placeholder="What are you looking for?">
                <a href="" id="searchBtn" class="a-center"><img src="image/Icon- Search.png" alt="Search"></a>
            </form>
        </div>
        <nav>
            <a href="wishlist.php" class="a-center"> 
                <img src="image/Icon- Heart.png" alt="Wishlist" width="25px" height="25px">
            </a>
            <a href="cart.php" class="a-center"> 
                <img src="image/Icon- Cart.png" alt="Cart" width="15px" height="15px">
            </a>
            <a href="orders.php" class="a-center"> 
                <img src="image/Icon- Document.png" alt="Orders" width="22px" height="22px">
            </a>
            <a href="profile.php" class="a-center">
                <img src="image/Icon- User.png" alt="Profile" width="25px" height="25px">
            </a>
        </nav>
    </header>
    <div id="main">