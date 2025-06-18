<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vintage-Vogue | Home</title>
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
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="keyframes.css">
    <link rel="stylesheet" href="variables.css">
    <link rel="stylesheet" href="hero-section.css">
    <link rel="stylesheet" href="product-card-section.css" />
    <link rel="stylesheet" href="footer.css" />
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

<body onload="HomeCallThis(0);">
    <?php
    include "navbar.php"
    ?>



    <!--parent of hero and product sections  -->
    <div class="container-fluid" id="colorBox" style="position: relative; min-height: max-content; padding-block-end: 200px;">
        <!--parent of hero and product sections  -->



        <!-- Hero area -->
        <div class="container container-lg  main-hero">
            <div class="col-12 hero-heading-text">
                Own Everything
            </div>
            <div class="hero-grid-para ">
                <div class="sub-para-1"> We design with intention — not for trends, but for timeless
                    self-expression. Every piece tells a story of confidence and
                    identity.</div>


                <div class="arrow hero-arrow-holder position-relative d-flex justify-content-center align-items-center d-none d-lg-flex">


                    <span class="material-icons-outlined down-arrow ">
                        arrow_downward
                    </span>
                    <div class="text-animation-holder  d-none d-lg-flex">
                        <div class="circle-wrap">
                            <svg viewBox="0 0 300 300" class="circle-svg">
                                <defs>
                                    <path id="textCircle" d="M150,150 m-100,0 a100,100 0 1,1 200,0 a100,100 0 1,1 -200,0" />
                                </defs>
                                <text fill="#000" font-size="16" font-family="Arial" letter-spacing="2">
                                    <textPath href="#textCircle" startOffset="0%">
                                        vintage vogue - define you - trend set -
                                    </textPath>
                                </text>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="sub-para-2">
                    Style should speak for you. Bold or minimal, loud or quiet —
                    wear what feels true, always.
                </div>
            </div>

            <div class="col-12 bg-black hero-image-holder-king">

                <div class=" hero-image-holder p-0 mt-5 position-relative ">
                    <a href="#product-section" class="hero-button-explore-more px-5 py-3  btn-outline-light border border-3 fw-medium fs-4">Explore More</a>
                    <img src="resources/images/r-4.jpg"
                        style="object-position: 30% 10%">
                </div>
            </div>
        </div>
        <!-- Hero area -->

        <div class="container product-section-holder bg-black" id="product-section">
            <!-- <div class="container product-section-holder bg-black" id="productSection"> -->

            <div class="all-in-one-pr-section">
                <div class="col-12 product-section-heading bg-black d-flex text-light position-sticky top-0">
                    Latest Product
                    <a class="nav-link text-white ms-auto" href="#"><span class="nav-icons material-icons-outlined">
                            close
                        </span></a>
                </div>
                <div class="col-12  mt-5 product-grid" id="homePDCHolder">

                </div>
                <div class="col-12  product-section-explore-button"><a href="#">Explore more</a></div>


                <div class="col-12 product-section-heading bg-black d-flex text-light position-sticky top-0">
                    woman Products
                    <a class="nav-link text-white ms-auto" href="#"><span class="nav-icons material-icons-outlined">
                            close
                        </span></a>
                </div>
                <div class="col-12  mt-5 product-grid" id="homeWomanPDCHolder">


                </div>
                <div class="col-12  product-section-explore-button"><a href="woman-page.php">Explore more</a></div>


                <div class="col-12 product-section-heading bg-black d-flex text-light position-sticky top-0">
                    men Products
                    <a class="nav-link text-white ms-auto" href="#"><span class="nav-icons material-icons-outlined">
                            close
                        </span></a>
                </div>
                <div class="col-12  mt-5 product-grid" id="homeMenPDCHolder">


                </div>
                <div class="col-12  product-section-explore-button"><a href="men-page.php">Explore more</a></div>

            </div>
        </div>

    </div>
    <?php
    include "footer.php";
    ?>

    <script src="script.js"></script>
</body>

</html>