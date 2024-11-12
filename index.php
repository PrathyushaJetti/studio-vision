<?php include './includes/header.php'; ?>

    <main>
        <section class="section image-infinite-bg position-relative"
            style="background-size: cover; background-position: center ;padding: 15em 1em 15em 1em;"
            data-images='["image/dummy-img-1920x900.jpg", "image/dummy-img-1920x900.jpg", "image/dummy-img-1920x900.jpg"]'>
            <div class="r-container h-100">
                <div class="image-overlay"></div>
                <div class="d-flex flex-column justify-content-center text-center gap-3 h-100 position-relative"
                    style="z-index: 2;">
                    <div class="divider divider-before mx-auto">
                        <span class="accent-color fs-5 mx-3">LET IT BE AMAZING</span>
                    </div>
                    <h2 class="text-title text-white fw-bold font-1 lh-1">Professional Studio Photography</h2>
                    <p class="text-white f-18 text-font mx-auto" style="max-width: 768px;">Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    <div>
                        <a type="button" href="" class="btn text-font rounded-0 font-1">VIEW PORTFOLIO</a>
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
                            <img src="image/dummy-img-600x800.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column justify-content-center gap-3 h-100">
                                <div class="divider mb-3">
                                    <span class="accent-color fs-5 me-3">HI I'M ALEX</span>
                                </div>
                                <h4 class="text-title text-white fw-bold font-1 lh-1">Professional Photographer</h4>
                                <p class="text-white f-18 text-font my-4">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut
                                    enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                    ea
                                    commodo consequat.
                                </p>
                                <div class="my-4">
                                    <img src="image/TTD.png" alt="" class="img-fluid" style="max-width: 300px;">
                                </div>
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
                                    aria-controls="pills-profile" aria-selected="false">Fashion Photography</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#tabs_landscape" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">Landscape Photography</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#tabs_portrait" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">Portrait Photography</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="tabs_allwork" role="tabpanel"
                                aria-labelledby="pills-home-tab" tabindex="0">
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 masonry-grid">
                                    <div class="col masonry-item mb-3">
                                        <a href="image/dummy-img-900x600.jpg" data-fslightbox="all-work">
                                            <img src="image/dummy-img-900x600.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col masonry-item mb-3">
                                        <a href="image/dummy-img-600x800.jpg" data-fslightbox="all-work">
                                            <img src="image/dummy-img-600x800.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col masonry-item mb-3">
                                        <a href="image/dummy-img-900x600.jpg" data-fslightbox="all-work">
                                            <img src="image/dummy-img-900x600.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col masonry-item mb-3">
                                        <a href="image/dummy-img-900x600.jpg" data-fslightbox="all-work">
                                            <img src="image/dummy-img-900x600.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>

                                    <div class="col masonry-item mb-3">
                                        <a href="image/dummy-img-900x600.jpg" data-fslightbox="all-work">
                                            <img src="image/dummy-img-900x600.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs_fashion" role="tabpanel"
                                aria-labelledby="pills-profile-tab" tabindex="0">
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 masonry-grid">
                                    <div class="col masonry-item mb-3">
                                        <a href="image/dummy-img-900x600.jpg" data-fslightbox="fashion">
                                            <img src="image/dummy-img-900x600.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col masonry-item mb-3">
                                        <a href="image/dummy-img-600x800.jpg" data-fslightbox="fashion">
                                            <img src="image/dummy-img-600x800.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col masonry-item mb-3">
                                        <a href="image/dummy-img-900x600.jpg" data-fslightbox="fashion">
                                            <img src="image/dummy-img-900x600.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col masonry-item mb-3">
                                        <a href="image/dummy-img-600x800.jpg" data-fslightbox="fashion">
                                            <img src="image/dummy-img-600x800.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col masonry-item mb-3">
                                        <a href="image/dummy-img-600x800.jpg" data-fslightbox="fashion">
                                            <img src="image/dummy-img-600x800.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col masonry-item mb-3">
                                        <a href="image/dummy-img-900x600.jpg" data-fslightbox="fashion">
                                            <img src="image/dummy-img-900x600.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs_landscape" role="tabpanel"
                                aria-labelledby="pills-contact-tab" tabindex="0">
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 masonry-grid ">
                                    <div class="col masonry-item mb-3">
                                        <a href="image/dummy-img-900x600.jpg" data-fslightbox="landscape">
                                            <img src="image/dummy-img-900x600.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col masonry-item mb-3">
                                        <a href="image/dummy-img-600x800.jpg" data-fslightbox="landscape">
                                            <img src="image/dummy-img-600x800.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col masonry-item mb-3">
                                        <a href="image/dummy-img-600x800.jpg" data-fslightbox="landscape">
                                            <img src="image/dummy-img-600x800.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col masonry-item mb-3">
                                        <a href="image/dummy-img-900x600.jpg" data-fslightbox="landscape">
                                            <img src="image/dummy-img-900x600.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs_portrait" role="tabpanel"
                                aria-labelledby="pills-contact-tab" tabindex="0">
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 masonry-grid">
                                    <div class="col masonry-item mb-3">
                                        <a href="image/dummy-img-900x600.jpg" data-fslightbox="portrait">
                                            <img src="image/dummy-img-900x600.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col masonry-item mb-3">
                                        <a href="image/dummy-img-600x800.jpg" data-fslightbox="portrait">
                                            <img src="image/dummy-img-600x800.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col masonry-item mb-3">
                                        <a href="image/dummy-img-900x600.jpg" data-fslightbox="portrait">
                                            <img src="image/dummy-img-900x600.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col masonry-item mb-3">
                                        <a href="image/dummy-img-600x800.jpg" data-fslightbox="portrait">
                                            <img src="image/dummy-img-600x800.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col masonry-item mb-3">
                                        <a href="image/dummy-img-600x800.jpg" data-fslightbox="portrait">
                                            <img src="image/dummy-img-600x800.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col masonry-item mb-3">
                                        <a href="image/dummy-img-900x600.jpg" data-fslightbox="portrait">
                                            <img src="image/dummy-img-900x600.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center my-3">
                        <a href="" type="button" class="btn rounded-0">VIEW MORE</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section bg-secondary-dark">
            <div class="r-container">
                <div class="row row-cols-1 row-cols-lg-6">
                    <div class="col mb-3 mb-lg-0">
                        <img src="image/logo-ipsum-1.png" alt="" class="img-fluid">
                    </div>
                    <div class="col mb-3 mb-lg-0">
                        <img src="image/logo-ipsum-2.png" alt="" class="img-fluid">
                    </div>
                    <div class="col mb-3 mb-lg-0">
                        <img src="image/logo-ipsum-3.png" alt="" class="img-fluid">
                    </div>
                    <div class="col mb-3 mb-lg-0">
                        <img src="image/logo-ipsum-4.png" alt="" class="img-fluid">
                    </div>
                    <div class="col mb-3 mb-lg-0">
                        <img src="image/logo-ipsum-5.png" alt="" class="img-fluid">
                    </div>
                    <div class="col mb-3 mb-lg-0">
                        <img src="image/logo-ipsum-6.png" alt="" class="img-fluid">
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
                                        <span class="text-gray">345 563 23</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div class="d-flex flex-row align-items-center gap-3">
                                    <i class="fa-solid fa-earth-asia accent-color fs-1"></i>
                                    <div class="d-flex flex-column">
                                        <h6 class="text-white font-1">Site</h6>
                                        <span class="text-gray">www.awesomesite.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div class="d-flex flex-row align-items-center gap-3">
                                    <i class="fa-solid fa-envelope accent-color fs-1"></i>
                                    <div class="d-flex flex-column">
                                        <h6 class="text-white font-1">Email</h6>
                                        <span class="text-gray">hello@awesomesite.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div class="d-flex flex-row align-items-center gap-3">
                                    <i class="fa-solid fa-location-dot accent-color fs-1"></i>
                                    <div class="d-flex flex-column">
                                        <h6 class="text-white font-1">Address</h6>
                                        <span class="text-gray">99 Roving St., Big City, PKU 23456</span>
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