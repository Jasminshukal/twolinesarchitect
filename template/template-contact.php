<?php
/* Template Name: Contact Us */
get_header();
?>

    <!-- ==================== Start header ==================== -->

    <header class="pages-header circle-bg valign position-re">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-11">
                    <div class="capt">
                        <div class="text-center">
                            <h1 class="color-font mb-10 fw-700">Let's talk <br> about your project.</h1>
                            <p>Feel free to ask me any question or let’s do to talk about
                                our future collaboration.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- particles -->
        <div id="particles-js"></div>

        <div class="circle-color">
            <div class="gradient-circle"></div>
            <div class="gradient-circle two"></div>
        </div>
    </header>

    <!-- ==================== End header ==================== -->


    <!-- ==================== Start main-content ==================== -->

    <div class="main-content">

        <!-- ==================== Start Contact ==================== -->

        <section class="contact section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form md-mb50">

                            <h4 class="fw-700 color-font mb-50">Get In Touch.</h4>

                            <form id="contact-form" method="post" action="https://www.innovationplans.com/idesign/vie/vie-dark/contact.php">

                                <div class="messages"></div>

                                <div class="controls">

                                    <div class="form-group">
                                        <input id="form_name" type="text" name="name" placeholder="Name"
                                            required="required">
                                    </div>

                                    <div class="form-group">
                                        <input id="form_email" type="email" name="email" placeholder="Email"
                                            required="required">
                                    </div>

                                    <div class="form-group">
                                        <textarea id="form_message" name="message" placeholder="Message" rows="4"
                                            required="required"></textarea>
                                    </div>

                                    <button type="submit" class="butn bord"><span>Send Message</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="cont-info">
                            <h4 class="fw-700 color-font mb-50">Contact Info.</h4>
                            <h3 class="wow" data-splitting>Let's Talk.
                            </h3>
                            <div class="item mb-40">
                                <h5><a href="#0">Email@example.com</a></h5>
                                <h5>+4.930.705.5448</h5>
                            </div>
                            <h3 class="wow" data-splitting>Visit Us.
                            </h3>
                            <div class="item">
                                <h6>295 Witting Streets Suite 666,
                                    <br>Melbourne, Australia
                                </h6>
                            </div>
                            <div class="social mt-50">
                                <a href="#0" class="icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#0" class="icon">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#0" class="icon">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                                <a href="#0" class="icon">
                                    <i class="fab fa-behance"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php
    get_footer();
    ?>