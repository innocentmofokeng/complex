<?php 
    $keywords = "contact us, customer support, customer outreach, customer help ,customer service";
    $title = "Complex Graphhicx | Contacts us";
    include('Components/header.inc.php') ?>


<main id="main">
    <!-- ======= Blog Header ======= -->
    <div class="contacts-bg page-area">
        <div class="home-overly"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="slider-content text-center">
                        <div class="header-bottom">
                            <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                                <h1 class="title2"></h1>
                            </div>
                            <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                                <h2 class="title3"></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Blog Header -->

    <!-- ======= Contact Section ======= -->
    <div id="contact" class="contact-area">
        <div class="contact-inner area-padding">
            <div class="contact-overly"></div>
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2>Contact us</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Start contact icon column -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <i class="fa fa-mobile"></i>
                                <p>
                                    Call: +2762 592 4189 & +2778 077 8172<br>
                                    <span>Monday-Friday (8am-4pm)</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Start contact icon column -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <i class="fa fa-envelope-o"></i>
                                <p>
                                    Email: info@complexgraphicx.co.za<br>
                                    <span>Web: www.complexgraphicx.co.za</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Start contact icon column -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <i class="fa fa-map-marker"></i>
                                <p>
                                    Location: 1830 Phefo street Palm Ridge Ext 1<br>
                                    <span>Germiston 1458</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <!-- Start Google Map -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <!-- Start Map -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3573.6078100562468!2d28.148752440479512!3d-26.403855408105354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e951d57d035cccb%3A0x1543645ff048cff7!2sComplex%20Graphicx!5e0!3m2!1sen!2sza!4v1593675366807!5m2!1sen!2sza"
                            width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <!-- End Map -->
                    </div>
                    <!-- End Google Map -->

                    <!-- Start  contact -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form contact-form">
                            <form action="/config/contacts.inc.php" method="post" role="form" class="php-email-form">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" data-rule="email"
                                        data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group">
                                    <input type="tell" class="form-control" name="phone" id="phone"
                                        placeholder="Your phone" data-rule="phone"
                                        data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject" data-rule="minlen:4"
                                        data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required"
                                        data-msg="Please write something for us" placeholder="Message"></textarea>
                                    <div class="validate"></div>
                                </div>
                                <div class="mb-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit">Send Message</button></div>
                            </form>
                        </div>
                    </div>
                    <!-- End Left contact -->
                </div>
            </div>
        </div>
    </div><!-- End Contact Section -->


</main><!-- End #main -->

<hr>


<?php include('Components/footer.inc.php'); ?>