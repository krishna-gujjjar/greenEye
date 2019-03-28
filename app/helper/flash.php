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
                echo "<script>",
                    "toastr.",
                    $type,
                    "('",
                    $_SESSION[$type],
                    "','',{closeButton: true}",
                    ");",
                    "</script>";
                //echo '<div class="alert alert-danfer">' . $_SESSION['error'] . '</div>';
                unset($_SESSION[$type]);
            }
        }
    }



    // public function printMessage()
    // {
    //     $type = array("success", "error", "warning", "info");
    //     foreach ($type as $type) {
    //         if (isset($_SESSION[$type]) && !empty($_SESSION[$type]) && is_array($_SESSION[$type])) {
    //             foreach ($_SESSION[$type] as $msg) {
    //                 echo "<script>",
    //                     "toastr.",
    //                     $type,
    //                     "('",
    //                     $msg,
    //                     "','',{closeButton: true}",
    //                     ");",
    //                     "</script>";
    //             }
    //             unset($_SESSION[$type]);
    //         }
    //     }
    // }
}
