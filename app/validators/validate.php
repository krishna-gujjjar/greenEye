<?php namespace GreenEye\App\Validators;

use GreenEye\App \{
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
                        // $_SESSION['success'] = array();
                        //
                    } else {
                        Flash::setMsg('Invalid Login Details', 'warning');
                        // echo '<script>window.location.href="login"</script>';
                    }
                } else {
                    Flash::setMsg('Something Went Wrong', 'error');
                }
            }
        }
    }

    public static function logOut()
    {
        if (isset($_REQUEST['logout']) && isset($_SESSION['gReeneye']) && !empty($_SESSION['gReeneye']) && isset($_SESSION['uSer_namE']) && !empty($_SESSION['uSer_namE'])) {
            session_destroy();
            Flash::setMsg('Logout Successfully', 'success');
            // header('location: login');
            Valid::reDirect('login');
            exit();
        }
    }
}
