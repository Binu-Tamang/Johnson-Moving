<!-- header parts start -->
<?php include('inc/header.php') ?>
<!-- header part ends -->

<!-- banner and headre page  -->
<?php $page_name = 'Our Quotes' ?>
<?php include('inc/sub-banner.php') ?>
<!-- banner and header page -->

<section class="getaqoutes text-center">
    <div class="quotes-wrap">
        <div class="container">
            <div class="q-header">
                <h2 class="web-header text-center" data-wow-duration="1s">Get A Free Quote</h2>
                <div class="span-line justify-content-center">
                    <span class="web-line text-center"></span>
                </div>
                <p>Fill the remaining field below to get a quote. We will
                    respond ASAP to all of your inquiries.</p>
            </div>
            <div class="quotes-form">
                <form id="quotesform">
                    <div class="row formrow g-3">
                        <h3>Your Information:</h3>
                        <div class="col-12 col-lg-6">
                            <input type="text" id="name" name="name" class="form-control" required
                                placeholder="Your First Name" style="height: 55px;">
                            <small id="nameError" class="form-text text-danger"></small>
                        </div>

                        <div class="col-12 col-lg-6">
                            <input type="text" id="name" name="name" class="form-control" required
                                placeholder="Your Last Name" style="height: 55px;">
                            <small id="nameError" class="form-text text-danger"></small>
                        </div>
                        <div class="col-12 col-lg-6">
                            <input type="tel" id="phone" name="phone" pattern="^\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$"
                                class="form-control" required placeholder="Your Number" style="height: 55px;">
                        </div>
                        <div class="col-12 col-lg-6">
                            <input id="form_email" name="email" value="" class="form-control"
                                placeholder="Email Address" required="required" data-error="Email is required."
                                type="text" style="height:55px">
                        </div>
                        <div class="col-12 col-lg-6">
                            <label for="approximateMovingDate">Approximate Moving Date:</label>
                            <input type="date" id="approximateMovingDate" name="approximateMovingDate"
                                class="form-control" required>
                        </div>

                    </div>
                    <div class="row formrow">
                        <h3>Moving From :</h3>
                        <div class="col-md-4 col-sm-4">
                            <div class="formfield">
                                <input name="streetnomf" placeholder="* Address" required="required"
                                    data-error="Street Number is Required" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="formfield">
                                <input name="streetnamemf" class="autocomplete" id="ac1" placeholder="* City"
                                    required="required" data-error="Street Name is Required" class="form-control"
                                    type="text">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="formfield">
                                <input name="streetnomf" placeholder="* ZIP Code" required="required"
                                    data-error="zip code is Required" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <select id="state" name="state" class="form-control" required>
                                <option disabled="" selected="">-- Select Your State --</option>
                                <option>Alabama</option>
                                <option>Alaska</option>
                                <option>Arizona</option>
                                <option>Alabama</option>
                                <option>Alaska</option>
                                <option>Arizona</option>
                            </select>
                        </div>
                    </div>

                    <div class="row formrow">
                        <h3>Moving To :</h3>
                        <div class="col-md-4 col-sm-4">
                            <div class="formfield">
                                <input name="streetnomt" placeholder="* Address" required="required"
                                    data-error="Street Number is Required" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="formfield">
                                <input name="streetnamemt" class="autocomplete" id="ac2" placeholder="* City"
                                    required="required" data-error="Street Name is Required" class="form-control"
                                    type="text">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="formfield">
                                <input name="streetnomf" placeholder="* ZIP Code" required="required"
                                    data-error="zip code is Required" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <select id="state" name="state" class="form-control" required>
                                <option disabled="" selected="">-- Select Your State --</option>
                                <option>Alabama</option>
                                <option>Alaska</option>
                                <option>Arizona</option>
                                <option>Alabama</option>
                                <option>Alaska</option>
                                <option>Arizona</option>
                            </select>
                        </div>
                    </div>

                    <div class="row formrow">
                        <h3>Services Required:</h3>
                        <div class="col-12 col-lg-12">
                            <select id="servicesrq" name="servicerq" class="form-control" required>
                                <option disabled="" selected="">-- Services Required --</option>
                                <option>Local Moves</option>
                                <option>Long Distance Moves</option>
                                <option>Office Moves</option>
                                <option>Commercial Movers</option>
                                <option>Assembly and Disassembly of any size or type</option>
                                <option>Wide variety of boxes and packing equipment</option>
                                <option>Packing and unpacking</option>
                                <option>Available storage facilities</option>
                            </select>
                        </div>
                    </div>
                    <div class="row formrow">
                        <div class="col-md-12">
                            <div class="formfield">
                                <textarea id="form_message" name="message" class="form-control" required
                                    placeholder="* Please Write Detail Your Furniture &amp; Moving Items" rows="4"
                                    data-error="A Message is required"></textarea>
                            </div>
                        </div>
                        <div class="col-12 col-lg-12 qns-y">
                            <label for="destinationReady">Will your destination residence be ready by the time of the
                                move?</label>
                            <div>
                                <label for="destinationReadyYes">
                                    <input type="radio" id="destinationReadyYes" name="destinationReady" value="Yes"
                                        required> Yes
                                </label>
                                <label for="destinationReadyNo">
                                    <input type="radio" id="destinationReadyNo" name="destinationReady" value="No"
                                        required>
                                    No
                                </label>
                            </div>
                        </div>

                        <div class="col-12 col-lg-12 qns-y">
                            <label for="destinationReady">Will temporary storage be needed?: </label>
                            <div>
                                <label for="destinationReadyYes">
                                    <input type="radio" id="destinationReadyYes" name="destinationReady" value="Yes"
                                        required> Yes
                                </label>
                                <label for="destinationReadyNo">
                                    <input type="radio" id="destinationReadyNo" name="destinationReady" value="No"
                                        required>
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row formrow form-submit-clear">
                        <div class="col-md-12">
                            <div class="formfield formfield-submit">
                                <button type="submit" class="submit-form">Submit Now</button>
                            </div>
                        </div>
                    </div>
                </form>
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