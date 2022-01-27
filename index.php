<?php 
include "templates/header.php"; 


$productsQuery = "select * from product";
$products = $db->query($productsQuery);

include "components/filter-search.php"; 
include "components/filter.php"; 
include "components/products.php"; 
include "templates/footer.php"; 
?>