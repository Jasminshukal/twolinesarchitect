<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package twolinesarchitect
 */

?>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="item md-mb50">
                            <div class="title">
                                <h5>Contact Us</h5>
                            </div>
                            <ul>
                                <li>
                                    <span class="icon pe-7s-map-marker"></span>
                                    <div class="cont">
                                        <h6>Officeal Address</h6>
                                        <p>702, Silk Route, 150 Feet Ring Rd, beside Astha Residency Road, Ambedkar Nagar, Circle, Rajkot</p>

                                    </div>
                                </li>
                                <li>
                                    <span class="icon pe-7s-mail"></span>
                                    <div class="cont">
                                        <h6>Email Us</h6>
                                        <p>info@twolinesarchitect.com</p>
                                    </div>
                                </li>
                                <li>
                                    <span class="icon pe-7s-call"></span>
                                    <div class="cont">
                                        <h6>Call Us</h6>
                                        <p>+9178780 18090</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item md-mb50">
                            <div class="title">
                                <h5>Recent Work</h5>
                            </div>
                            <ul>
                                <li>
                                    <div class="img">
                                        <img src="<?=get_template_directory_uri();?>/img/blog/1.jpg" alt="">
                                    </div>
                                    <div class="sm-post">
                                        <p>The Start-Up Ultimate Guide to Make Your WordPress
                                            Journal.</p>
                                        <span class="date">14 sep 2021</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="img">
                                        <img src="<?=get_template_directory_uri();?>/img/blog/2.jpg" alt="">
                                    </div>
                                    <div class="sm-post">
                                        <p>The Start-Up Ultimate Guide to Make Your WordPress
                                            Journal.</p>
                                        <span class="date">14 sep 2021</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="subscribe">
                                        <input type="text" placeholder="Type Your Email">
                                        <span class="subs pe-7s-paper-plane"></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item">
                            <div class="logo">
                                <img src="<?=get_template_directory_uri();?>/img/logo.png" alt="">
                            </div>
                            <div class="social">
                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0"><i class="fab fa-twitter"></i></a>
                                <a href="#0"><i class="fab fa-instagram"></i></a>
                                <a href="#0"><i class="fab fa-youtube"></i></a>
                            </div>
                            <div class="copy-right">
    <p>© 2024 Two Lines Architect.com | Web Design & Optimize by <a href="www.jasminshukla.com">Jasmin Shukla</p>                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
