<?php ;
$meta = [
    'title' => "Best photography services for All occasions | AS Studio Vision",
    'description' => "AS Studio Vision provides professional photography services for every occasion, including weddings, events, portraits, and product shoots to capture your moments perfectly.",
    'keywords' => "best photography services, best photo studio near me, best photographers near me, photography services, photography studio, professional wedding photographer, portrait photography, newborn photography, family photographers near me, event photography, photoshoot services, candid pre-wedding shoot, pre-wedding photography, post wedding, Birthday party, Baby and kids portfolio,  Special Events, Fashion portfolio, Documentary service, Short film and Teaser,   Indoor and outdoor photography Services, Corporate event, Live streaming, Albums and photo frames designing services, Video Editing Services, Food and products  photography services, Social media videography services, Advertising Videos production services,",
   
    
]; 
include('includes/header.php')

 ?>

    <main>
        <section class="section image-infinite-bg position-relative"
            style="background-size: cover; background-position: center ;padding: 15em 1em 15em 1em;"
            data-images='["img/home-page-banner.webp", "img/home-page-banner-2.webp", "img/home-page-banner-3.webp"]'>
            <div class="r-container h-100">
                <div class="image-overlay"></div>
                <div class="d-flex flex-column justify-content-center text-center gap-3 h-100 position-relative"
                    style="z-index: 2;">
                    <!-- <div class="divider divider-before mx-auto">
                        <span class="accent-color fs-5 mx-3">LET IT BE AMAZING</span>
                    </div> -->
                    <h2 class="text-title text-white fw-bold font-1 lh-1"> Capture your special moments with us </h2>
                    <p class="text-white f-18 text-font mx-auto" style="max-width: 768px;">Discover the best photography services that capture every moment with precision and creativity. From indoor to outdoor shoots, we turn special occasions into lasting memories with stunning, high-quality images.</p>
                    <div>
                        <a type="button" href="services.php" class="btn text-font rounded-0 font-1">VIEW SERVICES</a>
                    </div>
                </div>
            </div>
        </section>
        

        <section class="section position-relative">
            <div class="r-container">
                <div class="image-overlay-3"></div>
                <div class="position-relative" style="z-index: 2;">
                    <div class="row row-cols-1 row-cols-lg-2">
                        <div class="col">
                            <img src="img/about-image.webp" alt="about-picture" class="img-fluid">
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column justify-content-center gap-3 h-100">
                                
                                <h4 class="text-title text-white fw-bold font-1 lh-1">Professional Photographer</h4>
                                <p class="text-white f-18 text-font my-4">Our expert photographer brings a keen eye, technical skill, and creative vision to every shot. With years of experience, we capture moments that reflect true emotions and tell stories. Trust an expert to create unforgettable experiences.


                                </p>
                               
                                <div class="d-flex flex-row gap-3 ">
                                    <a type="button" href=""
                                        class="social-item p-2 d-flex align-items-center justify-content-center">
                                        <i class="fa-brands fa-dribbble"></i>
                                    </a>
                                    <a type="button" href=""
                                        class="social-item p-2 d-flex align-items-center justify-content-center">
                                        <i class="fa-brands fa-behance"></i>
                                    </a>
                                    <a type="button" href=""
                                        class="social-item p-2 d-flex align-items-center justify-content-center">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                    <a type="button" href=""
                                        class="social-item p-2 d-flex align-items-center justify-content-center">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section class="py-5 position-relative">
            <div class="r-container">
                <div class="row row-cols-1 row-cols-lg-3 py-3 position-relative w-100" style="z-index: 2;">
                    <div class="col mb-3">
                        <div class="d-flex flex-column justify-content-center text-center align-items-center gap-3">
                            <i class="fa-solid fa-user-group accent-color" style="font-size: 50px;"></i>
                            <div class="font-2 fw-bold">
                                <h3 class="text-white">1,269</h3>
                                <h6 class="text-white">Happy Costumer</h6>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col mb-3">
                        <div class="d-flex flex-column justify-content-center text-center align-items-center gap-3">
                            <i class="fa-solid fa-users accent-color" style="font-size: 50px;"></i>
                            <div class="font-2 fw-bold"> 
                                <h3 class="text-white"> 5</h3>
                                <h6 class="text-white">Profesional Team</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="d-flex flex-column justify-content-center text-center align-items-center gap-3">
                            <i class="fa-solid fa-camera accent-color" style="font-size: 50px;"></i>
                            <div class="font-2 fw-bold">
                                <h3 class="text-white">2,987</h3>
                                <h6 class="text-white">Photos Taken</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="r-container">
                <div class="d-flex flex-column">
                    <div>
                        <div class="divider mb-4">
                            <span class="accent-color fs-5 me-3">OUR PORTFOLIO</span>
                        </div>
                        <h4 class="text-title text-white fw-bold font-1 lh-1 mb-5">Latest Work.</h4>
                    </div>
                    <div>
                        <ul class="nav justify-content-center nav-tabs mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#tabs_allwork" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">All Works</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#tabs_fashion" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false"> Wedding </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#tabs_landscape" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false"> Food and Products</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#tabs_portrait" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">Social Media Videos</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="tabs_allwork" role="tabpanel"
                                aria-labelledby="pills-home-tab" tabindex="0">
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 masonry-grid">
                                    <div class="col masonry-item mb-3">
                                        <a href="img/Food - Products-4.webp" data-fslightbox="all-work">
                                            <img src="img/Food - Products-4.webp" alt="food" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col masonry-item mb-3">
                                        <a href="img/wedding-7.webp" data-fslightbox="all-work">
                                            <img src="img/wedding-7.webp" alt="wedding" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col masonry-item mb-3">
                                        <a href="img/social-media-9.webp" data-fslightbox="all-work">
                                            <img src="img/social-media-9.webp" alt="social media" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col masonry-item mb-3">
                                        <a href="img/wedding-3.webp" data-fslightbox="all-work">
                                            <img src="img/wedding-3.webp" alt="wedding" class="img-fluid">
                                        </a>
                                    </div>

                                    <div class="col masonry-item mb-3">
                                        <a href="img/social-media-4.webp" data-fslightbox="all-work">
                                            <img src="img/social-media-4.webp" alt="social media" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs_fashion" role="tabpanel"
                                aria-labelledby="pills-profile-tab" tabindex="0">
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 masonry-grid">
                                    <div class="col masonry-item mb-3">
                                        <a href="img/wedding-1.webp" data-fslightbox="fashion">
                                            <img src="img/wedding-1.webp" alt="wedding" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col masonry-item mb-3">
                                        <a href="img/wedding-7.webp" data-fslightbox="fashion">
                                            <img src="img/wedding-7.webp" alt="wedding" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col masonry-item mb-3">
                                        <a href="img/wedding-2.webp" data-fslightbox="fashion">
                                            <img src="img/wedding-2.webp" alt="wedding" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col masonry-item mb-3">
                                        <a href="mg/wedding-6.webp" data-fslightbox="fashion">
                                            <img src="img/wedding-6.webp" alt="wedding" class="img-fluid">
                                        </a>
                                    </div>
                                    
                                    <div class="col masonry-item mb-3">
                                        <a href="img/wedding-8.webp" data-fslightbox="fashion">
                                            <img src="img/wedding-8.webp" alt="wedding" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col masonry-item mb-3">
                                        <a href="img/wedding-4.webp" data-fslightbox="fashion">
                                            <img src="img/wedding-4.webp" alt="wedding" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col masonry-item mb-3">
                                        <a href="img/wedding-5.webp" data-fslightbox="fashion">
                                            <img src="img/wedding-5.webp" alt="wedding" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs_landscape" role="tabpanel"
                                aria-labelledby="pills-contact-tab" tabindex="0">
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 masonry-grid ">
                                    <div class="col masonry-item mb-3">
                                        <a href="img/Food - Products-3.webp" data-fslightbox="landscape">
                                            <img src="img/Food - Products-3.webp" alt=" food products" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col masonry-item mb-3">
                                        <a href="img/Food - Products-6.webp" data-fslightbox="landscape">
                                            <img src="img/Food - Products-6.webp" alt="food products" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col masonry-item mb-3">
                                        <a href="img/Food - Products-7.webp" data-fslightbox="landscape">
                                            <img src="img/Food - Products-7.webp" alt="food products" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col masonry-item mb-3">
                                        <a href="img/Food - Products-4.webp" data-fslightbox="landscape">
                                            <img src="img/Food - Products-4.webp" alt="food products" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs_portrait" role="tabpanel"
                                aria-labelledby="pills-contact-tab" tabindex="0">
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 masonry-grid">
                                    <div class="col masonry-item mb-3">
                                        <a href="img/social-media-3.webp" data-fslightbox="portrait">
                                            <img src="img/social-media-3.webp" alt="social media" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col masonry-item mb-3">
                                        <a href="img/social-media-1.webp" data-fslightbox="portrait">
                                            <img src="img/social-media-1.webp" alt="social media" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col masonry-item mb-3">
                                        <a href="img/social-media-4.webp" data-fslightbox="portrait">
                                            <img src="img/social-media-4.webp" alt="social media" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col masonry-item mb-3">
                                        <a href="img/social-media-2.webp" data-fslightbox="portrait">
                                            <img src="img/social-media-2.webp" alt="social media" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col masonry-item mb-3">
                                        <a href="img/social-media-13.webp" data-fslightbox="portrait">
                                            <img src="img/social-media-13.webp" alt="social media" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col masonry-item mb-3">
                                        <a href="img/social-media-9.webp" data-fslightbox="portrait">
                                            <img src="img/social-media-9.webp" alt="social media" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center my-3">
                        <a href="services.php" type="button" class="btn rounded-0">VIEW MORE</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="section position-relative bg-attach-fixed"
            style="background-image: url(img/banner-2.webp);" alt="banner">
            <div class="r-container">
                <div class="overlay"></div>
                <div class="position-relative" style="z-index: 2;">
                    <div class="divider mb-4">
                        <span class="accent-color fs-5 me-3">WHAT CLIENT SAYS</span>
                    </div>
                    <h4 class="text-title text-white fw-bold font-1 lh-1 mb-5">Testimonials.</h4>
                </div>
                <div class="d-flex h-100 justify-content-center flex-lg-row flex-column position-relative"
                    style="z-index: 2;">
                    <div class="d-flex justify-content-start justify-content-lg-end px-4">
                        <i class="fa-solid fa-quote-left accent-color" style="font-size: 80px;"></i>
                    </div>
                    <div class="overflow-hidden">
                        <div class="swiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="d-flex flex-column p-4">
                                        <p class="text-gray mb-4 p-4 fs-5 fst-italic font-1">
                                        We booked them for our engagement photos, and they exceeded our expectations. The pictures were breathtaking, with perfect lighting and creative angles. We’re so excited to share these memories with our loved ones.</p>
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="me-4">
                                                <img src="img/testimonial-1.webp" alt=""
                                                    class="rounded-circle img-fluid"
                                                    style="width: 4.5rem; height: 4.5rem;">
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1">
                                                <h6 class="accent-color font-2 lh-1"> Meera & David </h6>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="d-flex flex-column p-4">
                                        <p class="text-gray mb-4 p-4 fs-5 fst-italic font-1">
                                        They did an amazing job with my baby’s photoshoot. The team was so patient and creative, making my little one smile naturally. The photos turned out adorable. We are so happy with their work thank you.</p>
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="me-4">
                                                <img src="img/testimonial-2.webp" alt=""
                                                    class="rounded-circle img-fluid"
                                                    style="width: 4.5rem; height: 4.5rem;">
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1">
                                                <h6 class="accent-color font-2 lh-1"> Miley </h6>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="d-flex flex-column p-4">
                                        <p class="text-gray mb-4 p-4 fs-5 fst-italic font-1">
                                        We contacted them for my daughter’s birthday party, and they captured every joyful moment perfectly. The photos are vibrant and full of life, bringing back all the happy memories. Highly recommend it for any special occasion.</p>
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="me-4">
                                                <img src="img/testimonial-3.webp" alt=""
                                                    class="rounded-circle img-fluid"
                                                    style="width: 4.5rem; height: 4.5rem;">
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1">
                                                <h6 class="accent-color font-2 lh-1"> Rachel </h6>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    

        <section class="section">
            <div class="r-container">
                <div class="row row-cols-1 row-cols-lg-2">
                    <div class="col">
                        <div class="h-100 d-flex flex-column">
                            <div class="success_msg toast align-items-center w-100 shadow-none mb-3 bg-transparent border border-success rounded-0 my-4"
                                role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="d-flex p-2">
                                    <div class="toast-body f-18 d-flex flex-row gap-3 align-items-center text-success">
                                        <i class="fa-solid fa-check f-36 text-success"></i>
                                        Your Message Successfully Send.
                                    </div>
                                    <button type="button"
                                        class="me-2 m-auto bg-transparent border-0 ps-1 pe-0 text-success"
                                        data-bs-dismiss="toast" aria-label="Close"><i
                                            class="fa-solid fa-xmark"></i></button>
                                </div>
                            </div>
                            <div class="error_msg toast align-items-center w-100 shadow-none border-danger mb-3 bg-transparent my-4 border rounded-0"
                                role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="d-flex p-2">
                                    <div class="toast-body f-18 d-flex flex-row gap-3 align-items-center text-danger">
                                        <i class="fa-solid fa-triangle-exclamation f-36 text-danger"></i>
                                        Something Wrong ! Send Form Failed.
                                    </div>
                                    <button type="button"
                                        class="me-2 m-auto bg-transparent border-0 ps-1 pe-0 text-danger"
                                        data-bs-dismiss="toast" aria-label="Close"><i
                                            class="fa-solid fa-xmark"></i></button>
                                </div>
                            </div>
                            <form action="" class="d-flex flex-column w-100 needs-validation mb-3 form" novalidate>
                                <div class="mb-3">
                                    <input type="text" class="form-control p-3" name="name" id="name" placeholder="Name"
                                        required>
                                    <div class="invalid-feedback">
                                        The field is required.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control p-3" name="email" id="email"
                                        placeholder="Email" required>
                                    <div class="invalid-feedback">
                                        The field is required.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" id="message" name="message" rows="5"
                                        placeholder="Message"></textarea>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn submit_form font-1 py-3">
                                        Send Message
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="divider mb-4">
                            <span class="accent-color fs-5 me-3">GET IN TOUCH</span>
                        </div>
                        <h4 class="text-title text-white fw-bold font-1 lh-1 mb-5">Contact Us.</h4>
                        <p class="text-gray">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris.
                        </p>
                        <div class="row row-cols-1 row-cols-lg-2 mt-5">
                            <div class="col mb-3">
                                <div class="d-flex flex-row align-items-center gap-3">
                                    <i class="fa-solid fa-phone accent-color fs-1"></i>
                                    <div class="d-flex flex-column">
                                        <h6 class="text-white font-1">Phone</h6>
                                        <span class="text-gray">+91-9908107853</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div class="d-flex flex-row align-items-center gap-3">
                                    <i class="fa-solid fa-earth-asia accent-color fs-1"></i>
                                    <div class="d-flex flex-column">
                                        <h6 class="text-white font-1">Site</h6>
                                        <span class="text-gray">asw-enterprises.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div class="d-flex flex-row align-items-center gap-3">
                                    <i class="fa-solid fa-envelope accent-color fs-1"></i>
                                    <div class="d-flex flex-column">
                                        <h6 class="text-white font-1">Email</h6>
                                        <span class="text-gray">info@asstudiovision.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div class="d-flex flex-row align-items-center gap-3">
                                    <i class="fa-solid fa-location-dot accent-color fs-1"></i>
                                    <div class="d-flex flex-column">
                                        <h6 class="text-white font-1">Address</h6>
                                        <span class="text-gray">Raheem Villa, 2nd Floor Road No 3 & 5,Opp MJ College, Near IVRCL, Banjara Hills, Hyderabad, Telangana.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include './includes/footer.php'; ?>

</html>