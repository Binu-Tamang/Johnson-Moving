<!-- header parts start -->
<?php include('inc/header.php') ?>
<!-- header part ends -->

<!-- banner and headre page  -->
<?php $page_name = 'Area We Serve' ?>
<?php include('inc/sub-banner.php') ?>
<!-- banner and header page -->

<section class="area-info">
    <div class="container">
        <div class="row">
        <div class="col-md-8">
            <h2 class="web-header text-start" data-wow-duration="1s">Location</h2>
            <div class="span-line justify-content-start">
                <span class="web-line text-start"></span>
            </div>
            <strong>Location</strong>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam qui pariatur quas omnis et quis optio velit
            sed culpa, quidem explicabo ullam minus. Nam voluptatem ea veritatis! Error, ducimus ullam. <br> Lorem Lorem
            ipsum dolor, sit amet consectetur adipisicing elit. Natus in minus libero ex dolore corporis beatae incidunt
            exercitationem, praesentium eos quia et unde ratione enim tenetur consequuntur eligendi. Excepturi, quia.
            <br> <br>
            <strong>We also move Junk.
                    Call us: <a href="tel:301-868-0320"> 301-868-0320</a> if you are in need of junk removal in the
                    Washington DC Metro Area.</strong>
        </div>

        <div class="col-lg-4 gy-3 d-lg-block">
                <div class="container">
                    <div class="services-details-menu">
                        <strong>Area We Serve</strong>
                        <ul class="services-menu-list">
                            <li><a aria-label="about the services we provided" href="service-detail.php"><i class="fa-solid fa-location-dot"></i> Washington, D.C
                                    </a>
                            </li>
                            <li><a aria-label="about the services we provided" href="service-detail.php"><i class="fa-solid fa-location-dot"></i> Alexandria, Virginia
                                    </a>
                            </li>
                            <li><a aria-label="about the services we provided" href="service-detail.php"><i class="fa-solid fa-location-dot"></i> Gaithersburg, Maryland
                                    </a>
                            </li>
                            <li><a aria-label="about the services we provided" href="service-detail.php"><i class="fa-solid fa-location-dot"></i> Bethesda, Maryland
                                    </a>
                            </li>
                            <li><a aria-label="about the services we provided" href="service-detail.php"><i class="fa-solid fa-location-dot"></i> Alexander City 
                                    </a>
                            </li>
                            <li><a aria-label="about the services we provided" href="service-detail.php"><i class="fa-solid fa-location-dot"></i> Washington, D.C
                                    </a>
                            </li>
                            <li><a aria-label="about the services we provided" href="service-detail.php"><i class="fa-solid fa-location-dot"></i> Alexandria, Virginia
                                    </a>
                            </li>
                            <li><a aria-label="about the services we provided" href="service-detail.php"><i class="fa-solid fa-location-dot"></i> Gaithersburg, Maryland
                                    </a>
                            </li>
                            <li><a aria-label="about the services we provided" href="service-detail.php"><i class="fa-solid fa-location-dot"></i> Bethesda, Maryland
                                    </a>
                            </li>
                            <li><a aria-label="about the services we provided" href="service-detail.php"><i class="fa-solid fa-location-dot"></i> Alexander City 
                                    </a>
                            </li>
                        </ul>
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

<script>const navItems = document.querySelectorAll('.navbar-nav  > li a');
    if (navItems.length >= 3) {
        navItems[2].classList.add("active");
    }
</script>