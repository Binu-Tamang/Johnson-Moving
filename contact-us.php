<!-- header parts start -->
<?php include('inc/header.php') ?>
<!-- header part ends -->

<!-- banner and headre page  -->
<?php $page_name = 'Contact Us' ?>
<?php include('inc/sub-banner.php') ?>
<!-- banner and header page -->

<section class="cnt-page">
    <div class="container">
        <div class="contact-box">
            <h2 class="web-header text-center" data-wow-duration="1s">Contact Us</h2>
            <div class="span-line justify-content-center">
                <span class="web-line text-center"></span>
            </div>
            <div class="box-cnt-wrapper">
                <div class="row">
                    <div class="col-md-4">
                        <div class="cnt-wrapper-d choose-d box-cnc-nc">
                        <i class="fa-solid fa-envelope"></i>
                            <strong>Our Email</strong>
                            <a href="mailto:jms778@live.com">jms778@live.com</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cnt-wrapper-d choose-d">
                            <i class="fa-solid fa-phone-volume"></i>
                            <strong>Phone Number</strong>
                            <a href="tel:202-329-5995">202-329-5995</a> <br>
                            
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cnt-wrapper-d choose-d box-cnc-nc">
                            <i class="fa-solid fa-location-dot"></i>
                            <strong>Our Location</strong>
                            <a href="#">Washington, DC</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="cnt-pg-map g-view-contact">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49707.15996501417!2d-77.01349585300933!3d38.86228091299519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7b844c33cb89d%3A0xb6f40376814d4157!2sWashington%2C%20DC%2020020%2C%20USA!5e0!3m2!1sen!2snp!4v1706694168821!5m2!1sen!2snp"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <div class="cnt-pg-form">
                <p>Fill
                                    in the form below to send us a message or to ask about any queries you might have.
                                </p>
                    <form class="cnct-form" id="contactForm " action="php/contact-form.php" method="post">
                        <div class="row g-3">
                            <div class="col-12 col-lg-6">
                                <input type="text" id="name" name="name" class="form-control border-2" required
                                    placeholder="Your First Name" style="height: 55px;">
                                <small id="nameError" class="form-text text-danger"></small>
                            </div>

                            <div class="col-12 col-lg-6">
                                <input type="text" id="name" name="name" class="form-control border-2" required
                                    placeholder="Your Last Name" style="height: 55px;">
                                <small id="nameError" class="form-text text-danger"></small>
                            </div>
                            <div class="col-12 col-lg-6">
                                <input type="tel" id="phone" name="phone"
                                    pattern="^\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$" class="form-control border-2"
                                    required placeholder="Your Number" style="height: 55px;">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" id="email" name="email" class="form-control border-2" required
                                    placeholder="Your Email" style="height: 55px;">
                            </div>

                            <div class="col-12 col-lg-12">
                                <input type="text" id="subject" name="subject" class="form-control border-2" required
                                    placeholder="Subject" style="height: 55px;">
                            </div>
                            <div class="col-12 contact-msg">
                                Message Us
                                <textarea id="message" class="form-control border-2" name="message" required
                                    placeholder="Your Message" rows="5"></textarea>
                            </div>
                            <div class="g-recaptcha" data-sitekey="6LeoDP8nAAAAANsoS36iwUXtJCAhXSAkLU1XjciX">
                            </div>
                            <div class="formfield formfield-submit cnct-btn">
                                <button type="submit" class="submit-form">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ---------------------------footer starts--------------------- -->
<?php

include('inc/footer.php');
include('inc/js.php')
    ?>

<script>const navItems = document.querySelectorAll('.nav-links ul.links  > li ');
    if (navItems.length >= 5) {
        navItems[4].classList.add("active");
    }
</script>