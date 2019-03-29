<!-- ***** Footer Area Start ***** -->
<footer class="footer-area section-padding-100">
    <!-- Main Footer Area -->
    <div class="main-footer-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget-area">
                        <div class="footer-logo">
                            <img src="<?php echo ASSETS; ?>img/core-img/logo.png" alt="" />
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer
                            adipiscing elit, sed diam nonummy nibh
                            euismod tincidunt ut laoreet dolore magna
                            aliquam erat volutpat. Lorem ipsum dolor sit
                            amet, consectetuer.
                        </p>
                        <div class="footer-social-info">
                            <a href="#"><i class="fill-facebook stroke-none" data-feather="facebook"></i></a>
                            <a href="#"><i class="fill-github stroke-none" data-feather="github"></i></a>
                            <a href="#"><i class="fill-slack stroke-none" data-feather="slack"></i></a>
                            <a href="#"><i class="fill-twitter stroke-none" data-feather="twitter"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Google Maps -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d461369.30528190744!2d75.78084025401128!3d25.389820465253212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396f9b30c41bb44d%3A0x5f5c103200045588!2sKota%2C+Rajasthan!5e0!3m2!1sen!2sin!4v1552324077362" width="100%" height="350" frameborder="0"></iframe>
                </div>

                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget-area">
                        <div class="widget-title">
                            <h6>Contact Form</h6>
                        </div>
                        <div class="footer-contact-form">
                            <form action="#" method="post">
                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0" name="footer-name" id="footer-name" placeholder="Name" />
                                <input type="email" class="form-control border-top-0 border-right-0 border-left-0" name="footer-email" id="footer-email" placeholder="Email" />
                                <textarea name="message" class="form-control border-top-0 border-right-0 border-left-0" id="footerMessage" placeholder="Message"></textarea>
                                <button type="submit" class="btn greeneye-btn">
                                    Contact Us <span>+</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget-area">
                        <div class="widget-title">
                            <h6>News Letter</h6>
                        </div>

                        <div class="footer-newsletter-area">
                            <form action="#">
                                <input type="email" class="form-control bg-light border-0 mb-0" name="newsletterEmail" id="newsletterEmail" placeholder="Your Email Here" />
                                <button type="submit">Subscribe</button>
                            </form>
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer
                                adipiscing elit, sed diam nonummy nibh
                                euismod tincidunt ut laoreet dolore
                                magna aliquam erat volutpat. Lorem ipsum
                                dolor sit amet, consectetuer.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom Footer Area -->
    <div class="bottom-footer-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="bottom-footer-content">
                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p>
                                Copyright &copy; <span id="year"></span>
                                All rights reserved |
                                made with
                                <i data-feather="heart" class="fill-danger stroke-none"></i>
                                by
                                <a href="#">Gurjar's ProTech</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ***** Footer Area End ***** -->

<!-- Feather js -->
<script src="<?php echo VENDORS; ?>feather/feather.min.js"></script>
<!-- jQuery js-->
<script src="<?php echo VENDORS; ?>jquery/jquery-2.2.4.min.js"></script>
<!-- <script src="<?php echo VENDORS; ?>jquery/jquery-3.3.1.min.js"></script> -->
<!-- Popper js -->
<script src="<?php echo VENDORS; ?>popperjs/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="<?php echo VENDORS; ?>bootstrap/js/bootstrap.min.js"></script>
<!-- Counter Plugin js -->
<script src="<?php echo VENDORS; ?>counterup/plugins.js"></script>
<!-- Active js -->
<script src="<?php echo ASSETS; ?>js/main.js"></script>
<script>
    // Get Current Year for Copyright
    $('#year').html(new Date().getFullYear());
    // Feather Icons
    feather.replace({
        'fill': "currentColor",
    });
</script>
</body>

</html>