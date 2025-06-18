<?php
session_start();
if (isset($_SESSION["data"])) {

?>



  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="resources/icon-stuff/logo white.png">
    <title>Admin Dashboard</title>

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
    <link rel="stylesheet" href="admin-page.css" />
    <link rel="stylesheet" href="footer.css" />
    <link rel="stylesheet" href="woman-page.css" />
    <link rel="stylesheet" href="admin-product-edit-popup.css" />
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

  <body onload="loadAdminAllProducts(0)">

    <?php
    include "admin-nav.php";
    ?>


    <!-- <div class="container d-flex gap-5 mt-5">
      <div class="check-box-area d-flex gap-3">
        <div class="">

          <select name="" id="" class="form-select" required>

            <option value="" disabled selected hidden>Select Gender</option>
            <option value="">woman</option>
            <option value="">men</option>
          </select>
        </div>

      </div>
      <div class="check-box-area d-flex gap-3">
        <div class="">

          <select name="" id="" class="form-select" required>

            <option value="" disabled selected hidden>Select Category</option>
            <option value="">shirt</option>
            <option value="">pants</option>
          </select>
        </div>

      </div>
      <div class="check-box-area d-flex gap-3">
        <div class="">
          <button class="btn btn-primary"> Submit</button>
        </div>

      </div>
    </div> -->
    <div class="container  d-flex flex-wrap" style="box-sizing: border-box; min-height: 90vh !important;" id="adminPid">



    </div>

    <!-- Edit Modal -->
    <div class="modal fade " id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true" style="z-index: 999999; ">
      <div class="modal-dialog modal-xl"> <!-- modal-xl for large content like forms -->
        <div class="modal-content " style="min-height: 80vh;" id="editPopupForm">

        </div>
      </div>
    </div>


    <script>
      document.querySelectorAll('.edit-btn').forEach(button => {
        button.addEventListener('click', function(e) {
          e.preventDefault(); // Prevent href="#"

          // Optional: get data from the button
          const productId = this.getAttribute('data-id');

          // Optional: fetch product data using productId here and populate modal fields

          // Show the Bootstrap modal manually
          const modal = new bootstrap.Modal(document.getElementById('editModal'));
          modal.show();
        });
      });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="script.js"></script>
  </body>

  </html>





<?php

} else {

  header("location: admin-signin.php");
}


?>