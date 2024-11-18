<?php
define('ROOT_PATH', 'http://localhost/studio-vision/');
?>

<!DOCTYPE html>
<html lang="en">

<head>
<title><?php $title = isset($meta['title']) ? $meta['title'] : 'AS Studio Vision';
    echo $title; ?></title>
    <meta name="description" content="<?php 
    $title = isset($meta['description']) ? $meta['description'] : 'AS Studio Vision';
    echo $meta['description'] ;?>">
    <meta name="keywords" content="<?php 
    $title = isset($meta['keywords']) ? $meta['keywords'] : 'AS Studio Vision';
    echo $meta['keywords'] ;?>">
    

    <!-- Stylesheet -->
    <link href="<?= ROOT_PATH ?>css/vendor/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= ROOT_PATH ?>css/vendor/fontawesome.css">
    <link rel="stylesheet" href="<?= ROOT_PATH ?>css/vendor/brands.css">
    <link rel="stylesheet" href="<?= ROOT_PATH ?>css/vendor/regular.css">
    <link rel="stylesheet" href="<?= ROOT_PATH ?>css/vendor/solid.css">
    <link rel="stylesheet" href="<?= ROOT_PATH ?>css/vendor/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?= ROOT_PATH ?>css/style.css">

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
    <script src="<?= ROOT_PATH ?>js/vendor/bootstrap.bundle.min.js"></script>
    <script src="<?= ROOT_PATH ?>js/vendor/jquery.min.js"></script>
    <script src="<?= ROOT_PATH ?>js/vendor/swiper-bundle.min.js"></script>
    <script src="<?= ROOT_PATH ?>js/script.js"></script>
    <script src="<?= ROOT_PATH ?>js/swiper-script.js"></script>
    <script src="<?= ROOT_PATH ?>js/submit-form.js"></script>
    <script src="<?= ROOT_PATH ?>js/vendor/isotope.pkgd.min.js"></script>

    <!-- Header -->
    <section class="fixed-top" id="header">
        <div class="r-container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <div class="logo-container">
                        <a href="<?= ROOT_PATH ?>index.php"><img src="<?= ROOT_PATH ?>img/logo.png" alt="logo" class="img-fluid"></a>
                    </div>
                    <button class="navbar-toggler border-0 accent-color" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars-staggered"></i>
                    </button>
                    <div class="collapse navbar-collapse px-3 px-lg-0  pb-3 pb-lg-0" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 font-1 gap-lg-4">
                            <li class="nav-item dropdown">
                                <a class="nav-link active" href="<?= ROOT_PATH ?>index.php" role="button"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                    Home
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?= ROOT_PATH ?>index.php">Home</a>
                                    </li>
                                    <!-- <li><a class="dropdown-item active" href="index-2.html">Homepage 2</a></li> -->
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="<?= ROOT_PATH ?>about_company.php" role="button" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside" aria-expanded="false">
                                    About
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?= ROOT_PATH ?>about_company.php">About Company</a>
                                    </li>
                                    <!-- <li><a class="dropdown-item" href="about_personal.html">About Personal</a></li> -->
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="<?= ROOT_PATH ?>services.php" role="button" data-bs-toggle="dropdown"
        data-bs-auto-close="outside" aria-expanded="false">
        Services
    </a>
    
    <ul class="dropdown-menu" style="width: 600%; max-width: 800px; display: flex; flex-wrap: wrap;">
        <div class="dropdown-col" style="width: 25%;">
            <li><a class="dropdown-item" href="<?= ROOT_PATH ?>services/pre-post-wedding.php"> Pre/Post Wedding </a></li>
            <li><a class="dropdown-item" href="<?= ROOT_PATH ?>services/wedding.php"> Wedding </a></li>
            <li><a class="dropdown-item" href="<?= ROOT_PATH ?>services/birthday-party.php"> Birthday Party </a></li>
            <li><a class="dropdown-item" href="<?= ROOT_PATH ?>services/baby-kids-portfolio.php"> Baby/Kids Portfolio </a></li>
        </div>
        <div class="dropdown-col" style="width: 25%;">
            <li><a class="dropdown-item" href="<?= ROOT_PATH ?>services/special-events.php"> Special Events </a></li>
            <li><a class="dropdown-item" href="<?= ROOT_PATH ?>services/fashion-portfolio.php"> Fashion Portfolio </a></li>
            <li><a class="dropdown-item" href="<?= ROOT_PATH ?>services/documentary.php"> Documentary </a></li>
            <li><a class="dropdown-item" href="<?= ROOT_PATH ?>services/short-film-and-teaser.php"> Short Film & Teaser </a></li>
        </div>
        <div class="dropdown-col" style="width: 25%;">
            <li><a class="dropdown-item" href="<?= ROOT_PATH ?>services/indoor-outdoor-services.php"> Indoor/Outdoor </a></li>
            <li><a class="dropdown-item" href="<?= ROOT_PATH ?>services/corporate-event.php"> Corporate Event </a></li>
            <li><a class="dropdown-item" href="<?= ROOT_PATH ?>services/live-streaming.php"> Live Streaming</a></li>
            <li><a class="dropdown-item" href="<?= ROOT_PATH ?>services/albums-frames.php"> Albums/Frames </a></li>
        </div>
        <div class="dropdown-col" style="width: 25%;">
            <li><a class="dropdown-item" href="<?= ROOT_PATH ?>services/video-editing-services.php"> Video Editing </a></li>
            <li><a class="dropdown-item" href="<?= ROOT_PATH ?>services/food-products.php"> Food/Products  </a></li>
            <li><a class="dropdown-item" href="<?= ROOT_PATH ?>services/media-videos.php"> Social Media Videos </a></li>
            <li><a class="dropdown-item" href="<?= ROOT_PATH ?>services/advertising-videos.php "> Advertising Videos </a></li>
        </div>
    </ul>
    
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="<?= ROOT_PATH ?>contact.php" role="button" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside" aria-expanded="false">
                                    Contact Us
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?= ROOT_PATH ?>contact.php">Contact Us</a>
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