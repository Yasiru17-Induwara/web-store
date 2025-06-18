<?php

include "connection.php";

$pageno = 0;

$page = $_POST["p"];




if (0 != $page) {
    $pageno = $page;
} else {
    $pageno = 1;
}

$q = "SELECT * FROM `stock` INNER JOIN `product` ON `stock`.`product_id` = `product`.`id`  WHERE `product`.`gender_gender_id` = '2' ORDER BY `stock`.`stock_id` ASC ";
$rs = Database::search($q);

$num = $rs->num_rows;

$results_per_page = 16;
$num_of_pages = ceil($num / $results_per_page);

$page_results = ($pageno - 1) * $results_per_page;


$q2 = $q . " LIMIT $results_per_page OFFSET $page_results";
$rs2 = Database::search($q2);

$num2 = $rs2->num_rows;


if ($num2 == 0) {
    echo ("No Available Stock to load");
} else {
    // load products here
    for ($i = 0; $i < $num2; $i++) {
        $d = $rs2->fetch_assoc();

?>
        <!-- product card -->




        <div class="product-card ">
            <div class=" product-image-holder">
                <img src="<?php echo $d["path"] ?>" alt="">
            </div>
            <div class=" card-details-holder">
                <div class=" product-title text-light"><?php echo $d["title"] ?></div>
                <div class=" product-price text-light"><?php echo $d["price"] ?> LKR</div>
            </div>
        </div>


        <!-- product card -->
    <?php

    }

    ?>


<?php

}
