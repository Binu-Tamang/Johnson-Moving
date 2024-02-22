<!-- header parts start -->
<?php include('inc/header.php') ?>
<!-- header part ends -->

<!-- banner and headre page  -->
<?php $page_name = 'Our Services' ?>
<?php include('inc/sub-banner.php') ?>
<!-- banner and header page -->

<section class="serv-describe">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="serv-d-box">
                    <h3 class="web-header wow slideInDown text-start" data-wow-duration="1s">Our Service</h3>
                    <div class="span-line justify-content-start">
                        <span class="web-line"></span>
                    </div>

                    <p>At Johnson Moving and Storage Company, we don’t just move households and offices, we move lives.
                        Our moving specialists in MD, VA, and the Washington D.C. region understand that every
                        relocation project involves a significant change in a clients life. With this we undertake to
                        provide cost-effective and efficient moving services that cover every detail and aspect, so you
                        can be assured of a successful and secure move of every item and belonging. This is what makes
                        us one of the best local and long distance movers in the Washington D.C. region. We hold a
                        comprehensive range of resources, including an affordable storage facility, to complete any
                        relocation job that works for your greater benefit.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="serv-d-box-img">
                    <img src="assets/img/moving-truck-md-logo.jpg" alt="label your box">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- services section html============ -->
<section class="main-serv">
    <div class="container">
        <h3 class="web-header wow slideInDown" data-wow-duration="1s">Services We Provide</h3>
        <div class="span-line">
            <span class="web-line"></span>
        </div>
        <div class="our-serv-box">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="serv-box box-serv-content">
                        <h3 class="serv-topic">Moving every customer with care</h3>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 wow bounceInLeft"
                    style="visibility: visible; animation-name: bounceInLeft;">
                    <div class="serv-box box-dash">
                        <i class="fa-solid fa-gears"></i>
                        <strong>Moving</strong>
                        <p>Consectetuer quisque neque sem interdum himenaeos auctor blandit elementum commodo</p>
                        <div class="choose-learn">
                            <a href="service-detail.php">Read More <i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 wow bounceInLeft"
                    style="visibility: visible; animation-name: bounceInLeft;">
                    <div class="serv-box box-dash">
                        <i class="fa-solid fa-gears"></i>
                        <strong>Storage</strong>
                        <p>Consectetuer quisque neque sem interdum himenaeos auctor blandit elementum commodo</p>
                        <div class="choose-learn">
                            <a href="service-detail.php">Read More <i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 wow bounceInLeft"
                    style="visibility: visible; animation-name: bounceInLeft;">
                    <div class="serv-box box-dash serv-box-limit">
                        <i class="fa-solid fa-gears"></i>
                        <strong>Packing</strong>
                        <p>Consectetuer quisque neque sem interdum himenaeos auctor blandit elementum commodo</p>
                        <div class="choose-learn">
                            <a href="service-detail.php">Read More <i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 wow bounceInLeft"
                    style="visibility: visible; animation-name: bounceInLeft;">
                    <div class="serv-box box-dash serv-box-limit">
                        <i class="fa-solid fa-gears"></i>
                        <strong>Crating</strong>
                        <p>Consectetuer quisque neque sem interdum himenaeos auctor blandit elementum commodo</p>
                        <div class="choose-learn">
                            <a href="service-detail.php">Read More <i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 wow bounceInLeft"
                    style="visibility: visible; animation-name: bounceInLeft;">
                    <div class="serv-box box-dash serv-box-limit">
                        <i class="fa-solid fa-gears"></i>
                        <strong>Shipping</strong>
                        <p>Consectetuer quisque neque sem interdum himenaeos auctor blandit elementum commodo</p>
                        <div class="choose-learn">
                            <a href="service-detail.php">Read More <i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 wow bounceInLeft"
                    style="visibility: visible; animation-name: bounceInLeft;">
                    <div class="serv-box box-dash">
                        <i class="fa-solid fa-gears"></i>
                        <strong>Easily Accessible</strong>
                        <p>Consectetuer quisque neque sem interdum himenaeos auctor blandit elementum commodo</p>
                        <div class="choose-learn">
                            <a href="service-detail.php">Read More <i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 wow bounceInLeft"
                    style="visibility: visible; animation-name: bounceInLeft;">
                    <div class="serv-box box-dash">
                        <i class="fa-solid fa-gears"></i>
                        <strong>Home / Apartment</strong>
                        <p>Consectetuer quisque neque sem interdum himenaeos auctor blandit elementum commodo</p>
                        <div class="choose-learn">
                            <a href="service-detail.php">Read More <i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
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
    if (navItems.length >= 3) {
        navItems[2].classList.add("active");
    }
</script>