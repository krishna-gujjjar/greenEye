<?php namespace GreenEye\App\Validators;

use GreenEye\App \{
    Config\database,
    Functions\valid
};

/** Validate Class */
class validate extends database
{
    use valid;

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
                        print_r($_SESSION);
                    } else {
                        echo 'not found';
                    }
                } else {
                    echo 'Wrong';
                }
            }
        }
    }
}
