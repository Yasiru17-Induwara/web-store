<?php
session_start();
include "connection.php";
if (isset($_SESSION["data"])) {
?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Set product Price & Stock </title>

        <!-- links area -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT"
            crossorigin="anonymous" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Bootstrap Bundle JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Icons" />
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" />
        <link rel="stylesheet" href="style.css" />

        <link rel="stylesheet" href="keyframes.css">
        <link rel="stylesheet" href="variables.css">
        <link rel="stylesheet" href="hero-section.css">
        <link rel="stylesheet" href="product-card-section.css" />
        <link rel="stylesheet" href="admin-nav.css" />
        <link rel="stylesheet" href="footer.css" />
        <link rel="stylesheet" href="woman-page.css" />
        <link rel="stylesheet" href="admin-product-list.css" />
        <link rel="stylesheet" href="admin-add-product.css" />
        <link rel="stylesheet" href="bootstrap.css" />
        <script>
            window.onbeforeunload = function() {
                window.scrollTo(0, 0);
            };
            if ("scrollRestoration" in history) {
                history.scrollRestoration = "manual";
            }
            window.scrollTo(0, 0);
            window.onbeforeunload = function() {
                window.scrollTo(0, 0);
            };
        </script>
        <!-- links area -->

    </head>

    <body>

        <?php
        include "admin-nav.php";
        ?>

        <div class="container">


            <div class="col-12 d-flex add-product-sec flex-wrap ">

                <div class="col-lg-4 col-12 pe-lg-3 pe-0 ">
                    <div class="add-product-heading">Gender</div>
                    <label for="" class="form-label">Pick Available gender</label>
                    <div class="">

                        <select name="" id="admin-gender" class="form-select" required>
                            <?php
                            $rs = Database::search("SELECT * FROM `gender`");
                            $num = $rs->num_rows;
                            ?>

                            <!-- <option id="gender" value="" disabled selected hidden>Select one</option> -->

                            <?php

                            for ($i = 0; $i < $num; $i++) {
                                $d = $rs->fetch_assoc();

                            ?>

                                <option value="<?php echo $d["gender_id"] ?>"><?php echo $d["gender_name"] ?></option>

                            <?php
                            }
                            ?>

                        </select>
                    </div>

                </div>
                <div class="col-lg-4 col-12 ps-lg-3 ps-0  ">
                    <div class="add-product-heading">Category</div>
                    <label for="" class="form-label">Select product category</label>
                    <div>

                        <select name="" id="admin-category" class="form-select" required>
                            <?php
                            $rs = Database::search("SELECT * FROM `category`");
                            $num = $rs->num_rows;
                            ?>

                            <!-- <option value="" disabled selected hidden>Select one</option> -->

                            <?php

                            for ($i = 0; $i < $num; $i++) {
                                $d = $rs->fetch_assoc();

                            ?>

                                <option id="admin-category" value="<?php echo $d["cat_id"] ?>"><?php echo $d["cat_name"] ?></option>

                            <?php
                            }
                            ?>

                        </select>
                    </div>

                </div>
                <div class="col-lg-2 col-12 ps-lg-3 ps-0 ms-3 mt-auto d-grid">
                    <button class="btn btn-primary" onclick="adminDecide();">Search</button>
                </div>
            </div>

            <div class="col-12 mt-5">
                <label for="select" class="form-label">Select product from here</label>
                <select name="" class="form-select bg-white" id="admin-product-select" style="height: 60px;">
                    <option class="form-p" value="" disabled selected hidden>Select product</option>
                </select>
            </div>
            <div class="col-12 mt-5 d-flex flex-column  ">
                <div class="col-5 py-2">

                    <label for="price" class="form-label">Set Price</label>
                    <div class="input-group">
                        <div class="input-group mb-3">
                            <input type="text" id="admin-price" class="form-control border border-primary" aria-label="Amount (to the nearest dollar)" style="height: 60px; padding-inline: 20px;">
                            <span class="input-group-text border border-primary">LKR</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex gap-5">

                    <div class="col-5 py-3 ">
                        <label for="price" class="form-label">Set QTY</label>
                        <div class="input-group">
                            <div class="input-group mb-3">
                                <input type="text" id="admin-qty" class="form-control border border-primary" aria-label="Amount (to the nearest dollar)" style="height: 60px; padding-inline: 20px;">
                                <span class="input-group-text border border-primary">LKR</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 pt-3 d-grid  align-items-center">
                        <button class="btn btn-primary" style="height: 60px;" onclick="updatePriceStockProcess();">Update details</button>
                    </div>
                </div>

            </div>



            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

            <script src="script.js"></script>
    </body>

    </html>




<?php

} else {

    header("location: admin-signin.php");
}


?>