<nav class="navbar navbar-expand-lg bg-black d-flex py-0">
  <div class="container">

    <!-- Logo / Brand -->
    <a class="navbar-brand d-flex order-2 order-lg-1 align-items-center gap-4 " href="index.php">
      <img src="resources/icon-stuff/logo.png" height="30" alt="Logo" class="bg-white p-1 logo" />
      <span class="text-white logo-text d-none d-md-block">Vintage Vogue</span>
    </a>

    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible Desktop Nav -->
    <div class="collapse navbar-collapse order-1 order-lg-2  justify-content-center">
      <ul class="navbar-nav gap-5">
        <li class="nav-item"><a class="nav-link text-white" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="woman-page.php">Woman</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="men-page.php">Men</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="about-us.php">About us</a></li>
      </ul>
    </div>

    <div class=" order-3 order-lg-3 ">
      <ul class="navbar-nav gap-5 d-flex flex-row ">
        <li class="nav-item"><a class="nav-link text-white" href="#"><span class="nav-icons material-icons-outlined">
              email
            </span></a></li>
      </ul>
    </div>


    <!-- Mobile Offcanvas -->
    <div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="offcanvasNavbar">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title">Vintage Vogue</h5>
        <button class="btn-close" data-bs-dismiss="offcanvas"></button>
      </div>
      <div class="offcanvas-body">
        <ul class=" navbar-nav gap-2 h-100">
          <li class="nav-item"><a class="nav-link text-white" href="woman-page.php">Woman</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="men-page.php">Men</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="accessories-page.php">Accessories</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="about-us.php">About us</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>