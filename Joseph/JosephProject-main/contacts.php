<?php
include "wartheader.php";
?>

<!-- Section: Contact v.1 -->
<section class="my-5">

    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold text-center my-5">Contact us</h2>
    <!-- Section description -->
    <p class="text-center w-responsive mx-auto pb-5">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
       </p>

    <!-- Grid row -->
    <div class="row">



        <!-- Grid column -->
        <div class="col-lg-7">

            <!-- Buttons-->
            <div class="row text-center">
                <div class="col-md-4">
                    <a class="btn-floating blue accent-1">
                        <i class="fa fa-map-marker"></i>
                    </a>
                    <p>Nairobi</p>
                    <p class="mb-md-0">Kenya</p>
                </div>
                <div class="col-md-4">
                    <a class="btn-floating blue accent-1">
                        <i class="fa fa-phone"></i>
                    </a>
                    <p>+254710486951</p>
                    <p class="mb-md-0">Mon - Fri, 8:00-20:00</p>
                </div>
                <div class="col-md-4">
                    <a class="btn-floating blue accent-1">
                        <i class="fa fa-envelope"></i>
                    </a>
                    <p>info@gmail.com</p>
                    <p class="mb-0">sales@gmail.com</p>
                </div>
            </div>

        </div>
        <!-- Grid column -->

    </div>
    <!-- Grid row -->

</section>
<!-- Section: Contact v.1 -->

<form id="contact-form" method="post" action="contacts.php" role="form">

    <div class="messages"></div>

    <div class="controls">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Firstname *</label>
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">Lastname *</label>
                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">Email *</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_need">Please specify your need *</label>
                    <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                        <option value=""></option>
                        <option value="Request quotation">Request for Service</option>
                        <option value="Request order status">Consult your expert</option>
                        <option value="Request copy of an invoice">Request copy of an invoice</option>
                        <option value="Make an appointment">Request for an appointment</option>
                        <option value="Other">Other</option>
                    </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">Message *</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-primary btn-send" value="Send message">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-muted">
                    <strong>*</strong> These fields are Mandatory.
            </div>
        </div>
    </div>

</form>
