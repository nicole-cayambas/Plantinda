<?php 
include "templates/header.php"; 




include "components/filter-search.php"; 
include "components/filter.php"; 
$productsQuery = "select * from product";
$products = $db->query($productsQuery);
include "components/products.php"; 
include "templates/footer.php"; 
?>