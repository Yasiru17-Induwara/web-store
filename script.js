const text = "• CIRCULAR TEXT GENERATED IN FIGMA ";
const circle = document.getElementById("circleText");
const radius = 120; // radius of circle
const chars = text.split("");
const degIncrement = 360 / chars.length;

chars.forEach((char, i) => {
  const span = document.createElement("span");
  const angle = i * degIncrement;
  span.innerText = char;

  // Rotate, move outward, then rotate the letter to match curve
  span.style.transform = `
      rotate(${angle}deg)
      translate(${radius}px)
      rotate(${angle + 90}deg)
    `;

  circle.appendChild(span);
});

const productSection = document.getElementById("productSection");
const colorBox = document.getElementById("colorBox");

window.addEventListener("scroll", function () {
  const rect = productSection.getBoundingClientRect();

  // Check if productSection is near top (40px from top of viewport)
  if (rect.top <= 40 && rect.bottom > 40) {
    // Change color when productSection enters 40px zone from top
    colorBox.style.backgroundColor = "red";
  } else {
    // Revert back if it's above or has scrolled past
    colorBox.style.backgroundColor = "black";
  }
});

// document.addEventListener("DOMContentLoaded", function () {
//   // ====== CIRCULAR TEXT ======
//   const text = "• CIRCULAR TEXT GENERATED IN FIGMA ";
//   const circle = document.getElementById("circleText");
//   const radius = 120;
//   const chars = text.split("");
//   const degIncrement = 360 / chars.length;

//   chars.forEach((char, i) => {
//     const span = document.createElement("span");
//     const angle = i * degIncrement;
//     span.innerText = char;
//     span.style.position = "absolute";
//     span.style.transform = `
//       rotate(${angle}deg)
//       translate(${radius}px)
//       rotate(${angle + 90}deg)
//     `;
//     circle.appendChild(span);
//   });

//   // ====== SCROLL COLOR CHANGE ======

// });

function admin_signin() {
  var username = document.getElementById("username");
  var password = document.getElementById("password");

  var form = new FormData();
  form.append("un", username.value);
  form.append("pw", password.value);

  var req = new XMLHttpRequest();

  req.onreadystatechange = function () {
    if ((req.readyState == 4) & (req.status == 200)) {
      var response = req.responseText;
      if (response === "success") {
        window.location = "admin-page.php";
      } else {
        document.getElementById("msg-area").innerHTML = response;
        document.getElementById("admin-signin-alert").className =
          "alert alert-danger d-block";
      }
    }
  };

  req.open("POST", "adminSigninProcess.php", true);
  req.send(form);
}

function previewImage(event) {
  const fileInput = document.getElementById("fileInput");
  const imagePreview = document.getElementById("imagePreview");
  const files = fileInput.files;

  if (files.length > 0) {
    const file = files[0];
    const reader = new FileReader();

    reader.onload = function (e) {
      imagePreview.src = e.target.result;
      imagePreview.style.display = "block";
    };

    reader.readAsDataURL(file);
  } else {
    imagePreview.style.display = "none"; // Or display a default image
  }
}

function logout() {
  var req = new XMLHttpRequest();

  req.onreadystatechange = function () {
    if ((req.readyState == 4) & (req.status == 200)) {
      var response = req.responseText;
      if (response.trim() === "success") {
        location.reload();
      }
    }
  };

  req.open("POST", "adminLogoutProcess.php", true);
  req.send();
}

function previewImage(event) {
  const reader = new FileReader();
  reader.onload = function () {
    document.getElementById("imagePreview").src = reader.result;
  };
  reader.readAsDataURL(event.target.files[0]);
}

function productRegister() {
  var title = document.getElementById("title");
  var desc = document.getElementById("product-desc");
  var gender = document.getElementById("gender");
  var cat = document.getElementById("category");
  var image = document.getElementById("fileInput");

  var f = new FormData();
  f.append("t", title.value);
  f.append("d", desc.value);
  f.append("g", gender.value);
  f.append("c", cat.value);
  f.append("image", image.files[0]);

  var req = new XMLHttpRequest();
  req.onreadystatechange = function () {
    if ((req.readyState == 4) & (req.status == 200)) {
      var response = req.responseText;
      if (response == "success") {
        window.location = "admin-set-price.php";
      } else {
        alert(response);
      }
    }
  };

  req.open("POST", "productRegisterProcess.php", true);
  req.send(f);
}

function adminDecide() {
  var gender = document.getElementById("admin-gender");
  var category = document.getElementById("admin-category");

  var f = new FormData();
  f.append("g", gender.value);
  f.append("c", category.value);

  var req = new XMLHttpRequest();
  req.onreadystatechange = function () {
    if ((req.readyState == 4) & (req.status == 200)) {
      var response = req.responseText;
      document.getElementById("admin-product-select").innerHTML = response;
      // alert(response);
    }
  };

  req.open("POST", "checkAdminProductLoadProcess.php", true);
  req.send(f);
}

