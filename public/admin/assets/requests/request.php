<?php require_once '../../../../__constants.php'; ?>
<?php use GreenEye\App \{
    Functions\Valid,
    Libs\Admin
}; ?>
<?php if (Valid::User()) :
    $admin = new Admin;
    if ($admin->isCreatePost('aUname', 'aPass')) :
        $admin->createAdmin();
    elseif ($admin->isCreatePost('sHow_admiN')) :
        $admin->showAdmin();
    endif;
else :
    print('Something Went Wrong');
endif; ?>