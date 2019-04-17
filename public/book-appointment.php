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
            <form id="gReeneyeForm" method="POST" action="<?php echo ASSETS; ?>requests/request" class="container px-5" novalidate autocomplete="off">

                <div class="form-group">
                    <label for="pnamE" class="h5">Patient's Name :</label>
                    <input name="pnamE" id="pnamE" class="font-weight-bold form-control rounded-pill" type="text" data-require-msg="Hey ! Your Name is Importent for us, Please tell us.">
                </div>
                <div class="form-group">
                    <label for="pnuM" class="h5">Patient's Mobile Number :</label>
                    <input name="pnuM" id="pnuM" class="font-weight-bold form-control rounded-pill" type="text" data-require-msg="Hey ! Your Number is Importent for us, Please tell us.">
                </div>
                <div class="form-group clearfix w-50">
                    <label for="pgeN" class="h5">Patient's Gender :</label>
                    <select name="pgeN" id="pgeN" class="form-control text-dark rounded-pill" data-require-msg="Please Tell us Your Gender.">
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
                    </div>
                </div>
                <div class="form-group">
                    <button name="gReeneyeBook" id="gReeneyeBook" value="appointment" class="btn btn-lg btn-success w-100 rounded-pill" type="button">Book Appointment</button>
                </div>

            </form>
        </div>
    </div>
</section>


<!-- Modal -->
<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container-fluid p-3">
                    <div class="row">
                        <div class="col-12 pt-3 form-group">
                            <div class="pb-3 text-left">
                                <h1>Your Number :</h1>
                                <h3 id="yourNum"></h3>
                            </div>
                            <p class="lead">OTP send on Your Number...</p>
                            <input type="text" id="otp" name="otp" class="form-control rounded-pill text-dark" autocomplete="off">
                        </div>
                        <div class="col-6">
                            <button type="button" class="btn btnVerify btn-primary w-100 rounded-pill">Verify</button>
                        </div>
                        <div class="col-6">
                            <button type="button" class="btn btn-secondary w-100 rounded-pill" disabled>Resend</button>
                        </div>
                        <div class="col-12 pt-3">
                            <button type="button" class="btn btnClose btn-danger w-100 rounded-pill" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php Import::Footer(); ?>