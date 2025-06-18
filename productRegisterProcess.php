<?php
include "connection.php";



$title = $_POST["t"];
$description = $_POST["d"];
$gender = $_POST["g"];
$category = $_POST["c"];


if (empty($title)) {
    echo ("PLease Enter Title");
} else if (empty($description)) {
    echo ("PLease Enter Description");
} else if (empty($_FILES["image"])) {
    echo ("PLease Add a Product Image");
} else {

    $rs = Database::search("SELECT * FROM `product` WHERE `title` = '" . $title . "'");
    $num = $rs->num_rows;

    if ($num > 0) {
        echo ("Your Product id already Exist");
    } else {
        $path = "resources/productImages/" . uniqid() . ".jpg";
        move_uploaded_file($_FILES["image"]["tmp_name"], $path);

        Database::iud(" INSERT INTO `product` (`title`, `description`, `path`,`gender_gender_id`, `category_cat_id`) VALUES ('". $title ."', '". $description ."', '". $path ."', '".$gender ."', '". $category ."')");

        echo("success");
    }
}
