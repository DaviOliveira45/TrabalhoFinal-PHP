<?php 
    //Registrar

    $nome = isset($_POST['nome']) ? $_POST['nome'] : "";
    $cpf = isset($_POST['cpf']) ? $_POST['cpf'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $senha = isset($_POST['senha']) ? $_POST['senha'] : "";
    $confirmarSenha = isset($_POST['confirmarsenha']) ? $_POST['confirmarsenha'] : "";
    

    if (isset($_POST['criarconta'])) {

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $confirmarSenha = $_POST['confirmarsenha'];

        $cpfvalidado = false;
        $nomevalido = false;

        
        if (!empty($_POST['nome']) and !empty($_POST['cpf']) and !empty($_POST['email']) and !empty($_POST['senha']) and !empty($_POST['confirmarsenha'])) {

            $cpfAux = str_replace(".", "", $_POST['cpf']);
            $cpf = str_replace("-", "", $cpfAux);
    
            if ($_POST['senha'] != $_POST['confirmarsenha']) {
                echo "<p style='color: red'>As senhas não coincidem!</p>";
                $senha = "";
                $confirmarSenha = "";
            }

            if (strlen($_POST['cpf']) != 14) {
                echo "<p style='color: red'>O CPF deve conter 11 digitos!</p>";
                $cpf = "";
            } else if (!preg_match("/^\d+$/", $cpf)) {
                echo "<p style='color: red'>O CPF deve conter apenas números.</p>";
                $cpf = "";
            } else {
                $cpfvalidado = true;
            }

            if (!preg_match("/^[a-zA-Z\s]*$/", $nome)) {
                echo "<p style='color: red'>O campo Nome não aceita números e/ou caracteres especiais!</p>";
                $nome = "";
            } else {
                $nomevalido = true;
            }
    
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                echo "<p style='color: red'>Email invlálido</p>";
                $email = "";
            }
        } else {
            echo "<p style='color: red'>Todos os campos devem estar preenchidos</p>";
        }

        if (!empty($_POST['nome']) and $nomevalido == true and !empty($_POST['cpf']) and $cpfvalidado == true and !empty($_POST['email']) and !empty($_POST['senha']) and !empty($_POST['confirmarsenha']) and $_POST['confirmarsenha'] ==  $_POST['senha'] and filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            
            require_once("./controller/controllerCliente.php");
            $controle = new controllerCliente();
            $controle->action("C");

            $nome = "";
            $cpf = "";
            $email = "";
            $senha = "";
            $confirmarSenha = "";
        }

    }


    if (isset($_POST['atualizar'])) {

        $nome = $_POST['nomeCliente'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $cpfvalidado = false;
        $nomevalido = false;


        if (!empty($_POST['nome']) and !empty($_POST['cpf']) and !empty($_POST['email']) and !empty($_POST['senha'])) {

            $cpfAux = str_replace(".", "", $_POST['cpf']);
            $cpf = str_replace("-", "", $cpfAux);

            if (strlen($_POST['cpf']) != 14) {
                echo "<p style='color: red'>O CPF deve conter 11 digitos!</p>";
                $cpf = "";
            } else if (!preg_match("/^\d+$/", $cpf)) {
                echo "<p style='color: red'>O CPF deve conter apenas números.</p>";
                $cpf = "";
            } else {
                $cpfvalidado = true;
            }

            if (!preg_match("/^[a-zA-Z\s]*$/", $nome)) {
                echo "<p style='color: red'>O campo Nome não aceita números e/ou caracteres especiais!</p>";
                $nome = "";
            } else {
                $nomevalido = true;
            }
    
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                echo "<p style='color: red'>Email invlálido</p>";
                $email = "";
            }
        } else {
            echo "<p style='color: red'>Todos os campos devem estar preenchidos</p>";
        }


        if (!empty($_POST['nome']) and $nomevalido == true and !empty($_POST['cpf']) and $cpfvalidado == true and !empty($_POST['email']) and !empty($_POST['senha']) and filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            
            require_once("./controller/controllerCliente.php");
            $controle = new controllerCliente();
            $controle->action("U");

            $nome = "";
            $cpf = "";
            $email = "";
            $senha = "";
        }

    }
?>