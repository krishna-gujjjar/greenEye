<?php require_once '../../__constants.php'; ?>
<?php use GreenEye\App \{
    Config\Import,
    Functions\getSelf,
    Functions\Valid,
    Helper\Flash,
    Validators\Validate
}; ?>
<?php if (!Valid::User()) : ?>
<?php Import::getHeader(); ?>
<?php $valid = new Validate; ?>
<?php Flash::display(); ?>

<div class="container-fluid">
    <section>
        <div class="row">
            <div class="col-12 col-md-5 col-lg-6 col-xl-5 px-lg-5">
                <div class="pt-md-5 pt-3 mt-md-5 mt-1 pb-md-5">
                    <h1 class=" display-4 text-center mb-3 font-weight-bold text-capitalize">
                        <?php echo SITENAME, ' ', 'Admin'; ?>
                    </h1>

                    <p class="text-muted text-center mb-5">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    </p>

                    <form action="<?php getSelf::delPublic() ?>" id="gReeneye_logiN" novalidate autocomplete="off">
                        <div class="form-group">
                            <h5>Username</h5>
                            <div class="controls">
                                <input type="text" name="loginName" class="form-control form-control-lg rounded-pill" required data-validation-required-message="Hey ! Your Username is Importent for me, Please tell me." data-validation-regex-regex="([a-zA-Z-_@.])*" data-validation-regex-message="Oops! You Mistyped, Please Type Valid Username." minlength="5" data-validation-minlength-message="Oops! It's too short.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <h5>Password</h5>
                                </div>
                                <div class="col-auto">
                                    <a href="password-reset" class="form-text small text-muted"> Forgot password? </a>
                                </div>
                            </div>
                            <div class="controls">
                                <input type="password" name="loginPass" class="form-control form-control-lg rounded-pill" required data-validation-required-message="Your Password is a Secret, Please Tell me" minlength="5" data-validation-minlength-message="Oops! It's too short.">
                            </div>
                        </div>
                        <div class="form-group pt-3">
                            <button name="login" type="submit" class="btn btn-lg rounded-pill btn-block btn-primary mb-3" value="login">Sign in</button>
                        </div>
                    </form>
                </div>
                <footer class="footer footer-light pl-0 pt-md-5">
                    <p class="clearfix text-muted text-center px-2">
                        <span>Copyright &copy; <a href="" class="text-bold-800 primary darken-2">GreenEye </a>, All rights reserved. </span>
                    </p>
                </footer>
            </div>
            <div class="col-12 col-md-7 col-lg-6 col-xl-7 d-none d-lg-block px-5 bg-light">
                <div class="bg-overlay bg-img vh-100" style="background: url('assets/img/auth.svg');"></div>
            </div>
        </div>
    </section>
</div>
<?php Import::getFooter(); ?>
<?php else : ?>
<?php header('location:' . ADMIN); ?>
<?php endif; ?>