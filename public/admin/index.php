<?php require_once '../../__constants.php'; ?>
<?php use GreenEye\App \ {
    Config\Import,
    Functions\Valid,
    Helper\Flash,
    Libs\Appointment
}; ?>
<?php if (Valid::User()) : ?>
    <?php Import::getHeader(); ?>
    <?php Flash::display(); ?>
    <div class="container-fluid">
        <div class="row match-height">
            <div class="col-xl-4 col-lg-6 col-12">
                <div class="card bg-info">
                    <div class="card-body">
                        <div class="px-3 py-4">
                            <div class="media">
                                <div class="align-center">
                                    <i class="icon-settings text-white font-large-2 float-left"></i>
                                </div>
                                <div class="media-body text-white text-right">
                                    <h3 class="pb-3 text-white">423</h3>
                                    <span>Total Admin</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-12">
                <div class="card bg-primary">
                    <div class="card-body">
                        <div class="px-3 py-4">
                            <div class="media">
                                <div class="align-center">
                                    <i class="icon-users text-white font-large-2 float-left"></i>
                                </div>
                                <div class="media-body text-white text-right">
                                    <h3 class="pb-3 text-white">43</h3>
                                    <span>New Appointment</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-12">
                <div class="card bg-success">
                    <div class="card-body">
                        <div class="px-3 py-4">
                            <div class="media">
                                <div class="align-center">
                                    <i class="icon-close text-white font-large-2 float-left"></i>
                                </div>
                                <div class="media-body text-white text-right">
                                    <h3 class="pb-3 text-white">423</h3>
                                    <span>Cancel Appointments</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title-wrap bar-info">
                            <h4 class="card-title">New Appointments</h4>
                            <?php $Book = new Appointment; ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-block">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Patient's Name</th>
                                        <th>Mobile Number</th>
                                        <th>Appointment Date</th>
                                        <th>Booking Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php if ($newBook = $Book->showFiveAppointment('Book')) : ?>
                                        <?php foreach ($newBook as $bookedUser) : ?>
                                            <tr>
                                                <th scope="row"><?php echo $i++; ?></th>
                                                <td><?php echo $bookedUser['gReeeneye_bnamE']; ?></td>
                                                <td>+91 <?php echo $bookedUser['gReeneye_bnuM']; ?></td>
                                                <td><?php echo $bookedUser['gReeneye_bdatE'] . ' @ ' . $bookedUser['gReeneye_btimE'] ?></td>
                                                <td><?php echo date('F d, Y' . ' @ ' . ' h : i A', strtotime($bookedUser['gReeneye_bcrT'])); ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title-wrap bar-success">
                            <h4 class="card-title">Canceled Appointments</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-block">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Patient's Name</th>
                                        <th>Mobile Number</th>
                                        <th>Appointment Date</th>
                                        <th>Booking Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php if ($newBook = $Book->showFiveAppointment('Cancel')) : ?>
                                        <?php foreach ($newBook as $bookedUser) : ?>
                                            <tr>
                                                <th scope="row"><?php echo $i++; ?></th>
                                                <td><?php echo $bookedUser['gReeeneye_bnamE']; ?></td>
                                                <td>+91 <?php echo $bookedUser['gReeneye_bnuM']; ?></td>
                                                <td><?php echo $bookedUser['gReeneye_bdatE'] . ' @ ' . $bookedUser['gReeneye_btimE'] ?></td>
                                                <td><?php echo date('F d, Y' . ' @ ' . ' h : i A', strtotime($bookedUser['gReeneye_bcrT'])); ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- All appointments -->



    <div class="row">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title-wrap bar-info">
                        <h4 class="card-title">All Appointments</h4>
                        <?php $Book = new Appointment; ?>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-block">
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Patient's Name</th>
                                    <th>Mobile Number</th>
                                    <th>Appointment Date</th>
                                    <th>Booking Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php if ($newBook = $Book->showallAppointment('Book')) : ?>
                                    <?php foreach ($newBook as $bookedUser) : ?>
                                        <tr>
                                            <th scope="row"><?php echo $i++; ?></th>
                                            <td><?php echo $bookedUser['gReeeneye_bnamE']; ?></td>
                                            <td>+91 <?php echo $bookedUser['gReeneye_bnuM']; ?></td>
                                            <td><?php echo $bookedUser['gReeneye_bdatE'] . ' @ ' . $bookedUser['gReeneye_btimE'] ?></td>
                                            <td><?php echo date('F d, Y' . ' @ ' . ' h : i A', strtotime($bookedUser['gReeneye_bcrT'])); ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        </body>

        </html>



        <?php Import::getFooter(); ?>
    <?php else : ?>
        <?php header('location:' . LOGIN); ?>
    <?php endif; ?>