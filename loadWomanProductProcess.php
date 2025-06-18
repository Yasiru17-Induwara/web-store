<?php

include "connection.php";

$pageno = 0;

$page = $_POST["p"];
$wm = $_POST["wm"];


if (0 != $page) {
    $pageno = $page;
} else {
    $pageno = 1;
}

if ($wm == 1) {




    $q = "SELECT * FROM `stock` INNER JOIN `product` ON `stock`.`product_id` = `product`.`id`  WHERE `product`.`gender_gender_id` = '2' AND `category_cat_id` = '1' ORDER BY `stock`.`stock_id` ASC ";
    $rs = Database::search($q);

    $num = $rs->num_rows;

    $results_per_page = 12;
    $num_of_pages = ceil($num / $results_per_page);

    $page_results = ($pageno - 1) * $results_per_page;


    $q2 = $q . " LIMIT $results_per_page OFFSET $page_results";
    $rs2 = Database::search($q2);

    $num2 = $rs2->num_rows;


    if ($num2 == 0) {
        echo ("No Available Stock to load");
    } else {
        // load products here

?>

        <div id="womanShirtArea" class="col-12 product-section-heading bg-black d-flex text-light position-sticky top-0">
            Woman shirts
        </div>


        <div class="col-12 woman-men-section-grid " style=" margin-bottom: 100px;">

            <?php
            for ($i = 0; $i < $num2; $i++) {
                $d = $rs2->fetch_assoc();

            ?>
                <!-- product card -->


                <div class="product-card ">
                    <div class=" product-image-holder">
                        <img src="<?php echo $d["path"] ?>" alt="">
                    </div>
                    <div class=" card-details-holder">
                        <div class=" product-title text-light mt-2 mb-4"><?php echo $d["title"] ?></div>
                        <div class=" product-price text-light mb-3"><?php echo $d["price"] ?> LKR</div>
                    </div>
                </div>


                <!-- product card -->
            <?php

            }

            ?>
</div>



            <!-- pagination -->
            <div class=" col-12  mt-5  ">
            </div>
            <div class=" col-12 d-flex justify-content-center align-items-center mt-auto  p-5  ">

                <nav aria-label="page navigation example my-auto  ">
                    <ul class="pagination pagination-lg">
                        <li class="page-item"><a class="page-link" <?php
                                                                    if ($pageno <= 1) {
                                                                        echo ("#");
                                                                    } else {
                                                                    ?> onclick="loadWomanProducts(<?php echo ($pageno - 1) ?>);" <?php
                                                                                                                                }
                                                                                                                                    ?>>Previous</a></li>

                        <?php
                        for ($y = 1; $y < $num_of_pages; $y++) {
                            if ($y == $pageno) {
                        ?>
                                <li class="page-item active"><a class="page-link" onclick="loadWomanProducts(<?php echo $y ?>)"><?php echo $y ?></a></li>
                            <?php

                            } else {
                            ?>
                                <li class="page-item"><a class="page-link" onclick="loadWomanProducts(<?php echo $y ?>)"><?php echo $y ?></a></li>
                        <?php
                            }
                        }

                        ?>


                        <li class="page-item"><a class="page-link" <?php
                                                                    if ($pageno <= 1) {
                                                                        echo ("#");
                                                                    } else {
                                                                    ?> onclick="loadWomanProducts(<?php echo ($pageno + 1) ?>);" <?php
                                                                                                                                }

                                                                                                                                    ?>>Next</a></li>
                    </ul>
                </nav>
            </div>
            <!-- pagination -->
            <?php
            ?>
            <?php
            ?>
        
    <?php
    }
} elseif ($wm == 2) {


    $q3 = "SELECT * FROM `stock` INNER JOIN `product` ON `stock`.`product_id` = `product`.`id`  WHERE `product`.`gender_gender_id` = '2' AND `category_cat_id` = '2' ORDER BY `stock`.`stock_id` ASC ";
    $rs3 = Database::search($q3);

    $num3 = $rs3->num_rows;

    $results_per_page = 12;
    $num_of_pages2 = ceil($num3 / $results_per_page);

    $page_results2 = ($pageno - 1) * $results_per_page;


    $q4 = $q3 . " LIMIT $results_per_page OFFSET $page_results2";
    $rs4 = Database::search($q4);

    $num4 = $rs4->num_rows;


    if ($num4 == 0) {
        echo ("No Available Stock to load");
    } else {
        // load products here

    ?>

        <div id="womanPantArea" class="col-12 product-section-heading bg-black d-flex text-light position-sticky top-0">
            Woman shirts
        </div>


        <div class="col-12 woman-men-section-grid " style=" margin-bottom: 100px;">

            <?php
            for ($z = 0; $z < $num4; $z++) {
                $d2 = $rs4->fetch_assoc();

            ?>
                <!-- product card -->


                <div class="product-card ">
                    <div class=" product-image-holder">
                        <img src="<?php echo $d2["path"] ?>" alt="">
                    </div>
                    <div class=" card-details-holder">
                        <div class=" product-title text-light"><?php echo $d2["title"] ?></div>
                        <div class=" product-price text-light"><?php echo $d2["price"] ?> LKR</div>
                    </div>
                </div>


                <!-- product card -->
            <?php

            }

            ?>

        </div>


        <!-- pagination -->
        <div class=" col-12  mt-5  ">

            <div class=" col-12 d-flex justify-content-center align-items-center mt-auto  p-5  ">

                <nav aria-label="page navigation example my-auto  ">
                    <ul class="pagination pagination-lg">
                        <li class="page-item"><a class="page-link" <?php
                                                                    if ($pageno <= 1) {
                                                                        echo ("#");
                                                                    } else {
                                                                    ?> onclick="loadWomanProducts(<?php echo ($pageno - 1) ?>);" <?php
                                                                                                                                }
                                                                                                                                    ?>>Previous</a></li>

                        <?php
                        for ($b = 1; $b < $num_of_pages2; $b++) {
                            if ($b == $pageno) {
                        ?>
                                <li class="page-item active"><a class="page-link" onclick="loadWomanProducts(<?php echo $b ?>)"><?php echo $b ?></a></li>
                            <?php

                            } else {
                            ?>
                                <li class="page-item"><a class="page-link" onclick="loadWomanProducts(<?php echo $b ?>)"><?php echo $b ?></a></li>
                        <?php
                            }
                        }

                        ?>


                        <li class="page-item"><a class="page-link" <?php
                                                                    if ($pageno <= 1) {
                                                                        echo ("#");
                                                                    } else {
                                                                    ?> onclick="loadWomanProducts(<?php echo ($pageno + 1) ?>);" <?php
                                                                                                                                }

                                                                                                                                    ?>>Next</a></li>
                    </ul>
                </nav>
            </div>
            <!-- pagination -->

        </div>
<?php
    }
}
