<?php
include "connection.php";


$sid = $_POST["p"];


$rs = Database::search("SELECT * FROM `stock` INNER JOIN `product` ON `stock`.`product_id` = `product`.`id` WHERE `stock_id` = '" . $sid . "'");
$gender_rs = Database::search("SELECT * FROM gender");
$category_rs = Database::search("SELECT * FROM category");

$d = $rs->fetch_assoc();

?>






<div class="modal-header">
    <h5 class="modal-title" id="editModalLabel" onclick="editpop()">Edit Product</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<div class="modal-body">
    <!-- Place your edit form here (Your large product form HTML) -->
    <!-- Example: -->
    <div class="container">
        <div class="row">
            <!-- Your full form layout starts here -->

            <div class="col-lg-8 mt-4">
                <label class="form-label">Product Title</label>
                <input type="text" class="form-control" id="admPopTitle" value="<?php echo $d["title"]; ?>" />

                <label class="form-label mt-4">Product Description</label>
                <textarea class="form-control" rows="5" id="admPopDesc"><?php echo $d["description"]; ?></textarea>

                <div class="row mt-5">
                    <div class="col-lg-6 ">
                        <label class="form-label">Gender</label>
                        <select class="form-select" id="admPopGender">
                            <option disabled>Select one</option>
                            <?php
                            while ($g = $gender_rs->fetch_assoc()) {
                                $selected = ($g["gender_id"] == $d["gender_gender_id"]) ? "selected" : "";
                                echo "<option value='{$g["gender_id"]}' $selected>{$g["gender_name"]}</option>";
                            }
                            ?>
                        </select>

                    </div>
                    <div class="col-lg-6 ">
                        <label class="form-label">Category</label>
                        <select class="form-select" id="admPopCat">
                            <option disabled>Select one</option>
                            <?php
                            while ($c = $category_rs->fetch_assoc()) {
                                $selected = ($c["cat_id"] == $d["category_cat_id"]) ? "selected" : "";
                                echo "<option value='{$c["cat_id"]}' $selected>{$c["cat_name"]}</option>";
                            }
                            ?>
                        </select>

                    </div>
                </div>

                <div class="row mt-3 mt-5">
                    <div class="col-lg-6">
                        <label class="form-label">Price</label>
                        <input type="text" class="form-control" id="admPopPrice" value="<?php echo $d["price"]; ?>" />
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label">Stock</label>
                        <input type="text" class="form-control" id="admPopStock" value="<?php echo $d["qty"]; ?>" />
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-3 mt-lg-0">
                <label class="form-label">Upload Image</label>
                <input type="file" class="form-control" onchange="previewImage(event)" id="admPopImage" value="<?php echo $d["path"]; ?>">

                <img id="imagePreview" src="<?php echo $d['path']; ?>" class="img-fluid mt-3 mx-auto" alt="Preview" />

            </div>

        </div>
    </div>
</div>

<div class="modal-footer">
    <div class="alert col-6 alert-success d-none me-auto" id="editResponseAlert" style="height: 50px; display: flex; align-items: center;"role="alert" ></div>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
    <button type="button" class="btn btn-primary" onclick="adminEditSaveChanges(<?php echo $d['stock_id']; ?>);">Save Changes</button>

</div>












<?php
?>