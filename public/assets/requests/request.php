<?php require_once '../../../__constants.php'; ?>
<?php use GreenEye\App\Libs \ {
    Appointment,
    Message
}; ?>

<?php /** @var array $startHour Hospital's Start Time */
$startHour = [
    'start' => '10',
    'end' => '00'
];

/** @var array $HospitalTime Hospital's Appointment Time */
$HospitalTime = [
    'morningStart' => $startHour['start'] . ' : ' . $startHour['end'],
    'morningEnd' => '12 : 00',
    'eveningStart' => '17 : 00',
    'eveningEnd' => '19 : 00'
]; ?>

<?php if (isset($_POST['getForm']) && !empty($_POST['getForm'])) : ?>
    <?php $Appointment = new Appointment; ?>
    <?php $date = new DateTime; ?>
    <?php $date->setTimezone(new DateTimeZone('Asia/Kolkata')); ?>

    <?php if ($_POST['getForm'] === 'Date') : ?>

        <?php for ($i = 0; $i < 3; $i++) : ?>
            <?php /** Check Date is Booked or Not */ ?>
            <?php if (count($Appointment->getBookedDate($date->format('F d, Y'))) !== 8) : ?>
                <?php /** `btn Container`
                 *
                 * $btn Store button Class & Attribute
                 * @var array $btn */
                $btn = ['class' => 'btnDate btn-outline-success', 'attr' => '']; ?>
            <?php else : ?>
                <?php $btn = ['class' => 'btn-danger', 'attr' => 'disabled']; ?>
            <?php endif; ?>

            <div class="col-md-4 my-1">
                <button class="btn w-100 <?php echo $btn['class']; ?> rounded-pill" type="button" id="<?php echo $date->format('F d, Y'); ?>" <?php echo $btn['attr']; ?>>
                    <?php echo $date->format('F d, Y'); ?>
                </button>
                <?php $date->modify('+1 day'); ?>
            </div>

        <?php endfor; ?>

    <?php elseif ($_POST['getForm'] === 'Time') : ?>
        <?php if (!empty($_POST['formDate'])) : ?>
            <?php if ($_POST['formDate'] !== $date->format('F d, Y')) {
                $date->modify($_POST['formDate']);
            } ?>
            <?php $date->setTime($startHour['start'], $startHour['end']); ?>

            <?php for ($i = 0; $i < 48; $i++) : ?>

                <?php /** Set Hospital's Appointment Time */ ?>
                <?php if (
                    ($date->format('H : i ') > $HospitalTime['morningStart']
                        &&
                        $date->format('H : i ') < $HospitalTime['morningEnd'])
                    || ($date->format('H : i ') > $HospitalTime['eveningStart']
                        &&
                        $date->format('H : i ') < $HospitalTime['eveningEnd'])
                ) : ?>

                    <?php /** Check Time is Booked or Not */ ?>
                    <?php /** if ($date->format('h : i A') !== '11 : 00 AM' && $date->format('h : i A') !== '05 : 30 PM') : */ ?>
                    <?php if (!in_array($date->format('F d, Y H : i A'), $Appointment->getBookedTime())) : ?>
                        <?php $btn = ['class' => 'btnTime btn-outline-success', 'attr' => '']; ?>
                    <?php else : ?>
                        <?php $btn = ['class' => 'btn-danger', 'attr' => 'disabled']; ?>
                    <?php endif; ?>

                    <div class="col-md-3 my-1">
                        <button class="btn w-100 <?php echo $btn['class']; ?> rounded-pill" type="button" id="<?php echo $date->format('H : i A'); ?>" <?php echo $btn['attr']; ?>>
                            <?php echo $date->format('h : i A'); ?>
                        </button>
                    </div>

                <?php endif; ?>
                <?php $date->modify('+30 minutes'); ?>

            <?php endfor; ?>
        <?php endif; ?>
    <?php elseif ($_POST['getForm'] === 'Set') : ?>

        <div class="col-md-6 my-1">
            <button class="btn btnSet btn-lg btn-success w-100 rounded-pill" type="button">
                <span class="font-weight-bold">
                    <?php echo $_POST['formTime']; ?>
                </span> at <?php echo $_POST['formDate']; ?>
            </button>
        </div>
        <div class="col-md-6 my-1">
            <button class="btnCancel btn btn-lg btn-secondary w-100 rounded-pill" type="button">Cancel Time</button>
        </div>

    <?php elseif ($_POST['getForm'] === 'OTP' && gettype($_POST['formData']) === 'array') : ?>
        <?php $sms = new Message; ?>
        <?php $_SESSION['refID'] = 'REF' . $sms->genrateOTP(); ?>
        <?php $_SESSION['name'] = $_POST['formData']['pnamE'] ?>
        <?php $_SESSION['number'] = $_POST['formData']['pnuM'] ?>
        <?php $bookDate = $_POST['formDate'] . ' At ' . $_POST['formTime']; ?>
        <?php $sms->send($_SESSION['name'], $_SESSION['refID'], $_SESSION['number'], $bookDate); ?>

    <?php elseif ($_POST['getForm'] === 'CheckOTP' && !empty($_POST['getOTP'])) : ?>
        <?php if (base64_decode($_COOKIE['gReeneye']) === $_POST['getOTP']) : ?>
            <?php $Appointment->Book(); ?>

            <div class="my-3 text-right mb-5">
                <img src="<?php echo ASSETS; ?>img/core-img/logo.png" alt="Logo" />
                <p class="pt-2 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p class=""><?php echo date('F d, Y h : i A', time()); ?></p>
                <hr class="w-100 border-secondary">
            </div>

            <div class="my-4">
                <label for="pgeN" class="h4">Patient's Reference ID :</label>
                <h6 class="text-secondary"><?php echo $_SESSION['refID'] ?></h6>
            </div>

            <div class="my-4">
                <label for="pnamE" class="h4">Patient's Name :</label>
                <h6 class="text-secondary"><?php echo $_SESSION['name']; ?></h6>
            </div>

            <div class="my-4">
                <label for="pnuM" class="h4">Patient's Mobile Number :</label>
                <h6 class="text-secondary">+91 <?php echo $_SESSION['number']; ?></h6>
            </div>

            <div class="my-4">
                <label for="pnuM" class="h4">Booking Date :</label>
                <h6 class="text-secondary"><?php echo $_POST['formDate']; ?> At <?php echo $_POST['formTime']; ?></h6>
            </div>

            <div class="my-5 py-5 text-center">
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus incidunt, molestias totam qui ullam sapiente id eius numquam quaerat deserunt corporis eum ad sed earum dolor expedita, aut libero nemo.
                </p>
                <p>
                    Thanks For Your Patience.
                </p>
            </div>

            <div class="mt-5">
                <p class="lead">
                    <span class="text-danger">* </span>
                    Please Remember <span class="text-danger">Reference Id</span>, It's use for Check Your Appointment Status And Cancelation Your Appointment Booking in Future.
                </p>
            </div>

            <div class="form-group my-5">
                <a href="<?php echo ROOT_URL; ?>"><button id="goBack" class="btn btn-lg btn-success w-100 rounded-pill" type="button">Go Back</button></a>
            </div>

            <?php return true; ?>
        <?php else : ?>
            <?php echo 'Not Match'; ?>
            <?php return false; ?>
        <?php endif; ?>

    <?php elseif ($_POST['getForm'] === 'Booked' && gettype($_POST['formData']) === 'array') : ?>
    <?php elseif ($_POST['getForm'] === 'CheckStatus' && gettype($_POST['formData']) === 'array') : ?>
        <?php if ($Appointment->checkAppointment()) : ?>
            <?php $user = $Appointment->checkAppointment(); ?>
            <div class="my-3 text-right mb-5">
                <img src="<?php echo ASSETS; ?>img/core-img/logo.png" alt="Logo" />
                <p class="pt-2 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p class=""><?php echo date('F d, Y h : i A', time()); ?></p>
                <hr class="w-100 border-secondary">
            </div>

            <div class="my-4">
                <label for="pgeN" class="h4">Patient's Reference ID :</label>
                <h6 class="text-secondary"><?php echo $user['gReeneye_brefiD']; ?></h6>
            </div>

            <div class="my-4">
                <label for="pnamE" class="h4">Patient's Name :</label>
                <h6 class="text-secondary"><?php echo $user['gReeeneye_bnamE']; ?></h6>
            </div>

            <div class="my-4">
                <label for="pnuM" class="h4">Patient's Mobile Number :</label>
                <h6 class="text-secondary">+91 <?php echo $user['gReeneye_bnuM']; ?></h6>
            </div>

            <div class="my-4">
                <label for="pnuM" class="h4">Booking Date :</label>
                <h6 class="text-secondary"><?php echo $user['gReeneye_bdatE']; ?> At <?php echo $user['gReeneye_btimE']; ?></h6>
            </div>

            <div class="my-5 py-5 text-center">
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus incidunt, molestias totam qui ullam sapiente id eius numquam quaerat deserunt corporis eum ad sed earum dolor expedita, aut libero nemo.
                </p>
                <p>
                    Thanks For Your Patience.
                </p>
            </div>

            <div class="mt-5">
                <p class="lead">
                    <span class="text-danger">* </span>
                    Please Remember <span class="text-danger">Reference Id</span>, It's use for Check Your Appointment Status And Cancelation Your Appointment Booking in Future.
                </p>
            </div>

            <div class="form-group my-5 row">
                <div class="col-md-6">
                    <a href="<?php echo ROOT_URL; ?>">
                        <button id="goBack" class="btn btn-lg btn-success w-100 rounded-pill" type="button">Go Back</button>
                    </a>
                </div>
                <div class="col-md-6">
                    <button id="<?php echo $user['gReeneye_biD']; ?>" class="btn btnDelete btn-lg btn-danger w-100 rounded-pill" type="button">Cancel Appointment</button>
                </div>

            </div>
        <?php else : ?>
            <div class="col-md-12 text-center my-5 py-5">
                <h1>No Appointment Found.</h1>
            </div>
            <div class="col-md-12 mb-3">
                <a href="<?php echo ROOT_URL; ?>">
                    <button class="btn btn-lg btn-success w-100 rounded-pill" type="button">Go Back</button>
                </a>
            </div>

        <?php endif; ?>
    <?php elseif ($_POST['getForm'] === 'btnDelete' && !empty($_POST['formData'])) : ?>
        <div class="col-md-12 text-center my-5 py-5">
            <h1>
                <?php echo $Appointment->cancelBooking(); ?>
            </h1>
        </div>
        <div class="col-md-12 mb-3">
            <a href="<?php echo ROOT_URL; ?>">
                <button class="btn btn-lg btn-success w-100 rounded-pill" type="button">Go Back</button>
            </a>
        </div>
    <?php endif; ?>
<?php endif; ?>