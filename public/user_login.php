<?php require_once '../__constants.php'; ?>
<?php use GreenEye\App\Config \ {
    Import,
    Config
};
use GreenEye\App\Libs\Appointment;

?>
<?php Import::Header(); ?>
<!-- ***** Breadcumb Area Start ***** -->
<section class="breadcumb-area bg-img gradient-background-overlay"
    style="background-image: url(<?php echo ASSETS; ?>img/bg-img/breadcumb1.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcumb-content">
                    <h3 class="breadcumb-title"><?php Config::getPageTitle(); ?></h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Breadcumb Area End ***** -->

<section class="section-padding-100 bg-light">
    <div class="container">
        <div class="container shadow-sm bg-white p-3 pt-5 rounded-lg">
            <!-- <div class="card-body"> -->
            <form id="gReeneyeForm" method="GET" action="assets/requests/request" class="container px-5" novalidate
                autocomplete="off">
                <div class="form-group">
                    <label for="pnamE" class="h5">Refference number :</label>
                    <input name="pnamE" id="pnamE" class="font-weight-bold form-control rounded-pill" type="text"
                        data-require-msg="Hey ! Your Name is Importent for us, Please tell us.">
                </div>
                <div class="form-group">
                    <label for="pnuM" class="h5"> Mobile Number :</label>
                    <input name="pnuM" id="pnuM" class="font-weight-bold form-control rounded-pill" type="text"
                        data-require-msg="Hey ! Your Number is Importent for us, Please tell us.">
                </div>
               



                <!-- <div class="mb-5 text-center">
                    <div class="mb-3 text-left">
                        <h5>Appointment Date :</h5>
                    </div>
                    <div id="appointment" class="row text-center"> -->




                        <!-- <div class="col-md-3 my-1">
                        <button class="btn w-100 btn-outline-success rounded-pill" type="button">10 : 00 AM
                        </button>
                    </div>
                    <div class="col-md-3 my-1">
                        <button class="btn w-100 btn-outline-success rounded-pill" type="button">10 : 30 AM
                        </button>
                    </div>
                    <div class="col-md-3 my-1">
                        <button class="btn w-100 btn-danger rounded-pill" type="button">11 : 00 AM
                        </button>
                    </div>
                    <div class="col-md-3 my-1">
                        <button class="btn w-100 btn-outline-success rounded-pill" type="button">11 : 30 AM
                        </button>
                    </div>
                    <div class="col-md-3 my-1">
                        <button class="btn w-100 btn-outline-success rounded-pill" type="button">05 : 00 PM
                        </button>
                    </div>
                    <div class="col-md-3 my-1">
                        <button class="btn w-100 btn-danger rounded-pill" type="button">05 : 30 PM
                        </button>
                    </div>
                    <div class="col-md-3 my-1">
                        <button class="btn w-100 btn-outline-success rounded-pill" type="button">06 : 00 PM
                        </button>
                    </div>
                    <div class="col-md-3 my-1">
                        <button class="btn w-100 btn-outline-success rounded-pill" type="button">06 : 30 PM
                        </button>
                    </div> -->

                        <!-- <div class="col-md-6 my-1">
                        <button class="btn btn-lg btn-success w-100 rounded-pill" type="button">
                            <span class="font-weight-bold">06 : 00 PM</span> at April 07, 2019</button>
                    </div>
                    <div class="col-md-6 my-1">
                        <button class="btn btn-lg btn-secondary w-100 rounded-pill" type="button">Cancel Time</button>
                    </div> -->
                    <!-- </div>
                </div> -->
                <div class="form-group">
                    <button name="gReeneyeBook" id="gReeneyeBook" value="appointment"
                        class="btn btn-lg btn-success w-100 rounded-pill" type="button">Log in</button>
                </div>
            </form>
            <!-- </div> -->
        </div>
    </div>
</section>
<div
    style="text-align: right;position: fixed;z-index:9999999;bottom: 0;width: auto;right: 1%;cursor: pointer;line-height: 0;display:block !important;">
    <a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank"
        href="https://www.000webhost.com/?utm_source=000webhostapp&amp;utm_campaign=000_logo&amp;utm_medium=website&amp;utm_content=footer_img">
        <img src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"
            alt="www.000webhost.com">
    </a>
</div>
<?php Import::Footer(); ?>