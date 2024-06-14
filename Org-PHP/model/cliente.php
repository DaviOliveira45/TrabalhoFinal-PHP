<?php 

    require_once('model/conexao.php');

    class Cliente{

        private $idCliente;
        private $nomeCliente;
        private $cpf;
        private $email;
        private $senha;

        public function cadastraCliente() {
                try {
                $conn = Conexao::conectar();
                $sql = $conn->prepare("INSERT INTO gamershop.clientes (nomeCliente, cpf, email, senha) VALUES (:nomeUsuario, :cpf, :email, :senha)");
                $sql->bindParam(":nomeUsuario", $nomeCliente);
                $sql->bindParam(":cpf", $cpf);
                $sql->bindParam(":email", $email);
                $sql->bindParam(":senha", $senha);
                
                $nomeCliente = $this->nomeCliente;
                $cpf = $this->cpf;
                $email = $this->email;
                $senha = $this->senha;

                $sql->execute();
                echo "<p style='color: green'> Cadastro realizado com sucesso! </p>";
                } catch (PDOException $erro) {
                echo "<p style='color: red'>Cadastro falhou! </p>" . $erro;
                }
        }

        public function listarCliente() {
                $conn = Conexao::conectar();

                $sql = $conn->prepare("SELECT idCliente, nomeCliente, cpf, email, senha FROM gamershop.clientes");
                
                $sql->execute();
                $result = $sql->fetchAll();

                // print_r($result);
                require_once('./view/listar.php');
        }
        

        public function getClienteById($id) {
                $conn = Conexao::conectar();
                $sql = $conn->prepare("SELECT * FROM gamershop.clientes WHERE idCliente = :id");
                $sql->bindParam(':id', $id, PDO::PARAM_INT);
                $sql->execute();
                return $sql->fetch();
        }
        
        public function updateCliente($id, $nome, $cpf, $email, $senha) {
                try {
                    $conn = Conexao::conectar();
                    $sql = $conn->prepare("UPDATE gamershop.clientes SET nomeCliente = :nome, cpf = :cpf, email = :email, senha = :senha WHERE idCliente = :id");
                    $sql->bindParam(':id', $id, PDO::PARAM_INT);
                    $sql->bindParam(':nome', $nome);
                    $sql->bindParam(':cpf', $cpf);
                    $sql->bindParam(':email', $email);
                    $sql->bindParam(':senha', $senha);
                    $sql->execute();
                    echo "<p style='color: green'>Cliente atualizado com sucesso!</p>";
                } catch (PDOException $erro) {
                    echo "<p style='color: red'>Atualização falhou!</p>";
                }
        }
           

        public function excluirCliente($id)
        {
                try {
                        $conn = Conexao::conectar();
                        $sql = $conn->prepare("DELETE FROM gamershop.clientes WHERE idCliente = :id");
                        $sql->bindParam(":id", $id, PDO::PARAM_INT);
                        $sql->execute();
                        echo "<p style='color: green'>Cliente excluído com sucesso!</p>";
                } catch (PDOException $erro) {
                        echo "<p style='color: red'>Exclusão falhou!</p>";
                }
        }


        /**
         * Get the value of nomeCliente
         */
        public function getNomeCliente() {
                return $this->nomeCliente;
        }

        /**
         * Set the value of nomeCliente
         */
        public function setNomeCliente($nomeCliente): self {
                $this->nomeCliente = $nomeCliente;
                return $this;
        }

        /**
         * Get the value of cpf
         */
        public function getCpf() {
                return $this->cpf;
        }

        /**
         * Set the value of cpf
         */
        public function setCpf($cpf): self {
                $this->cpf = $cpf;
                return $this;
        }

        /**
         * Get the value of email
         */
        public function getEmail() {
                return $this->email;
        }

        /**
         * Set the value of email
         */
        public function setEmail($email): self {
                $this->email = $email;
                return $this;
        }

        /**
         * Get the value of senha
         */
        public function getSenha() {
                return $this->senha;
        }

        /**
         * Set the value of senha
         */
        public function setSenha($senha): self {
                $this->senha = $senha;
                return $this;
        }

        /**
         * Get the value of idCliente
         */
        public function getIdCliente() {
                return $this->idCliente;
        }

        /**
         * Set the value of idCliente
         */
        public function setIdCliente($idCliente): self {
                $this->idCliente = $idCliente;
                return $this;
        }
    }
?>