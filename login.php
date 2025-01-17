<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login-page</title>

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="responsive(430).css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="animation.css">
    <link rel="php" href="connection.php">

</head>

<body>

    <!-- logo-section -->

    <div style="height: 100px; background-color: rgb(36, 32, 32); border-bottom: 1px solid rgba(255, 255, 255, 0.322);"
        class="logo-section container-fluid d-md-flex d-none align-items-center justify-content-evenly  ">

        <div style="color: white;" class="logo-section d-flex align-items-center justify-content-center  ">

            <h1 style="font-family: nasa;">fuel<span
                    style="color: rgba(255,82,8,255); font-family: nasa; font-size: 70px;">x</span>Press</h1>

        </div>

        <div class="information-section d-flex align-items- justify-content-center ">

            <div class="location-section d-flex align-items-center justify-content-center ">

                <div class="  p-3">

                    <i style="color:rgba(255,82,8,255); font-size: 40px;" class="bi bi-pin-map-fill"></i>

                </div>

                <div class="">

                    <h5 style="color: white; font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">
                        India,Gujarat</h5>
                    <span style="color:white; font-size: 13px;">30-patel society, Adalaj ,Gandhinagar</span>

                </div>

            </div>

            <div class="mail-section d-flex align-items-center justify-content-center ">

                <div class=" p-3">

                    <i style="color:rgba(255,82,8,255); font-size: 40px;" class="bi bi-envelope-paper"></i>

                </div>

                <div class="">

                    <h5 style="color: white; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">
                        pressfuelx@gmail.com</h5>
                    <span style="color:white; font-size: 13px;">Work-time: 24/7</span>

                </div>

            </div>

        </div>

    </div>

    <!--  -->

    <nav style="background-color: rgb(36, 32, 32);" class="navbar navbar-expand-lg py-3 d-md-flex d-none ">

        <div class="container ">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex align-items-center justify-content-between "
                id="navbarSupportedContent">
                <ul class="navbar-nav col-7 d-flex align-items-center justify-content-evenly mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link active text-light fs-5" aria-current="page" href="index.html">Home</a>
                    </li>

                    <!--  -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light fs-5" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a style="font-size: 15px;" class="dropdown-item " href="POT.html">POT(Petrol on
                                    Tap)</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a style="font-size: 15px;" class="dropdown-item" href="DOT.html">DOT(Diesel on Tap)</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a style="font-size: 15px;" class="dropdown-item" href="GOT.html">GOT(Gas on Tap)</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="Smart.html">Smart tank</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                        </ul>
                    </li>
                    <!--  -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light fs-5" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Company
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="About.html">About Us</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="Team.html">Our Team</a></li>
                        </ul>
                    </li>
                    <!--  -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light fs-5" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Pages
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Blog</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link disabled text-light fs-5" aria-disabled="true">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled text-light fs-5" aria-disabled="true">My order</a>
                    </li>
                </ul>
                <form class="d-flex " role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn-search" type="submit"><a href="singup.html">Login</a></button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Mobile-screen -->

    <nav style="background-color: rgb(36, 32, 32);" class="navbar navbar-expand-lg  d-md-none d-flex ">

        <div class="container-fluid">

            <h1 style="font-family: nasa; color: white;">fuel<span
                    style="color: rgba(255,82,8,255); font-family: nasa; font-size: 60px;">x</span>Press</h1>

            <button style="color: white; background-color:rgba(255,82,8,255) ; " class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="index.html">Home</a>
                    </li>

                    <!--  -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light " href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a style="font-size: 15px;" class="dropdown-item " href="POT.html">POT(Petrol on
                                    Tap)</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a style="font-size: 15px;" class="dropdown-item" href="DOT.html">DOT(Diesel on Tap)</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a style="font-size: 15px;" class="dropdown-item" href="GOT.html">GOT(Gas on Tap)</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="Smart.html">Smart tank</a></li>
                        </ul>
                    </li>
                    <!--  -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light " href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Company
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="About.html">About Us</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="Team.html">Our Team</a></li>
                        </ul>
                    </li>
                    <!--  -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light " href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Pages
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Blog</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link disabled text-light " aria-disabled="true">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled text-light" aria-disabled="true">My order</a>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn-search" type="submit" name="submit">login</button>
                </form>
            </div>
        </div>
    </nav>


    <div style="background-image: url(img-1.jpg); background-attachment: fixed; background-size: cover;" class="singup-form container-fluid d-flex align-items-center justify-content-center s-height ">

        <div style="min-height: 600px;"
            class="main-section col-md-8 col-12 d-flex align-items-center justify-content-center flex-md-row flex-column ">

            <div style="min-height:600px;" class="singimg-section d-flex align-items-center justify-content-center col-md-6 col-12 ">

                <img style=" width: 90%; height: 550px; border-radius: 10px;" src="art-3.jpg" alt="">

                <h1 style="font-family: nasa; position: absolute;">fuel<span
                        style="color: white; font-family: nasa; font-size: 70px;">x</span>Press</h1>


            </div>



            <div style="min-height: 600px;" class="sing-page d-flex align-items-center justify-content-center col-md-6 col-12 ">

                <form action="login.php" method="get" class="d-flex align-items-center justify-content-center flex-column gap-3">

                    <div class=" col-12 d-flex align-items-md-start justify-content-center flex-column gap-2 py-3 px-5">

                        <h1 class="" style="color: white; font-size: 45px;">Create an account</h1>
                        <label for="" style="color: white; font-size: 13px;">Already have an account? <a href="">Login</a></label>


                    </div>

                    <div class="d-flex align-items-center justify-content-center flex-wrap gap-4 py-3">

                        <input class="firstname  p-2" type="text" placeholder="Firstname" id="firstname" name="firstname">
                        <input class="lastname  p-2" type="text" placeholder="Lastname" id="lastname" name="lastname">
                        <input class="email col-md-10 col-10 p-2" type="email" placeholder="Email" id="email" name="email">
                        <input class="password col-md-10 col-10 p-2" type="password" placeholder="password" id="password" name="password">

                    </div>

                    <label for="" style="color: white;  font-size: 13px; margin-right: 180px;"><input type="checkbox"> I agree of the <a href="">Terms and conditions</a></label>

                    <button type="submit" class="sing-button col-md-11 py-2" name="submit">Create account</button>

                    

                </form>

            </div>

        </div>

    </div>

    <!-- ls -->

    <div style="min-height: 26rem; background-color:rgb(26, 24, 24); "
        class="ls-bottom-section container-fluid d-flex align-items-center justify-content-center flex-md-row flex-column py-md-0 py-5">

        <div
            class=" htext-section col-md-3 col-12 d-flex align-items-center justify-content-center flex-column">

            <h1 style="font-family: nasa; color: white;">...fuel<span
                    style="color: rgba(255,82,8,255); font-family: nasa; font-size: 80px;">x</span>Press</h1>

        </div>

        <div
            class=" col-md-2 col-12 d-flex align-items-center justify-content-center flex-column py-md-0 py-3 gap-4">

            <h4 style="color:rgba(220, 96, 8); font-weight: 600;">Company</h4>

            <div class="d-flex align-items-center justify-content-center flex-column gap-3">

                <span class="opj">About Us</span>

                <span class="opj">News & Media</span>

                <span class="opj">Our Products</span>

                <span class="opj">Work</span>

            </div>

        </div>

        <div
            class=" col-md-2 col-12  d-flex align-items-center justify-content-center flex-column  py-md-0 py-3 gap-4">

            <h4 style="color:rgba(220, 96, 8); font-weight: 600;">Solutions</h4>

            <div class=" d-flex align-items-center justify-content-center flex-column gap-3">

                <span class="opj">POT(Petrol on Tap)</span>

                <span class="opj">DOT(Diesel on Tap)</span>

                <span class="opj">GOT(Got on Tap)</span>

                <span class="opj">Smart Tank</span>

            </div>

        </div>

        <div
            class=" col-md-3 col-12  d-flex align-items-md-start align-items-center justify-content-center  px-4 py-md-0 py-5 mx-md-4  flex-column gap-4">

            <h4 style="color:rgba(220, 96, 8); font-weight: 600;">Quick Contact</h4>

            <div class="d-flex align-items-md-start align-items-center text-md-start text-center justify-content-center flex-column gap-2 ">

                <p style="color: white; font-size: 14px;">If you have any questions or need help, feel free to
                    contact with our team.</p>


                <span class="" style="color:rgba(220, 96, 8) ; font-size: 14px;"><i class="bi bi-envelope-fill"
                        style="color:rgba(220, 96, 8) ;"></i> pressfuelx@gmail.com</span>

                <span class="" style="color:rgba(220, 96, 8) ; font-size: 14px;"><i class="bi bi-telephone-fill"
                        style="color:rgba(220, 96, 8);"></i> +91-7016789352</span>

                <p style="color: white; font-size: 14px;">India-Gujarat : 30-patel society, Adalaj ,Gandhinagar</p>

            </div>

        </div>

    </div>

    </div>










    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    

    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>



<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    // Sanitize input
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO userin (firstname, lastname, email , password ) VALUES ('', '', '', '')");
    $stmt->bind_param("ssss", $firstname, $lastname, $email, $password);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Registration successful!');</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>