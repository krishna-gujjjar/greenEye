<?php require_once '../../../../__constants.php'; ?>
<?php use GreenEye\App\Validators\Validate; ?>
<?php $valid = new Validate; ?>
<?php if (isset($_POST['aUname'])) : ?>
<?php $valid->createAdmin(); ?>
<?php elseif (isset($_POST['sHow_admiN'])) : ?>
<?php $valid->showAdmin(); ?>
<?php endif; ?>