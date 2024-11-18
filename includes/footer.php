<footer>
        <section class="section position-relative" style="background-image: url(<?= ROOT_PATH ?>img/footer-banner-3.webp);" alt="banner">
            <div class="r-container">
                <div class="overlay"></div>
                <div class="d-flex justify-content-center align-items-center flex-column position-relative"
                    style="z-index: 2;">
                    <div class="mb-4">
                        <img src="<?= ROOT_PATH ?>image/logo.png" alt="logo" class="img-fluid">
                    </div>
                    <h4 class="text-white font-2 mb-4">Stay in Touch</h4>
                    <p class="text-gray font-1">
                    Stay in touch with us for updates, and inspiration, and to book your next unforgettable photography experience with AS Studio Vision! 
                    </p>
                    <form action="" class="w-100 form needs-validation">
                        <input type="text" name="action" value="Subscribe" hidden>
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control form-control-lg border-accent-color"
                                placeholder="Email" aria-label="Recipient's username" aria-describedby="button-addon2"
                                required>
                            <button class="btn border-accent-color btn_submit-subscribe text-white px-5" type="submit"
                                id="button-addon2" name="submit">Subscribe</button>
                        </div>
                    </form>
                    <div class="toast-container position-fixed bottom-0 end-0 p-3">
                        <div id="liveToast" class="toast success_msg_subscribe bg-dark-transparent text-white"
                            role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="d-flex">
                                <div class="toast-body">
                                    Your Subscribe Send Successfully!.
                                </div>
                                <button type="button" class="btn me-2 m-auto text-white" data-bs-dismiss="toast"
                                    aria-label="Close">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section class="py-5">
            <div class="r-container">
                <div class="d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="d-flex flex-row gap-3 mb-4">
                        <a type="button" href="https://www.facebook.com"
                            class="social-item p-2 d-flex align-items-center justify-content-center">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a type="button" href="https://www.dribble.com.com"
                            class="social-item p-2 d-flex align-items-center justify-content-center">
                            <i class="fa-brands fa-dribbble"></i>
                        </a>
                        <a type="button" href="https://www.behance.com"
                            class="social-item p-2 d-flex align-items-center justify-content-center">
                            <i class="fa-brands fa-behance"></i>
                        </a>
                        <a type="button" href="https://www.twitter.com"
                            class="social-item p-2 d-flex align-items-center justify-content-center">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a type="button" href="https://www.instagram.com"
                            class="social-item p-2 d-flex align-items-center justify-content-center">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                    <span class="text-gray font-1">Copyright AS Studio Vision © All rights Reserved 2024. </span>
                </div>
            </div>
        </section>
    </footer>
    <script src="<?= ROOT_PATH ?>js/vendor/fslightbox.js"></script>
    <script src="<?= ROOT_PATH ?>js/masonry.js"></script>
</body>

<?php
if (isset($_POST['submit'])) {
    // Collect and sanitize form data
    $subscriber_email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // Validate email
    if (!filter_var($subscriber_email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format')</script>";
        exit;
    }

    // Prepare the email
    $to = "info@asstudiovision.com";
    $subject = "New Newsletter Subscription";
    $body = "You have a new subscriber for your newsletter.\n\n" .
            "Subscriber Email: $subscriber_email";

    $headers = "From: $subscriber_email\r\n";
    $headers .= "Reply-To: $subscriber_email\r\n";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Thank you for subscribing!')</script>";
    } else {
        echo "<script>alert('Oops! Something went wrong. Please try again later.')</script>";
    }
}
?>