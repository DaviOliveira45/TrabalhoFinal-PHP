<?php 

    require_once('model/cliente.php');

    class controllerCliente{

        public function action($acao){
            if($acao == "C") {
                
                $novoCliente = new Cliente();

                $cpfAux = str_replace(".", "", $_POST['cpf']);
                $_POST['cpf'] = str_replace("-", "", $cpfAux);

                

                $novoCliente->setNomeCliente($_POST['nome']);
                $novoCliente->setCpf($_POST['cpf']);
                $novoCliente->setEmail($_POST['email']);
                $novoCliente->setSenha(($_POST['senha']));

                $novoCliente->cadastraCliente();
                
            } 
            else if($acao == "R") 
            {
                $Cliente = new Cliente();
                $Cliente->listarCliente();
            }  
        }

        public function actionDelete($acao, $id)
        {
            if($acao == "E") // EXCLUIR (DELETE)
            {
                $Cliente = new Cliente();
                $Cliente->excluirCliente($id);
                header('Location: index.php?url=LISTACLIENTE');
            }
        }

        public function actionEdit($acao, $id) {
            if ($acao == "U") {
                $Cliente = new Cliente();
                $cliente = $Cliente->getClienteById($id);
                require_once('view/editar.php');
            }
        }
    
        public function actionUpdate($acao) {
            if ($acao == "U") {
                $Cliente = new Cliente();
    
                $id = $_POST['idCliente'];
                $cpfAux = str_replace(".", "", $_POST['cpf']);
                $_POST['cpf'] = str_replace("-", "", $cpfAux);
    
                $Cliente->updateCliente($id, $_POST['nomeCliente'], $_POST['cpf'], $_POST['email'], $_POST['senha']);
                header('Location: index.php?url=LISTACLIENTE');
            }
        }

    }

?>