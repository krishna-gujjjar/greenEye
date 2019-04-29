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

    <h1>All Appointments</h1>

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

        <?php Import::getFooter(); ?>
    <?php else : ?>
        <?php Valid::reDirect(LOGIN); ?>
    <?php endif; ?>