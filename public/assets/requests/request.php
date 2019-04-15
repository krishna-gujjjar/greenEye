<?php require_once '../../../__constants.php'; ?>
<?php use GreenEye\App\Libs\Appointment; ?>

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
    <?php if (isset($_POST['getForm']) && $_POST['getForm'] === 'Booked' && gettype($_POST['formData']) === 'array') : ?>
        <?php $Appointment->Book(); ?>
    <?php endif; ?>

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
            <button class="btn btn-lg btn-success w-100 rounded-pill" type="button">
                <span class="font-weight-bold">
                    <?php echo $_POST['formTime']; ?>
                </span> at <?php echo $_POST['formDate']; ?>
            </button>
        </div>
        <div class="col-md-6 my-1">
            <button class="btnCancel btn btn-lg btn-secondary w-100 rounded-pill" type="button">Cancel Time</button>
        </div>

    <?php endif; ?>
<?php endif; ?>