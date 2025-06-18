<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Signin</title>
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
</head>

<body>

    <div class="container-fluid">

        <div class="container d-flex " style=" height: 100vh;">
            <div class="col-lg-6 col-12 m-auto">
                <h1 class="pb-5 text-end" style="font-family: manrope; font-size: 2rem; font-family: Marcellus;">Admin Signin</h1>

                <div class="col-12 ">
                    <label for="username " class="col-12 form-label ">Username</label>
                    <input type="text" class="form-control" id="username" value="yyyy">
                    <!-- ! add value totesting perposes ,wanna delete this ,just the value part -->

                </div>
                <div class="col-12 mt-5 mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" value="yyyy">
                    <!-- ! add value totesting perposes ,wanna delete this ,just the value part -->
                </div>

                <div class="alert alert-danger d-none" id="admin-signin-alert" role="alert">
                    <p class="msg-area m-0 p-0 " id="msg-area"></p>
                </div>

                <div class="col-12 mt-5 d-flex gap-3 flex-wrap">
                    <button class="btn btn-primary col-12 col-lg-3 flex-lg-grow-1" onclick="admin_signin();">Log in</button>
                    <button class="btn btn-primary col-12 col-lg-3  flex-lg-grow-1"><a href="home.php" style="text-decoration: none; color: white;">Back to Customer Side</a></button>
                </div>
            </div>
        </div>
    </div>




    <script src="script.js"></script>
</body>

</html>