<?php 
include "templates/header.php"; 

$sql = "select * from product";
$products = $db->query($sql);

include "components/filter-search.php"; 
include "components/filter.php"; 
include "components/products.php"; 
include "templates/footer.php"; 
?>