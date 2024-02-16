<!-- header parts start -->
<?php include('inc/header.php') ?>
<!-- header part ends -->

<!-- banner and headre page  -->
<?php $page_name = 'Our Quotes' ?>
<?php include('inc/sub-banner.php') ?>
<!-- banner and header page -->

<section class="qut-page">
    <div class="container">

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