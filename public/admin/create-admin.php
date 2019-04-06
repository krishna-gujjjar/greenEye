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
                    <h1 class="font-weight-bold">Create Admins</h1>
                    <hr class="w-50 border-primary">
                </div>
                <div class="card-body">
                    <div class="container px-5 pb-5">
                        <form id="cAdmin" method="POST" action="<?php getPath::Request(); ?>" novalidate autocomplete="off">
                            <div class="form-group pt-3">
                                <label for="aUname" class="h5 font-weight-bold">Admin's Username</label>
                                <div class="controls">
                                    <input id="aUname" name="aUname" class="form-control form-control-lg rounded-pill" type="text" required data-validation-required-message="Hey ! Admin's Username is Importent for me, Please tell me." data-validation-regex-regex="([a-zA-Z-_@.])*" data-validation-regex-message="Oops! You Mistyped, Please Type Valid Username." minlength="5" data-validation-minlength-message="Oops! It's too short.">
                                </div>
                            </div>
                            <div class="form-group pt-3">
                                <label for="aPass" class="h5 font-weight-bold">Admin's Password</label>
                                <div class="controls">
                                    <input id="aPass" name="aPass" class="form-control form-control-lg rounded-pill" type="password" required data-validation-required-message="Hey ! Admin's Password is Importent for me, Please tell me." minlength="5" data-validation-minlength-message="Oops! It's too short.">
                                </div>
                            </div>
                            <div class="form-group pt-4">
                                <button name="aCreate" id="aCreate" value="admin" class="btn btn-lg rounded-pill btn-block btn-primary mb-3" type="submit">Create Admin</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header text-center pt-5">
                    <h1 class="font-weight-bold">Our Admins</h1>
                    <hr class="w-50 border-primary">
                </div>
                <div class="card-body px-5 pb-5">
                    <div class="row" id="sHow_adminS">
                        <div class="col-sm-12">
                            <h1 class="text-center">No Admin's Created Yet.</h1>
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