<?php namespace GreenEye\App\Validators;

use GreenEye\App \{
    Functions\getself,
    Functions\Valid,
    Helper\Flash,
    Libs\Database as GreenEyeDatabase
};

/** Validate Class */
class Validate extends GreenEyeDatabase
{
    use Valid;
    use getself;

    protected $loginName;
    protected $loginPass;

    public function __construct()
    {
        parent::__construct();
        $this->checkLogin();
    }

    public function checkLogin()
    {
        if (isset($_GET['login'])) {
            if ($this->notEmp($_GET['loginName'], $_GET['loginPass'])) {
                $this->loginName = $this->cleanStr($_GET['loginName']);
                $this->loginPass = $this->enc($_GET['loginPass']);

                if ($this->notEmp($this->loginName, $this->loginPass)) {
                    $this->query('SELECT * FROM gReenEye_uSer WHERE gReeneye_unamE = :name AND gReeneye_upasS = :pass');
                    $this->bind(':name', $this->loginName);
                    $this->bind(':pass', $this->loginPass);
                    $row = $this->single();

                    if ($this->rowCount() > 0) {
                        $_SESSION['uSer_namE'] = $row['gReeneye_unamE'];
                        $_SESSION['uSer_iD'] = $row['gReeneye_uiD'];
                        $_SESSION['uSer_lvL'] = $row['gReeneye_ulvL'];
                        $_SESSION['gReeneye'] = rand(0000, 9999);
                        Flash::setMsg($row['gReeneye_unamE'] . ' Login Successfull.', 'success');
                        header('location:' . ADMIN);
                        exit();
                    } else {
                        Flash::setMsg('Invalid Login Details', 'warning');
                        header('location:' . $this->Path());
                        exit();
                    }
                } else {
                    Flash::setMsg('Something Went Wrong', 'error');
                    header('location:' . $this->Path());
                    exit();
                }
            } else {
                Flash::setMsg('Fields Are Empty, Please Fill All Field.', 'error');
                header('location:' . $this->Path());
                exit();
            }
        }
    }

    public function createAdmin()
    {
        if (isset($_POST['aUname'])) {
            if ($this->notEmp($_POST['aUname'], $_POST['aPass'])) {
                // $adminName = $this->cleanStr($_POST['aName']);
                $adminUname = $this->cleanStr($_POST['aUname']);
                $adminPass = $this->enc($_POST['aPass']);
                if ($_SESSION['uSer_lvL'] > 1) {
                    $lvl = $_SESSION['uSer_lvL'] + 1;
                } else {
                    $lvl = 2;
                }

                if ($this->notEmp($adminUname, $adminPass, $lvl)) {
                    $this->query('INSERT INTO `gReeneye_uSer`(`gReeneye_unamE`, `gReeneye_upasS`, `gReeneye_uriD`, `gReeneye_ulvL`) VALUES (:name, :pass, :rid, :lvl)');
                    $this->bind(':name', $adminUname);
                    $this->bind(':pass', $adminPass);
                    $this->bind(':rid', $_SESSION['uSer_iD']);
                    $this->bind(':lvl', $lvl);
                    $this->execute();
                    return print($adminUname . ' Created Successfully');
                    exit();
                } else {
                    return print('Fields Are Empty, Please Fill All Field.');
                    exit();
                }
            } else {
                return print('Fields Are Empty, Please Fill All Field.');
                exit();
            }
        }
    }

    public function showAdmin()
    {
        if ($_POST['sHow_admiN']) {
            $this->query('SELECT * FROM `gReeneye_uSer` WHERE `gReeneye_uiD` > 1 AND `gReeneye_uriD` = :rid');
            $this->bind(':rid', $_SESSION['uSer_iD']);
            $result = $this->resultset();
            if ($this->rowCount() > 0) {
                foreach ($result as $data) {
                    if (is_null($data['gReeneye_upiC'])) {
                        $pic = 'assets/img/avatar.png';
                    } else {
                        $pic = $data['gReeneye_upiC'];
                    }
                    echo '<div class="col-md-6 col-lg-4 mt-3">',
                        '<div class="rounded position-relative">',
                        '<i id="admin_' . $data['gReeneye_uiD'] . '" class="fa fa-times-circle text-success fa-2x position-absolute bg-light rounded-circle" style="right:-5%; top: -5%"></i>',
                        '<img class="img-thumbnail" src="' . $pic . '" alt="">',
                        '<h3 class="text-center pt-2">' . $data['gReeneye_unamE'] . '</h3>',
                        '</div>',
                        '</div>';
                }
            } else {
                echo '<div class="col-sm-12">',
                    '<h1 class="text-center">',
                    "No Admin's Created Yet.",
                    '</h1>',
                    '</div>';
            }
        }
    }

    public static function logOut()
    {
        if (isset($_REQUEST['logout']) && isset($_SESSION['gReeneye']) && !empty($_SESSION['gReeneye']) && isset($_SESSION['uSer_namE']) && !empty($_SESSION['uSer_namE'])) {
            session_destroy();
            Flash::setMsg('Logout Successfully', 'success');
            // header('location: login');
            Valid::reDirect(LOGIN);
            exit();
        }
    }
}
