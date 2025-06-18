<?php



include "connection.php";

$stockId = $_POST["stockId"];
$productId = $_POST["productId"];

$deleteStock = "DELETE FROM `stock` WHERE `stock_id` = '$stockId'";
Database::iud($deleteStock);

// Then delete product record
$deleteProduct = "DELETE FROM `product` WHERE `id` = '$productId'";
Database::iud($deleteProduct);

 echo ("success");
