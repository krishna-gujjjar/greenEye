<?php namespace GreenEye\App\Helper;

class Flash
{
    public function __construct()
    {
        if (!session_id()) @session_start();
    }

    public static function setMsg(string $text, string $type = null)
    {
        switch ($type) {
            case 'success':
                $_SESSION['success'] = $text;
                break;

            case 'error':
                $_SESSION['error'] = $text;
                break;

            case 'warning':
                $_SESSION['warning'] = $text;
                break;

            case 'info':
                $_SESSION['info'] = $text;
                break;
        }
    }

    public static function display()
    {
        $type = array('success', 'error', 'warning', 'info');
        foreach ($type as $type) {
            if (isset($_SESSION[$type]) && !empty($_SESSION[$type])) {

                echo '<script>',
                    'Snackbar.show({
                    text: "',
                    $_SESSION[$type],
                    '",
                    pos: "top-right",
                    actionTextColor: "var(--primary)",
                    backgroundColor: "var(--dark)"
                });',
                    '</script>';
                // echo "<script>",
                //     "toastr.",
                //     $type,
                //     "('",
                //     $_SESSION[$type],
                //     "','',{closeButton: true}",
                //     ");",
                //     "</script>";
                unset($_SESSION[$type]);
            }
        }
    }
}
