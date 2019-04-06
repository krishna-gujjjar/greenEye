<?php namespace GreenEye\App\Helper;

class Flash
{
    public function __construct()
    {
        if (!session_id()) @session_start();
    }

    /** `setMsg Function`
     * @param string $text Display Message End
     * @return void */
    public static function setMsg(string $text)
    {
        $_SESSION['Message'] = $text;
    }

    public static function display()
    {

        if (isset($_SESSION['Message']) && !empty($_SESSION['Message'])) {

            echo '<script>',
                'Snackbar.show({
                    text: "',
                $_SESSION['Message'],
                '",
                    pos: "top-right",
                    actionTextColor: "var(--primary)",
                    backgroundColor: "var(--dark)"
                });',
                '</script>';
            // echo "<script>",
            //     "toastr.",
            //     'Message',
            //     "('",
            //     $_SESSION['Message'],
            //     "','',{closeButton: true}",
            //     ");",
            //     "</script>";
            unset($_SESSION['Message']);
        }
    }
}
