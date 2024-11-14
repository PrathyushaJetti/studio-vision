<?php include 'includes/header.php'; ?>

    <main>
        <section class="section position-relative" style="background-image: url(image/dummy-img-1920x900.jpg);">
            <div class="r-container">
                <div class="overlay-2"></div>
                <div class="position-relative" style="z-index: 2;">
                    <div class="d-flex flex-column justify-content-center align-items-center text-center"
                        style="margin-top: 7rem;">
                        <h3 class="font-1 fw-bold text-white">
                        Contact Us.
                        </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb font-2">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="r-container">
                <div class="row row-cols-1 row-cols-lg-2">
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
                            <form action="contact.php" class="d-flex flex-column w-100 needs-validation mb-3 form" novalidate>
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
                </div>
            </div>
        </section>

        <section>
            <div class="mb-3">
                <iframe loading="lazy" class="maps"
                    src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=near"
                    title="London Eye, London, United Kingdom"
                    aria-label="London Eye, London, United Kingdom"></iframe>
            </div>
        </section>

        <section class="section">
            <div class="r-container">
                <div class="d-flex flex-column justify-content-center align-items-center text-center gap-3">
                    <h4 class="text-white font-1 fw-bold fs-1">Take your moment with Codagraph</h4>
                    <p class="text-gray" style="max-width: 768px;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="" type="button" class="btn rounded-0">GET STARTED</a>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>

</html>


<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form fields
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    // Set the recipient email address.
    $to = "info@asstudiovision.com";

    // Set the email subject.
    $subject = "New Contact Form Submission from $name";

    // Build the email content.
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Build the email headers.
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        // Redirect to a thank you page or display a success message
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong, and we couldn't send your message.";
    }
}
?>
