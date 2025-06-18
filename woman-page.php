<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>womans Product</title>
    <link rel="icon" type="image/png" href="resources/icon-stuff/logo white.png">

    <!-- links area -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT"
        crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Icons" />
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="keyframes.css">
    <link rel="stylesheet" href="variables.css">
    <link rel="stylesheet" href="footer.css" />
    <link rel="stylesheet" href="woman-product.css" />
    <link rel="stylesheet" href="woman-page.css" />
    <link rel="stylesheet" href="navbar.css" />
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

<body onload="loadWomanProducts(0 , 1);">

    <?php
    include "navbar.php"
    ?>

    <div class="container woman-page-text-holder">
        <p class="woman-main-text">Women's</p>
        <div class="woman-para">
            <p class="woman-para-1">Step into effortless style with the Moose Women’s Collection—a bold mix of comfort, color, and confidence. From everyday T-Shirts (190 colours!) to breezy Shorts, sleek Denims, relaxed-fit Pants, and cozy Hoodies, each piece is designed to move with you. With over 300+ color options and Moose’s signature fit and feel, this collection is made to match your lifestyle—no matter the mood or moment.</p>

            <p class="woman-para-2">Made for women who own their story.</p>
            <div class="container-fluid p-0 mt-5 woman-page-menu">
                <div class="col-lg-4 col-8 col-md-6 woman-page-menu-inside d-flex gap-3">
                    <p class="text-center woman-menu-item-1 flex-grow-1 text-decoration-none text-white" onclick="loadWomanProducts(0 , 1)">Woman Shirts</p>
                    <p class="text-center woman-menu-item-1 flex-grow-1 text-decoration-none text-white" onclick="loadWomanProducts(0 , 2)">Woman Pants</p>
                </div>
            </div>
        </div>
    </div>






    <div class="container-fluid " id="colorBox_2">
        <div class="container bg-black woman-product-main-container" id="pwid">



            <div class="col-12 product-section-heading bg-black d-flex text-light position-sticky top-0">
                Woman Pants
            </div>


            <div class="col-12 woman-men-section-grid " id="pwid" style=" margin-bottom: 100px;">



            </div>

        </div>

    </div>

    <?php
    include "footer.php";
    ?>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>