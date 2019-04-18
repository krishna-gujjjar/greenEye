<?php require_once '../__constants.php'; ?>
<?php use GreenEye\App\Config \ {
    Import,
    Config
}; ?>
<?php Import::Header(); ?>
<!-- ***** Breadcumb Area Start ***** -->
<section class="breadcumb-area bg-img gradient-background-overlay" style="background-image: url(https://res.cloudinary.com/dv0xm4c4v/image/upload/v1555558240/breadcumb1.jpg);">
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
            <form id="gReeneyeUserForm" method="GET" action="<?php echo ASSETS; ?>requests/request" class="container px-5" novalidate autocomplete="off">
                <div class="form-group">
                    <label for="ureF" class="h5">Patient's Refference No. :</label>
                    <input name="ureF" id="ureF" class="font-weight-bold form-control rounded-pill" type="text" data-require-msg="Hey ! Tell us Your Refference Number.">
                </div>
                <div class="form-group">
                    <label for="unumbeR" class="h5">Patient's Mobile Number :</label>
                    <input name="unumbeR" id="unumbeR" class="font-weight-bold form-control rounded-pill" type="text" data-require-msg="Hey ! Your Number is Importent for us, Please tell us.">
                </div>
                <div class="form-group">
                    <button name="gReeneyeUser" id="gReeneyeUser" value="checkStatus" class="btn btn-lg btn-success w-100 rounded-pill" type="button">Check Status</button>
                </div>
            </form>
        </div>
    </div>
</section>
<?php Import::Footer(); ?>