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
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="stylesheet" href="css/styletable.css">
    <link rel="stylesheet" href="view/css/styleregistro.css">

    <style>
        #editarh1{
            margin-top: 110px;
            text-align: center;
        }
    </style>
</head>
<script>
    function mascaraCPF() 
    {
        var cpf = document.getElementById('cpf');
        if(cpf.value.length == 3 || cpf.value.length == 7)
        {
          cpf.value += ".";
        }
        else if(cpf.value.length == 11)
        {
          cpf.value += "-";
        }
    }
</script>
<body>
    <div id="interface">

        
        <div>
        <nav id="menu">
            <h1>Menu principal</h1>
            <ul type="square">
                <li id="geral"><a href="/_php/Org-PHP/listacliente">Cliente</a></li>
                <a href="model/sair.php">Sair</a>          
            </ul>
        </nav>
        <img id="logo" src="view/imagens/G mer (200 x 112 px).png"/>
        </div> 

        

        <section id="corporegistro">

            <h2>Editar informações</h2>
            <h5></h5>
            <br>

            <?php 
                require_once('./model/verificacao.php');
            ?>

            <form method="post" action="index.php?url=ATUALIZARCLIENTE">
                <input type="hidden" name="idCliente" value="<?= $cliente['idCliente'] ?>">
                
                <input type="text" placeholder="Nome completo" id="nomeCliente" name="nomeCliente" value="<?= $cliente['nomeCliente'] ?>" >
                
                <input type="text" placeholder="CPF" id="cpf" name="cpf" value="<?= $cliente['cpf'] ?>" maxlength="14" onkeyup="mascaraCPF()">
                
                <input type="email" placeholder="E-mail" id="email" name="email" value="<?= $cliente['email'] ?>" >
                
                <input type="text" placeholder="Senha" id="senha" name="senha" value="<?= $cliente['senha'] ?>" >

                <p><button type="submit" name="atualizar" value="atualizar" id="criarbutton">ATUALIZAR DADOS</button></p>
                
            </form>

        </section>
    
    </div>
    
    <footer id="rodape">
        <p>GamerShop &reg;</p>
    </footer>
</body>
</html>
