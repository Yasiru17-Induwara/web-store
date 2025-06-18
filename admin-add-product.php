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
    <title>Admin Add product</title>
    <link rel="icon" type="image/png" href="resources/icon-stuff/logo white.png">

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
 
        <link rel="stylesheet" href="style.css" />
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


        <!-- <img id="imagePreview" class="" src="resources/images/general-img-landscape.png" alt="Image preview" style="display: block;">
        </div>
        <div class="col-12">
            <input type="file" class="form-control" id="fileInput" onchange="previewImage(event)">
        </div>

        <select name="" id="" class="form-select" required>

            <option value="" disabled selected hidden>Select one</option>
            <option value="">woman</option>
            <option value="">men</option>
        </select>


        <select name="" id="" class="form-select" required>
            <option value="">shirts</option>
            <option value="">pants</option>





            <label for="" class="form-label">Product Title</label>
            <input type="text" class="form-control">


            <label for="" class="form-label">Product Title</label>
            <textarea name="" class="form-control col-12" id="" rows="5" cols="50"></textarea>


            <label for="" class="form-label">Price</label>
            <input type="text" class="form-control"> -->

        <div class="container add-product-holder add-product-holder d-flex justify-content-center gap-5 ">
            <div class="col-lg-11 col-12 d-flex flex-wrap">

                <div class="col-lg-8 col-12  p-4">
                    <div class="add-product-heading">General Informations</div>
                    <div class="col-12 add-product-sec">
                        <label for="title" class="form-label">Product Title</label>
                        <input type="text" class="form-control" id="title">
                    </div>
                    <div class="col-12 add-product-sec">
                        <label for="title" class="form-label">Product Description</label>
                        <textarea name="product-desc" id="product-desc" class="form-control" rows="7"></textarea>
                    </div>
                    <div class="col-12 d-flex add-product-sec flex-wrap">

                        <div class="col-lg-6 col-12 pe-lg-3 pe-0 ">
                            <div class="add-product-heading">Gender</div>
                            <label for="" class="form-label">Pick Available gender</label>
                            <div class="">

                                <select name="" id="gender" class="form-select" required>
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
                        <div class="col-lg-6 col-12 ps-lg-3 ps-0  ">
                            <div class="add-product-heading">Category</div>
                            <label for="" class="form-label">Select product category</label>
                            <div>

                                <select name="" id="category" class="form-select" required>
                                    <?php
                                    $rs = Database::search("SELECT * FROM `category`");
                                    $num = $rs->num_rows;
                                    ?>

                                    <!-- <option value="" disabled selected hidden>Select one</option> -->

                                    <?php

                                    for ($i = 0; $i < $num; $i++) {
                                        $d = $rs->fetch_assoc();

                                    ?>

                                        <option value="<?php echo $d["cat_id"] ?>"><?php echo $d["cat_name"] ?></option>

                                    <?php
                                    }
                                    ?>

                                </select>
                            </div>

                        </div>
                    </div>

                    <!-- <div class="add-product-heading">Pricing and Stock</div>
                    <div class="col-12 mb-5 d-flex add-product-sec flex-wrap">
                        <div class="col-lg-6 col-12 pe-lg-3 pe-0 ">
                            <label for="Price" class="form-label">price</label>
                            <input type="text" class="form-control" id="price">
                        </div>
                        <div class="col-lg-6 col-12 ps-lg-3 ps-0 ">
                            <label for="stock" class="form-label">stock</label>
                            <input type="text" class="form-control" id="stock">
                        </div>
                    </div> -->

                </div>


                <div class="col-lg-4 col-12 p-4 d-flex flex-column pb-5">
                    <div class="col-12 ">
                        <div class="add-product-heading">uploaded Image</div>
                        <div class="d-flex flex-wrap ">
                            <div class="product-image-box">

                                <img id="imagePreview" class="" src="resources/images/general-img-landscape.png" alt="Image preview" style="display: block;">
                            </div>
                            <div class="col-12 mt-5">
                                <input type="file" class="form-control" id="fileInput" onchange="previewImage(event)">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-5 d-grid mt-auto pb-4">
                        <button class="btn btn-primary mt-4 py-2" onclick="productRegister();">Submit Details</button>
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