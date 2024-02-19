<!-- header parts start -->
<?php include('inc/header.php') ?>
<!-- header part ends -->

<?php

$page_name = $_GET['title'] ?? "Services";

?>
<!-- banner and header page  -->
<?php $page_name = 'Local Moving' ?>
<?php include('inc/sub-banner.php') ?>
<!-- banner and header page -->

<section class="serv-detail-page">
    <div class="container">
        <h3 class="web-header wow slideInDown start" data-wow-duration="1s">Local Moving Services
        </h3>
        <div class="span-line">
            <span class="web-line"></span>
        </div>

        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="moving_level">
                    <div class="container">
                        <img src="assets/img/moving-truck-md-logo.jpg" alt="truck">
                        <p>At Johnson Moving and Storage Company, we don’t just move households and offices, we move
                            lives. Our moving
                            specialists in MD, VA, and the Washington D.C. region understand that every relocation
                            project involves a
                            significant change in a clients life. With this we undertake to provide cost-effective and
                            efficient moving
                            services that cover every detail and aspect, so you can be assured of a successful and
                            secure move of every
                            item and belonging. This is what makes us one of the best local and long distance movers in
                            the Washington
                            D.C. region. We hold a comprehensive range of resources, including an affordable storage
                            facility, to
                            complete any relocation job that works for your greater benefit.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 gy-3 d-lg-block">
                <div class="container">
                    <div class="services-details-menu">
                        <strong>Service Menu</strong>
                        <ul class="services-menu-list">
                            <li><a aria-label="about the services we provided" href="service-detail.php"><i
                                        class="fa-solid fa-gear"></i>Local
                                    Moving</a>
                            </li>
                            <!-- <li><a aria-label="about the services we provided" href="service-detail.php"><i
                                        class="fa-solid fa-gear"></i> Storage
                                    </a>
                            </li> -->
                            <!-- <li><a aria-label="about the services we provided" href="service-detail.php"><i
                                        class="fa-solid fa-gear"></i> Packing</a></li> -->
                            <li><a aria-label="about the services we provided" href="service-detail.php"><i
                                        class="fa-solid fa-gear"></i> Crating
                                    </a>
                            </li>
                            <li><a aria-label="about the services we provided" href="service-detail.php"><i
                                        class="fa-solid fa-gear"></i>
                                    Shipping</a>
                            </li>
                            <li><a aria-label="about the services we provided" href="service-detail.php"><i
                                        class="fa-solid fa-gear"></i> Packing And
                                    Unpacking</a>
                            </li>
                            <li><a aria-label="about the services we provided" href="service-detail.php"><i
                                        class="fa-solid fa-gear"></i> Available Storage
                                    Facilities</a>
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