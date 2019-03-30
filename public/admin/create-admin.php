<?php require_once '../../__constants.php'; ?>
<?php use GreenEye\App \{
    Config\Import,
    Helper\Flash
}; ?>
<?php Flash::display(); ?>
<?php Import::getHeader(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header text-center pt-5">
                    <h1>Create Admins</h1>
                    <hr class="w-50 border-primary">
                </div>
                <div class="card-body">
                    <div class="container px-5 pb-5">
                        <form method="get" action="" novalidate>
                            <div class="form-group">
                                <label for="aName">Admin's Name</label>
                                <input id="aName" class="form-control form-control-lg border-primary bg-light" type="text" placeholder="eg. Krishna Gujjjar">
                            </div>
                            <div class="form-group">
                                <label for="aUname">Admin's Username</label>
                                <input id="aUname" class="form-control form-control-lg border-primary bg-light" type="text" placeholder="eg. krishna_gujjjar">
                            </div>
                            <div class="form-group">
                                <label for="aPass">Admin's Password</label>
                                <input id="aPass" class="form-control form-control-lg border-primary bg-light" type="password" placeholder="eg. 12345">
                            </div>
                            <div class="form-group pt-3">
                                <button class="btn btn-primary form-control form-control-lg" type="submit">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header text-center pt-5">
                    <h1>Our Admins</h1>
                    <hr class="w-50 border-primary">
                </div>
                <div class="card-body px-5 pb-5">
                    <div class="row">
                        <div class="col-sm-3 mt-3">
                            <div class="rounded position-relative">
                                <i class="fa fa-times-circle text-success fa-2x position-absolute bg-light rounded-circle" style="right:-5%; top: -10%"></i>
                                <img class="img-thumbnail" src="app-assets/img/gallery/1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-3 mt-3">
                            <div class="rounded position-relative">
                                <i class="fa fa-times-circle text-success fa-2x position-absolute bg-light rounded-circle" style="right:-5%; top: -10%"></i>
                                <img class="img-thumbnail" src="app-assets/img/gallery/1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-3 mt-3">
                            <div class="rounded position-relative">
                                <i class="fa fa-times-circle text-success fa-2x position-absolute bg-light rounded-circle" style="right:-5%; top: -10%"></i>
                                <img class="img-thumbnail" src="app-assets/img/gallery/1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-3 mt-3">
                            <div class="rounded position-relative">
                                <i class="fa fa-times-circle text-success fa-2x position-absolute bg-light rounded-circle" style="right:-5%; top: -10%"></i>
                                <img class="img-thumbnail" src="app-assets/img/gallery/1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-3 mt-3">
                            <div class="rounded position-relative">
                                <i class="fa fa-times-circle text-success fa-2x position-absolute bg-light rounded-circle" style="right:-5%; top: -10%"></i>
                                <img class="img-thumbnail" src="app-assets/img/gallery/1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-3 mt-3">
                            <div class="rounded position-relative">
                                <i class="fa fa-times-circle text-success fa-2x position-absolute bg-light rounded-circle" style="right:-5%; top: -10%"></i>
                                <img class="img-thumbnail" src="app-assets/img/gallery/1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-3 mt-3">
                            <div class="rounded position-relative">
                                <i class="fa fa-times-circle text-success fa-2x position-absolute bg-light rounded-circle" style="right:-5%; top: -10%"></i>
                                <img class="img-thumbnail" src="app-assets/img/gallery/1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-3 mt-3">
                            <div class="rounded position-relative">
                                <i class="fa fa-times-circle text-success fa-2x position-absolute bg-light rounded-circle" style="right:-5%; top: -10%"></i>
                                <img class="img-thumbnail" src="app-assets/img/gallery/1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-3 mt-3">
                            <div class="rounded position-relative">
                                <i class="fa fa-times-circle text-success fa-2x position-absolute bg-light rounded-circle" style="right:-5%; top: -10%"></i>
                                <img class="img-thumbnail" src="app-assets/img/gallery/1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-3 mt-3">
                            <div class="rounded position-relative">
                                <i class="fa fa-times-circle text-success fa-2x position-absolute bg-light rounded-circle" style="right:-5%; top: -10%"></i>
                                <img class="img-thumbnail" src="app-assets/img/gallery/1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-3 mt-3">
                            <div class="rounded position-relative">
                                <i class="fa fa-times-circle text-success fa-2x position-absolute bg-light rounded-circle" style="right:-5%; top: -10%"></i>
                                <img class="img-thumbnail" src="app-assets/img/gallery/1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-3 mt-3">
                            <div class="rounded position-relative">
                                <i class="fa fa-times-circle text-success fa-2x position-absolute bg-light rounded-circle" style="right:-5%; top: -10%"></i>
                                <img class="img-thumbnail" src="app-assets/img/gallery/1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php Import::getFooter(); ?>