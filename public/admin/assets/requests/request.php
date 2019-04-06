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
    elseif ($admin->isCreatePost('dEl_admiN')) :
        $admin->delAdmin();
    endif;
else :
    print('Something Went Wrong');
endif; ?>