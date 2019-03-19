<?php require_once '../__constants.php'; ?>
<?php Import::Header(); ?>

<!-- ***** Breadcumb Area Start ***** -->
<section class="breadcumb-area bg-img gradient-background-overlay" style="background-image: url(<?php echo ASSETS; ?>img/bg-img/breadcumb3.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcumb-content">
                    <h3 class="breadcumb-title">Contact</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Breadcumb Area End ***** -->

<section class="greeneye-contact-area section-padding-100">
    <div class="container">
        <div class="row">
            <!-- Contact Form Area -->
            <div class="col-12 col-lg-8">
                <div class="contact-form">
                    <h5 class="mb-50">Get in touch</h5>

                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" id="contact-name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="contact-email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn greeneye-btn">Send Message <span>+</span></button>
                    </form>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="content-sidebar">
                    <!-- Contact Card -->
                    <div class="greeneye-contact-card mb-50">

                        <div class="single-contact d-flex align-items-center">
                            <div class="contact-icon mr-30">
                                <i class="icon-doctor"></i>
                            </div>
                            <div class="contact-meta">
                                <p class="text-capitalize">Address : Kota, Rajasthan IN
                                </p>
                            </div>
                        </div>

                        <div class="single-contact d-flex align-items-center">
                            <div class="contact-icon mr-30">
                                <i class="icon-doctor"></i>
                            </div>
                            <div class="contact-meta">
                                <p>Phone : &nbsp;&nbsp;&nbsp;+91-123-456-7890</p>
                            </div>
                        </div>

                        <div class="single-contact d-flex align-items-center">
                            <div class="contact-icon mr-30">
                                <i class="icon-doctor"></i>
                            </div>
                            <div class="contact-meta">
                                <p>Email : admin@greeneye.tk</p>
                            </div>
                        </div>


                        <div class="contact-social-area text-left mr-30 mt-5 d-flex">
                            <a href="#"><i class="fill-facebook stroke-none" data-feather="facebook"></i></a>
                            <a href="#"><i class="fill-github stroke-none" data-feather="github"></i></a>
                            <a href="#"><i class="fill-slack stroke-none" data-feather="slack"></i></a>
                            <a href="#"><i class="fill-twitter stroke-none" data-feather="twitter"></i></a>
                        </div>

                    </div>

                    <!-- medilife Emergency Card -->
                    <div class="greeneye-emergency-card bg-img bg-overlay" style="background-image: url(<?php echo ASSETS; ?>img/bg-img/about1.jpg);">
                        <i class="icon-smartphone"></i>
                        <h2>For Emergency calls</h2>
                        <h3>+91-123-456-7890</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding-100 bg-overlay">
    <div class="container-fluid text-center">
        <h1 class="text-light pb-5">OUR LOCATION</h1>
        <div class="row">
            <div class="col-12 col-sm-12 px-3 px-md-5">
                <iframe class="shadow" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d461369.30528190744!2d75.78084025401128!3d25.389820465253212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396f9b30c41bb44d%3A0x5f5c103200045588!2sKota%2C+Rajasthan!5e0!3m2!1sen!2sin!4v1552324077362" width="100%" height="600" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</section>

<?php Import::Footer(); ?>