function updatePriceStockProcess() {
  var adSelected = document.getElementById("admin-product-select");
  var price = document.getElementById("admin-price");
  var qty = document.getElementById("admin-qty");

  var f = new FormData();
  f.append("a", adSelected.value);
  f.append("p", price.value);
  f.append("q", qty.value);

  var req = new XMLHttpRequest();
  req.onreadystatechange = function () {
    if ((req.readyState == 4) & (req.status == 200)) {
      var response = req.responseText;
      alert(response);
      window.location = "admin-add-product.php";
    }
  };

  req.open("POST", "adminPriceStockRegisterProcess.php", true);
  req.send(f);
}
function loadMenProducts(x, w) {
  var page = x;
  var wm = w;

  var f = new FormData();
  f.append("p", page);
  f.append("wm", wm);

  var req = new XMLHttpRequest();
  req.onreadystatechange = function () {
    if ((req.readyState == 4) & (req.status == 200)) {
      var response = req.responseText;
      document.getElementById("pmid").innerHTML = response;
    }
  };

  req.open("POST", "loadMenProductProcess.php");
  req.send(f);
}
function loadWomanProducts(x, w) {
  var page = x;
  var wm = w;
  var f = new FormData();
  f.append("p", page);
  f.append("wm", wm);

  var req = new XMLHttpRequest();
  req.onreadystatechange = function () {
    if ((req.readyState == 4) & (req.status == 200)) {
      var response = req.responseText;
      document.getElementById("pwid").innerHTML = response;
    }
  };

  req.open("POST", "loadWomanProductProcess.php");
  req.send(f);
}

function loadAdminAllProducts(x) {
  var page = x;

  var f = new FormData();
  f.append("p", page);

  var req = new XMLHttpRequest();
  req.onreadystatechange = function () {
    if ((req.readyState == 4) & (req.status == 200)) {
      var response = req.responseText;
      document.getElementById("adminPid").innerHTML = response;
    }
  };

  req.open("POST", "loadAdminProductProcess.php");
  req.send(f);
}

function adminOpenEditModal(stockId) {
  const modal = new bootstrap.Modal(document.getElementById("editModal"));
  modal.show();

  console.log("Opening modal for product:", stockId);
  // Optional: Populate modal fields using productId

  var sid = stockId;
  var f = new FormData();

  f.append("p", sid);

  var req = new XMLHttpRequest();
  req.onreadystatechange = function () {
    if ((req.readyState == 4) & (req.status == 200)) {
      var response = req.responseText;
      document.getElementById("editPopupForm").innerHTML = response;
      // alert(response);
    }
  };

  req.open("POST", "adminPrdEditLoadDetails.php", true);
  req.send(f);
}

function adminEditSaveChanges(stockId) {
  var StockId = stockId;
  const title = document.getElementById("admPopTitle").value;
  const desc = document.getElementById("admPopDesc").value;
  const gender = document.getElementById("admPopGender").value;
  const cat = document.getElementById("admPopCat").value;
  const price = document.getElementById("admPopPrice").value;
  const stock = document.getElementById("admPopStock").value;
  const imageFile = document.getElementById("admPopImage").files[0];

  const f = new FormData();
  f.append("sid", StockId);
  f.append("title", title);
  f.append("desc", desc);
  f.append("gender", gender);
  f.append("cat", cat);
  f.append("price", price);
  f.append("stock", stock);
  if (imageFile) {
    f.append("image", imageFile); // Optional
  }

  var req = new XMLHttpRequest();
  req.onreadystatechange = function () {
    if (req.readyState === 4 && req.status === 200) {
      // if (req.responseText.trim() === "success") {
      var response = req.responseText;
      if (response == "success") {
        document.getElementById("editResponseAlert").innerHTML =
          "Changes Saved Successfully";
        document.getElementById("editResponseAlert").classList.remove("d-none");
        document.getElementById("editResponseAlert").classList.remove("d-none");
      } else {
        alert(req.responseText); // Show error
      }
    }
  };

  req.open("POST", "adminEditSaveChangesProcess.php", true);
  req.send(f);
}

function HomeCallThis(y) {
  var x = y;
  loadUserHomeProducts(x);
  homeWomanPDCHolder(x);
  homeMenPDCHolder(x);
}

function loadUserHomeProducts(x) {
  var page = x;

  var f = new FormData();
  f.append("p", page);

  var req = new XMLHttpRequest();
  req.onreadystatechange = function () {
    if ((req.readyState == 4) & (req.status == 200)) {
      var response = req.responseText;
      document.getElementById("homePDCHolder").innerHTML = response;
    }
  };

  req.open("POST", "loadUserHomeProductsProcess.php");
  req.send(f);
}
function homeWomanPDCHolder(x) {
  var page = x;

  var f = new FormData();
  f.append("p", page);

  var req = new XMLHttpRequest();
  req.onreadystatechange = function () {
    if ((req.readyState == 4) & (req.status == 200)) {
      var response = req.responseText;
      document.getElementById("homeWomanPDCHolder").innerHTML = response;
    }
  };

  req.open("POST", "loadUserHomeWomanProductsProcess.php");
  req.send(f);
}
function homeMenPDCHolder(x) {
  var page = x;

  var f = new FormData();
  f.append("p", page);

  var req = new XMLHttpRequest();
  req.onreadystatechange = function () {
    if ((req.readyState == 4) & (req.status == 200)) {
      var response = req.responseText;
      document.getElementById("homeMenPDCHolder").innerHTML = response;
    }
  };

  req.open("POST", "loadUserHomeMenProductsProcess.php");
  req.send(f);
}



function deleteProduct(stockId, productId) {

  var f = new FormData();
  f.append("stockId", stockId);
  f.append("productId", productId);

  var req = new XMLHttpRequest();
  req.onreadystatechange = function () {
    if ((req.readyState == 4) & (req.status == 200)) {
      var response = req.responseText;
      if(response ===  "success"){
        alert("Product & stock successfully deleted");
        location.reload();
      }
    }
  };

  req.open("POST", "adminProductDeleteProcess.php", true);
  req.send(f);
}
