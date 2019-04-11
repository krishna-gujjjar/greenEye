<?php require_once '../../../__constants.php'; ?>
<?php if (!empty($_POST['pnamE']) && !empty($_POST['pnuM']) && !empty($_POST['pgeN'])) : ?>


<?php endif; ?>
<?php if (isset($_POST['getForm']) && !empty($_POST['getForm'])) : ?>
    <?php $date = new DateTime; ?>
    <?php $date->setTimezone(new DateTimeZone('Asia/Kolkata')); ?>

    <?php if ($_POST['getForm'] === 'Date') : ?>

        <?php for ($i = 0; $i < 3; $i++) : ?>
            <div class="col-md-4 my-1">
                <button class="btnDate btn w-100 btn-outline-success rounded-pill" type="button" id="<?php echo strtolower($date->format('F d, Y')); ?>">
                    <?php echo $date->format('F d, Y'); ?>
                </button>
                <?php $date->modify('+1 day'); ?>
            </div>
        <?php endfor; ?>
    <?php elseif ($_POST['getForm'] === 'Time') : ?>
        <?php $date->setTime(10, 00); ?>
        <?php for ($i = 0; $i < 4; $i++) : ?>
            <div class="col-md-3 my-1">
                <button class="btnTime btn w-100 btn-outline-success rounded-pill" type="button" id="<?php echo strtolower($date->format('H : i A')); ?>">
                    <?php echo $date->format('h : i A'); ?>
                </button>
                <?php $date->modify('+30 minutes'); ?>
            </div>
        <?php endfor; ?>
        <?php $date->setTime(17, 00); ?>
        <?php for ($i = 0; $i < 4; $i++) : ?>
            <div class="col-md-3 my-1">
                <button class="btnTime btn w-100 btn-outline-success rounded-pill" type="button" id="<?php echo strtolower($date->format('H : i A')); ?>">
                    <?php echo $date->format('h : i A'); ?>
                </button>
                <?php $date->modify('+30 minutes'); ?>
            </div>
        <?php endfor; ?>

    <?php elseif ($_POST['getForm'] === 'Set') : ?>
        <div class="col-md-6 my-1">
            <button class="btn btn-lg btn-success w-100 rounded-pill" type="button">
                <span class="font-weight-bold">
                    <?php echo $_POST['formTime']; ?>
                </span> at <?php echo $_POST['formDate']; ?></button>
        </div>
        <div class="col-md-6 my-1">
            <button class="btnCancel btn btn-lg btn-secondary w-100 rounded-pill" type="button">Cancel Time</button>
        </div>
    <?php endif; ?>
<?php endif; ?>