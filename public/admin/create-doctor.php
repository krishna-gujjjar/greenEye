<?php require_once '../../__constants.php'; ?>
<?php use GreenEye\App \{
    Config\Import,
    Functions\getPath,
    Functions\Valid,
    Helper\Flash
}; ?>
<?php if (Valid::User()) : ?>
<?php Import::getHeader(); ?>
<?php Flash::display(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header text-center pt-5">
                    <h1 class="font-weight-bold">Create Doctors</h1>
                    <hr class="w-50 border-primary">
                </div>
                <div class="card-body">
                    <div class="container px-5 pb-5">
                        <form id="cDoctor" method="POST" action="<?php getPath::Request(); ?>" novalidate autocomplete="off" enctype="multipart/form-data">
                            <div class="form-group pt-3">
                                <label for="dPic" class="h5 font-weight-bold">Doctor's Profile Pic</label>
                                <input id="dPic" name="dPic" type="file">
                            </div>
                            <div class="form-group pt-3">
                                <label for="dName" class="h5 font-weight-bold">Doctor's Name</label>
                                <div class="controls">
                                    <input id="dName" name="dName" class="form-control form-control-lg rounded-pill" type="text" required data-validation-required-message="Hey ! Doctor's Name is Importent for me, Please tell me." data-validation-regex-regex="([a-zA-Z-_])*" data-validation-regex-message="Oops! You Mistyped, Please Type Valid Username." minlength="5" data-validation-minlength-message="Oops! It's too Short.">
                                </div>
                            </div>
                            <div class="form-group pt-3">
                                <label for="dspl" class="h5 font-weight-bold">Doctor's Speciality</label>
                                <div class="controls">
                                    <input id="dspl" name="dspl" class="form-control form-control-lg rounded-pill" type="text" required data-validation-required-message="Hey ! Doctor's Speciality is Importent for me, Please tell me." data-validation-regex-regex="([a-zA-Z-_])*" data-validation-regex-message="Oops! You Mistyped, Please Type Valid Username." minlength="5" data-validation-minlength-message="Oops! It's too Short.">
                                </div>
                            </div>


                            <div class="form-group pt-4">
                                <button name="dCreate" id="dCreate" value="doctor" class="btn btn-lg rounded-pill btn-block btn-primary mb-3" type="submit">Create Doctor</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header text-center pt-5">
                    <h1 class="font-weight-bold">Our Doctors</h1>
                    <hr class="w-50 border-primary">
                </div>
                <div class="card-body px-5 pb-5">
                    <div class="row" id="sHow_doctorS">
                        <div class="col-sm-12">
                            <h1 class="text-center">No Doctor's Created Yet.</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php Import::getFooter(); ?>
<?php else : ?>
<?php header('location:' . ADMIN); ?>
<?php endif; ?>