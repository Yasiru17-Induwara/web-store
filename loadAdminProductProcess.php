<?php

include "connection.php";

$pageno = 0;

$page = $_POST["p"];




if (0 != $page) {
  $pageno = $page;
} else {
  $pageno = 1;
}

$q = "SELECT * FROM `stock` INNER JOIN `product` ON `stock`.`product_id` = `product`.`id`  ORDER BY `stock`.`stock_id` DESC ";
$rs = Database::search($q);

$num = $rs->num_rows;

$results_per_page = 6;
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

  <div class="col-12 admin-page-product-layout pt-5" style="box-sizing: border-box;">

    <?php

    for ($i = 0; $i < $num2; $i++) {
      $d = $rs2->fetch_assoc();

    ?>
      <!-- whole 1 product card -->
      <div class="border d-flex flex-wrap p-2 " style="height: 200px; position: relative;">

        <div class="dropdown" style="position: absolute; top: 10px; right: 10px;">
          <button class="three-dots-btn" type="button"
            id="dropdownMenuButton"
            data-bs-toggle="dropdown"
            aria-expanded="false">
            &#8942; <!-- Unicode for vertical dots -->
          </button>

          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item edit-btn" onclick="adminOpenEditModal(<?php echo $d['stock_id'] ?>)">Edit</a></li>

            <li><a class="dropdown-item text-danger" onclick="deleteProduct(<?php echo $d['stock_id'] ?>, <?php echo $d['product_id'] ?>)">Delete</a></li>
          </ul>
        </div>


        <div class="col-2  ad-product-image-holder">
          <img src="<?php echo $d["path"] ?>" class="ad-product-image" alt="">
        </div>
        <div class="col-10  d-flex flex-column px-3">
          <div class="col-12  fs-5 ad-product-title"><?php echo $d["title"] ?></div>
          <div class="col-12 mt-2 ad-product-description"><?php echo $d["description"] ?></div>
        </div>
        <div class="col-12 d-flex">
          <div class=""></div>
          <div class="col-10 offset-2 d-flex justify-content-around text-center">
            <p class="m-0 p-0">ID : <?php echo $d["id"] ?></p>
            <p class="m-0 p-0">QTY : <?php echo $d["qty"] ?></p>
            <p class="m-0 p-0">price : <?php echo $d["price"] ?> LKR</p>
          </div>
        </div>
      </div>
      <!-- whole 1 product card -->
<?php 
}

?>


  </div>
<?php


?>




<!-- pagination -->
<div class=" col-12 d-flex justify-content-center align-items-center mt-5  mt-auto position-relative bottom-0 ">
  <nav aria-label="page navigation example my-auto  ">
    <ul class="pagination pagination-lg">
    
      <?php
      for ($y = 1; $y <= $num_of_pages; $y++) {
        if ($y == $pageno) {
      ?>
          <li class="page-item active"><a class="page-link" onclick="loadAdminAllProducts(<?php echo $y ?>)"><?php echo $y ?></a></li>
        <?php

        } else {
        ?>
          <li class="page-item"><a class="page-link" onclick="loadAdminAllProducts(<?php echo $y ?>)"><?php echo $y ?></a></li>
      <?php
        }
      }

      ?>


      
    </ul>
  </nav>
</div>
<!-- pagination -->

<?php

}
