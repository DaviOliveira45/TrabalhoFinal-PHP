<?php 

    session_start();
    if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['email']) == true)) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: /_php/Org-PHP/view/login.php');
    } 
    $logado = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styletable.css">

    <style>
        h1{
            margin-top: 110px;
        }
    </style>
</head>
<body>

    <h1>E-mail conectado <?php echo $logado; ?></h1>
    <div>
    <nav id="menu">
        <h1>Menu principal</h1>
        <ul type="square">
            <li id="geral"><a href="../listacliente">Cliente</a></li>
            <a href="../model/sair.php">Sair</a>          
        </ul>
    </nav>
    <img id="logo" src="imagens/G mer (200 x 112 px).png"/>
    </div> 
</body>
</html>