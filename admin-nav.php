<nav class="admin-navbar-main navbar navbar-expand-lg ">
  <div class="container">

    <!-- Logo / Brand -->
    <a class="navbar-brand d-flex order-2 order-lg-1 align-items-center gap-4" href="admin-page.php">
      <img src="resources/icon-stuff/logo.png" height="20" alt="Logo" class="bg-white p-1 logo" style="z-index: -1;">
      <!-- <span class="admin-nav-text">Vintage Vogue - Admin Section</span> -->
    </a>

    <!-- Toggler for mobile offcanvas -->
    <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible Desktop Nav -->
    <div class="collapse navbar-collapse order-1 order-lg-2 justify-content-center">
      <ul class="navbar-nav d-flex" style="gap: 100px !important;">
        <li class="nav-item"><a class="nav-link" href="admin-page.php">Admin Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="admin-add-product.php">Add Products</a></li>
        <li class="nav-item"><a class="nav-link" href="admin-set-price.php">Set Prices & Stock</a></li>
      </ul>
    </div>

    <!-- User Dropdown -->
    <div class="order-3 order-lg-3">
      <div class="btn-group">
        <button class="btn btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <span class="nav-icons material-icons-outlined">person</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end p-3">
          <li class="dropdown-item mt-1"><a href="index.php" class="text-decoration-none">Switch to User Side</a></li>
          <li class="dropdown-item mt-3" onclick="logout();" style="cursor: pointer;">Logout</li>
        </ul>
      </div>

      <!-- Mobile Offcanvas Menu -->
      <div class="offcanvas offcanvas-start d-lg-none bg-dark text-light" tabindex="-1" id="offcanvasNavbar">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title">Vintage Vogue</h5>
          <button class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body overflow-y-auto">
          <ul class="navbar-nav gap-2">
            <li class="nav-item"><a class="nav-link text-light" href="admin-page.php">Admin Dashboard</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="admin-add-product.php">Add Products</a></li>
            <li class="nav-item"><a class="nav-link text-light"  href="admin-set-price.php">Set Prices & Stock</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>
