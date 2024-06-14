<?php 
session_start();
//print_r($_REQUEST);

if (isset($_POST['enviar']) && !empty($_POST['email']) && !empty($_POST['senha'])) 
{
    include_once('conexao.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // print_r($email);
    // print_r($senha);

    $conn = Conexao::conectar();
    $sql = $conn->prepare("SELECT * FROM adm WHERE email = :email and senha = :senha");

    $sql->bindParam(':email', $email);
    $sql->bindParam(':senha', $senha);

    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    //print_r($result);

    if (count($result) < 1) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        if (isset($_COOKIE['email'])) {
            setcookie('email', '', time() - 3600, '/');
            setcookie('senha', '', time() - 3600, '/');
        }
        header('Location: ../view/login.php');
    }
    else {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;

        if (isset($_POST['lembrar'])) {
            setcookie('email', $email, time() + (86400 * 30), "/"); // 86400 = 1 day
            setcookie('senha', $senha, time() + (86400 * 30), "/");
        } else {
            if (isset($_COOKIE['email'])) {
                setcookie('email', '', time() - 3600, '/');
                setcookie('senha', '', time() - 3600, '/');
            }
        }

        header('Location: ../view/homeSistema.php');
    }
}
else 
{
    header('Location: login.php');
}
?>
