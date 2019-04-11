<?php require_once '../__constants.php'; ?>
<?php use GreenEye\App\Config \ {
    Import,
    Config
}; ?>
<?php Import::Header(); ?>
<!-- ***** Breadcumb Area Start ***** -->
<section class="breadcumb-area bg-img gradient-background-overlay" style="background-image: url(<?php echo ASSETS; ?>img/bg-img/breadcumb1.jpg);">
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
            <form id="gReeneyeForm" method="GET" action="assets/requests/request" class="container px-5" novalidate autocomplete="off">
                <div class="form-group">
                    <label for="pnamE" class="h5">Patient's Name :</label>
                    <div class="controls">
                        <input name="pnamE" id="pnamE" class="font-weight-bold form-control rounded-pill" type="text" required data-validation-required-message="Hey ! Your Name is Importent for me, Please tell me.">
                    </div>
                </div>
                <div class="form-group">
                    <label for="pnuM" class="h5">Patient's Mobile Number :</label>
                    <div class="controls">
                        <input name="pnuM" id="pnuM" class="font-weight-bold form-control rounded-pill" type="text" required data-validation-required-message="Hey ! Your Number is Importent for me, Please tell me.">
                    </div>
                </div>
                <div class="form-group clearfix w-50">
                    <label for="pgeN" class="h5">Patient's Gender :</label>
                    <select name="pgeN" id="pgeN" class="form-control text-dark rounded-pill" required>
                        <option selected disabled> Select </option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>



                <div class="mb-5 text-center">
                    <div class="mb-3 text-left">
                        <h5>Appointment Date :</h5>
                    </div>
                    <div id="appointment" class="row text-center">




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
                    </div>
                </div>
                <div class="form-group">
                    <button name="gReeneyeBook" value="appointment" class="btn btn-lg btn-success w-100 rounded-pill" type="submit">Book Appointment</button>
                </div>
            </form>
            <!-- </div> -->
        </div>
    </div>
</section>
<?php Import::Footer(); ?>