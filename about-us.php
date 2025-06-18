<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About US</title>
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
    <link rel="stylesheet" href="about-us.css" />
    <link rel="stylesheet" href="footer.css" />
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
    include "navbar.php"
    ?>

    <div class="container " >

        <div class="col-12 about-us-plain p-0 d-flex flex-wrap">

            <div class="col-lg-4 col-12 d-flex align-items-center">
                <p class="about-us-main-heading">About Us</p>
            </div>
            <div class="offset-lg-1 col-lg-6 col-12 d-flex align-items-center">
                <p class="about-us-sub-heading ">Fashion is a language. At Vintage Vogue, we help you speak it fluently — with elegance, with boldness, with timeless charm.</p>
            </div>
        </div>



        <div class="col-12 p-0 d-flex flex-wrap about-sec-1 ">
            <div class="col-lg-5 col-12 about-us-image-holder a-us-holder ">
                <img class="about-us-image" src="resources/images/toolxox.com-hZNo17624M.jpg" alt="">
            </div>
            <div class="offset-lg-1 col-lg-6 col-12 pt-5 p-5 about-us-para ">
                <p>Vintage Vogue was born from a deep admiration for the grace of old-world fashion and a vision to make it relevant for today’s style-savvy generation. We're not just a clothing brand — we're a movement. A movement that bridges the past and the present, crafting garments that celebrate timeless silhouettes, vintage textures, and modern detailing.
                    Our collections are carefully curated to make you feel empowered, elegant, and original — whether you're walking into a boardroom, a café, or onto a rooftop at sunset.</p>
                <p>Vintage Vogue was born from a deep admiration for the grace of old-world fashion and a vision to make it relevant for today’s style-savvy generation. We're not just a clothing brand — we're a movement. A movement that bridges the past and the present, crafting garments that celebrate timeless silhouettes, vintage textures, and modern detailing.

                    Our collections are carefully curated to make you feel empowered, elegant, and original — whether you're walking into a boardroom, a café, or onto a rooftop at sunset.</p>
            </div>




        </div>
        <div class="col-12 p-0 d-flex flex-wrap about-sec-2  ">
            <div class="col-lg-5 col-12 about-us-image-holder-2 a-us-holder order-lg-2 order-1">
                <img class="about-us-image-2" src="resources/images/toolxox.com-S9FkIzcsgK.jpg" alt="">
            </div>
            <div class="col-lg-7 col-12 pt-5 p-5 order-lg-1 order-2">
                <p>At Vintage Vogue, we reject fast fashion. We create pieces that are made to last — emotionally and physically. Our production process is sustainable and intentional, from responsibly sourced materials to fair labor partnerships.

                    We don’t mass-produce. We craft.

                    Fashion should be personal — something that fits your soul as much as it fits your body.</p>
                <p>What We Offer
                </p>

                <ul>

                    <li>

                        Flowing dresses inspired by 1950s elegance
                    </li>
                    <li>

                        Bold prints from the groovy ‘70s
                    </li>
                    <li>
                        Structured blazers with a modern vintage edge

                    </li>
                    <li>
                        Everyday essentials with character

                    </li>
                    <li>

                        Limited edition drops to keep your wardrobe unique
                    </li>
                    <li>

                        Every item is designed to be styled, re-styled, and loved for years.
                    </li>
                </ul>
            </div>
        </div>






    </div>

    <?php
    include "footer.php";
    ?>
    <script src="script.js"></script>
</body>

</html>