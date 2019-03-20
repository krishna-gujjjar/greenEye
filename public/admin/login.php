<?php require_once '../../__constants.php'; ?>
<?php Import::getHeader(); ?>
<div class="container-fluid">
    <section>
        <div class="row">

            <div class="col-12 col-md-5 col-lg-6 col-xl-5 px-lg-5">
                <div class="pt-md-5 pt-3 mt-md-5 mt-1 pb-md-5">
                    <h1 class=" display-4 text-center mb-3 font-weight-bold text-capitalize">
                        Sign in
                    </h1>

                    <p class="text-muted text-center mb-5">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    </p>

                    <form action="<?php echo str_replace('.php', '', str_replace('/public', '', $_SERVER['PHP_SELF'])); ?>" novalidate>
                        <div class="form-group">
                            <h5>Username</h5>
                            <div class="controls">
                                <input type="text" name="loginName" class="form-control" required autocomplete="off" data-validation-required-message="Hey ! Your Username is Importent for me, Please tell me." data-validation-regex-regex="([a-zA-Z-_@.])*" data-validation-regex-message="Oops! You Mistyped, Please Type Valid Username.">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="loginName" class="form-control form-control-lg" placeholder="user@example.com" autocomplete="off" autofocus>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label>Password</label>
                                </div>
                                <div class="col-auto">
                                    <a href="password-reset" class="form-text small text-muted"> Forgot password? </a>
                                </div>
                            </div>

                            <div class="input-group input-group-merge">
                                <input type="password" name="loginPass" class="form-control form-control-lg" placeholder="Enter your password" autocomplete="off">
                            </div>
                        </div>

                        <button class="btn btn-lg btn-block btn-primary mb-3" name="login" value="login">Sign in</button>

                        <p class="text-center">
                            <small class="text-muted text-center">
                                Don't have an account yet? <a href="sign-up">Sign up</a> now.
                            </small>
                        </p>
                    </form>
                </div>
                <footer class="footer footer-light pl-0 mt-5 pt-md-5">
                    <p class="clearfix text-muted text-center px-2">
                        <span>Copyright &copy; <a href="" class="text-bold-800 primary darken-2">GreenEye </a>, All rights reserved. </span>
                    </p>
                </footer>
            </div>
            <div class="col-12 col-md-7 col-lg-6 col-xl-7 d-none d-lg-block px-5 bg-light">
                <div class="bg-overlay bg-img vh-100" style="background: url('assets/img/auth.svg');"></div>
                <!-- <div class="bg-overlay bg-img vh-100" style="background: url('app-assets/img/photos/16.jpeg');"></div> -->
            </div>
        </div>
    </section>
</div>
<?php Import::getFooter(); ?>