<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Stylesheet -->
    <link href="css/vendor/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/vendor/fontawesome.css">
    <link rel="stylesheet" href="css/vendor/brands.css">
    <link rel="stylesheet" href="css/vendor/regular.css">
    <link rel="stylesheet" href="css/vendor/solid.css">
    <link rel="stylesheet" href="css/vendor/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>StudioVision</title>
    <style>

                /* Open the dropdown on hover */
                .nav-item.dropdown:hover .dropdown-menu {
                    display: block;
                    opacity: 1;
                    visibility: visible;
                }

                /* Optional styling for smooth dropdown transition */
                .dropdown-menu {
                    display: none; /* Initially hidden */
                    opacity: 0;
                    visibility: hidden;
                    transition: opacity 0.3s ease, visibility 0.3s ease;
                }
                /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
                @media screen and (max-width: 600px) {
                    /* .dropdown-col .dropdown-item {
                    width: 100%;
                    height: auto;
                    z-index: 1;
                    margin-left:372% !important;
                    display: flex;
                    flex-wrap: wrap;
                    gap: 0.5rem;

                } */
                }

/* Responsive adjustments with media queries */

/* Medium screens (tablets and smaller) */
@media screen and (max-width: 992px) {
    .dropdown-col {
        flex: 1 1 50%; /* 2 columns */
    }
}

/* Small screens (phones) */
@media screen and (max-width: 600px) {
    .dropdown-menu {
        flex-direction: column; /* Stack columns vertically */
        max-width: 100%; /* Full width on smaller screens */
        margin-left: 0;
    }
}
                </style>
</head>

<body>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/swiper-script.js"></script>
    <script src="js/submit-form.js"></script>
    <script src="js/vendor/isotope.pkgd.min.js"></script>

    <!-- Header -->
    <section class="fixed-top" id="header">
        <div class="r-container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <div class="logo-container">
                        <a href="index.php"><img src="image/logo.png" alt="" class="img-fluid"></a>
                    </div>
                    <button class="navbar-toggler border-0 accent-color" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars-staggered"></i>
                    </button>
                    <div class="collapse navbar-collapse px-3 px-lg-0  pb-3 pb-lg-0" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 font-1 gap-lg-4">
                            <li class="nav-item dropdown">
                                <a class="nav-link active" href="#" role="button"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                    Home
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="index.php">Home</a>
                                    </li>
                                    <!-- <li><a class="dropdown-item active" href="index-2.html">Homepage 2</a></li> -->
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside" aria-expanded="false">
                                    About
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="about_company.php">About Company</a>
                                    </li>
                                    <!-- <li><a class="dropdown-item" href="about_personal.html">About Personal</a></li> -->
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="services.php" role="button" data-bs-toggle="dropdown"
        data-bs-auto-close="outside" aria-expanded="false">
        Services
    </a>
    <ul class="dropdown-menu" style="width: 600%; max-width: 800px; display: flex; flex-wrap: wrap;">
        <div class="dropdown-col" style="width: 25%;">
            <li><a class="dropdown-item" href="service1.php">Service 1</a></li>
            <li><a class="dropdown-item" href="service2.php">Service 2</a></li>
            <li><a class="dropdown-item" href="service3.php">Service 3</a></li>
            <li><a class="dropdown-item" href="service4.php">Service 4</a></li>
        </div>
        <div class="dropdown-col" style="width: 25%;">
            <li><a class="dropdown-item" href="service5.php">Service 5</a></li>
            <li><a class="dropdown-item" href="service6.php">Service 6</a></li>
            <li><a class="dropdown-item" href="service7.php">Service 7</a></li>
            <li><a class="dropdown-item" href="service8.php">Service 8</a></li>
        </div>
        <div class="dropdown-col" style="width: 25%;">
            <li><a class="dropdown-item" href="service9.php">Service 9</a></li>
            <li><a class="dropdown-item" href="service10.php">Service 10</a></li>
            <li><a class="dropdown-item" href="service11.php">Service 11</a></li>
            <li><a class="dropdown-item" href="service12.php">Service 12</a></li>
        </div>
        <div class="dropdown-col" style="width: 25%;">
            <li><a class="dropdown-item" href="service13.php">Service 13</a></li>
            <li><a class="dropdown-item" href="service14.php">Service 14</a></li>
            <li><a class="dropdown-item" href="service15.php">Service 15</a></li>
            <li><a class="dropdown-item" href="service16.php">Service 16</a></li>
        </div>
    </ul>
    
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside" aria-expanded="false">
                                    Contact Us
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="contact.php">Contact Us</a>
                                    </li>
                                    <!-- <li><a class="dropdown-item" href="about_personal.html">About Personal</a></li> -->
                                </ul>
                            </li>
                        </ul>
                        
                        <div>
                            <a type="button" href="" class="font-2">GET STARTED</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </section>
    <!-- End Header -->