<?php

include "connection.php";

$adSelected = $_POST["a"];
$price = $_POST["p"];
$qty = $_POST["q"];


if (empty($adSelected)) {
    echo "No product selected.";
} else if (empty($price)) {
    echo "Price cannot be empty.";
} else if (!is_numeric($price)) {
    echo "Price must be a numeric value.";
} else if ($price <= 0) {
    echo "Price must be greater than 0.";
} else if (empty($qty)) {
    echo "Quantity cannot be empty.";
} else if (!ctype_digit($qty)) {
    echo "Quantity must be a whole number.";
} else if ((int)$qty <= 0) {
    echo "Quantity must be greater than 0.";
} else {
}

$rs = Database::search("SELECT * FROM `stock` WHERE `product_id` = '" . $adSelected . "' AND `price` = '" . $price . "'");

$num = $rs->num_rows;
$d = $rs->fetch_assoc();

if ($num == 1) {
    $newQty = $d["qty"] + $qty;
    Database::iud("UPDATE `stock` SET `qty` = '" . $newQty . "' WHERE `stock_id` = '" . $d["stock_id"] . "'");
    echo ("Stock Updated Successfully");
} else {
    Database::iud("INSERT INTO `stock` (`price`,`qty`, `product_id`) VALUES ('". $price ."' , '". $qty ."', '". $adSelected ."')");
    echo ("New Stock Added Successfully");
}
