<?php 

include "connection.php";


$gender = $_POST["g"];
$category = $_POST["c"];




$rs  = Database::search(" SELECT * FROM `product` WHERE `gender_gender_id` = '". $gender ."' AND `category_cat_id` = '". $category ."'");

while ($row = $rs->fetch_assoc()) {
    echo ('<option value="'.$row["id"].'">'.$row["title"].'</option>');
}
?>