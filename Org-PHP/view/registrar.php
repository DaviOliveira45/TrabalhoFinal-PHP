<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar | GamerShop</title>

    <link rel="stylesheet" href="view/css/style.css"/>
    <link rel="stylesheet" href="view/css/styleregistro.css"/>

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

    <header id="cabecalho">

    <nav id="menu">
        <h1>Menu principal</h1>
        <ul type="square">
            <li id="geral"><a href="../view/home.php">Home</a></li>
            <li id="geral"><a href="../view/playstation.php">PlayStation</a></li>
            <li id="geral"><a href="../view/steam.php">Steam</a></li>           
        </ul>
        <div id="campopesquisa">
            <section id="pesquisa">
                <input type="text" placeholder="Busque seu jogo..." id="search"/>
            </section>
            <aside id="pesquisa1">
                <img id="pesquisadesktop" src="view/imagens/imgpesquisar_resized.png"/>
            </aside>    
        </div>
        <ul id="entrar-registro">
            <li><a href="view/login.php">Entrar/Registrar</a></li>
        </ul>

    </nav>

    <img id="logo" src="view/imagens/G mer (200 x 112 px).png"/>

    <div id="sacoladesktop">
        <img src="view/imagens/sacola(60 x 40).png"/>
    </div>

    </header>
    
        <section id="corporegistro">

        <h2>Crie sua conta</h2>
        <h5>e concorra a promoções incríveis!</h5>

        <?php 
            require_once("./model/verificacao.php");
        ?>
        
        <form action="" method="POST" type="submit">
            
            <input type="text" name="nome" value="<?php echo $nome; ?>" placeholder="Nome completo" id="nome"/>

            <input type="text" name="cpf" value="<?php echo $cpf; ?>" maxlength="14" placeholder="CPF" id="cpf"  onkeyup="mascaraCPF()"/>

            <input type="text" name="email" value="<?php echo $email; ?>" placeholder="E-mail" id="email"/>

            <input type="text" name="senha" value="<?php echo $senha; ?>" placeholder="Senha" id="senha"/>

            <input type="text" name="confirmarsenha" value="<?php echo $confirmarSenha; ?>" placeholder="Confirmar senha" id="confirmasenha"/>

            <!-- <div id="check-box">
                <section id="corpocheck">
                    <input type="checkbox" id="termosuso"/>
                    <label for="termosuso" class="checkpersonalizado"></label>
                </section>
                <aside id="textolateral">
                    <p>Eu li e concordo com os <a href="termosdeuso.html">Termos de Uso</a> e <a href="politicadeprivacidade.html">Política de Privacidade</a>. A GamerShop não coleta intencionalmente dados de crianças menores de 13 anos de idade.</p>
                </aside>
            </div> -->

            <p><button type="submit" name="criarconta" value="criarconta" id="criarbutton">CRIAR CONTA</button></p>
        </form>

        <p id="comconta">Já tem conta?</p>

        <p id="login"><a  id="login" href="login.html">Entrar na conta</a></p>
    
        </section>
    
        </div>
    
        <footer id="rodape">
            <p>GamerShop &reg;</p>
        </footer>
</body>
</html>