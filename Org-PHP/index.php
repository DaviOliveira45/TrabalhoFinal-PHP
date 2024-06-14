<?php 

    //Pegando exatamente o que o usuário está digitando
  $url = strtoupper($_GET['url']);



    if($url=="CADASTRO")
    {
        require_once("view/registrar.php");
    }
    elseif($url=="CADASTRACLIENTE")
    {
        require_once("controller/controllerCliente.php");
        $controle = new controllerCliente();
        $controle->action("C");
    }
    elseif($url=="LISTACLIENTE")
    {
        require_once("controller/controllerCliente.php");
        $controle = new controllerCliente();
        $controle->action("R");
    }
    else if($url == "EXCLUIR")
    {
        require_once("controller/controllerCliente.php");
        $controle = new controllerCliente();
        $id = $_GET['id'];
        $controle->actionDelete("E", $id);
    }
    elseif ($url == "EDITAR") 
    {
        require_once("controller/controllerCliente.php");
        $controle = new controllerCliente();
        $id = $_GET['id'];
        $controle->actionEdit("U", $id);
    } 
    elseif ($url == "ATUALIZARCLIENTE") 
    {
        require_once("controller/controllerCliente.php");
        $controle = new controllerCliente();
        $controle->actionUpdate("U");
    }
    
?>