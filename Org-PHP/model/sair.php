<?php 
session_start();
unset($_SESSION['email']);
unset($_SESSION['senha']);
if (isset($_COOKIE['email'])) {
    setcookie('email', '', time() - 3600, '/');
    setcookie('senha', '', time() - 3600, '/');
}
header('Location: /_php/Org-PHP/view/login.php');
?>
