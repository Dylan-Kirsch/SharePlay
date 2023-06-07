<?php
class Controller
{  

    public static function isNotConnected()
    {
        return (!isset($_SESSION['isConnected'])|| !$_SESSION['isConnected']);
    }
    public static function isConnected()
    {
        return !Controller::isNotConnected();
    }
    public static function getCSRFToken()
    {
        if (empty($_SESSION['csrftoken'])) {
            $_SESSION['csrftoken'] = bin2hex(openssl_random_pseudo_bytes(32));
        }
        return $_SESSION['csrftoken'];
    }

    public static function checkCSRFToken()
    {
        return (isset($_POST['csrftoken'])&&($_SESSION['csrftoken']==$_POST['csrftoken']));
    }
}

?>