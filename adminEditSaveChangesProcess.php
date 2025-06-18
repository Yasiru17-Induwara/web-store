<?php
include "connection.php";

$sid = $_POST["sid"];
$title = $_POST["title"];
$desc = $_POST["desc"];
$gender = $_POST["gender"];
$cat = $_POST["cat"];
$price = $_POST["price"];
$stock = $_POST["stock"];

// First update the product table
Database::iud("UPDATE `product` SET 
  `title` = '$title', 
  `description` = '$desc', 
  `gender_gender_id` = '$gender', 
  `category_cat_id` = '$cat' 
  WHERE `id` = (SELECT `product_id` FROM `stock` WHERE `stock_id` = '$sid')");

// Then update the stock table
Database::iud("UPDATE `stock` SET 
  `price` = '$price', 
  `qty` = '$stock' 
  WHERE `stock_id` = '$sid'");

// Handle image only if uploaded
if (isset($_FILES["image"]) && $_FILES["image"]["size"] > 0) {
    $imgName = $_FILES["image"]["name"];
    $tmp = $_FILES["image"]["tmp_name"];
    $newPath = "resources/products/" . uniqid() . "_" . $imgName;

    if (move_uploaded_file($tmp, $newPath)) {
        Database::iud("UPDATE `product` SET `path` = '$newPath' 
        WHERE `id` = (SELECT `product_id` FROM `stock` WHERE `stock_id` = '$sid')");
    }
}

echo "success";
?>
