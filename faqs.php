<!-- header parts start -->
<?php include('inc/header.php') ?>
<!-- header part ends -->

<!-- banner and headre page  -->
<?php $page_name = 'Our FAQs' ?>
<?php include('inc/sub-banner.php') ?>
<!-- banner and header page -->

<section class="faqs-wrap">
    <div class="container">
        <!-- FAQ -->
        <div class="parent-container">
            <ul class="faq">
                <li>
                    <h3 class="question">Frequently Asked Question?
                        <div class="plus-minus-toggle collapsed"></div>
                    </h3>
                    <div class="answer">Answer. Donec vitae tellus risus. Aenean sed fermentum risus. Phasellus
                        venenatis
                        ultricies dignissim. Nunc ante lectus, accumsan non porta at. Donec vitae tellus risus. Aenean
                        sed
                        fermentum risus. Phasellus venenatis ultricies dignissim.</div>
                </li>
                <li>
                    <h3 class="question">Frequently Asked Question?
                        <div class="plus-minus-toggle collapsed"></div>
                    </h3>
                    <div class="answer">Answer. Donec vitae tellus risus. Aenean sed fermentum risus. Phasellus
                        venenatis
                        ultricies dignissim. Nunc ante lectus, accumsan non porta at. Donec vitae tellus risus. Aenean
                        sed
                        fermentum risus. Phasellus venenatis ultricies dignissim.</div>
                </li>
            </ul>
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