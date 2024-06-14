<?php 

class Conexao{

    public static function conectar(){

        try{
            $conn = new PDO("mysql:host=localhost;dbname=gamershop", 'root', 'Fabricio123@');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "<p style='color: green'>Conexão realizada com sucesso!</p>";
            return $conn;
        }
        catch(PDOException $erro)
        {
            //echo "<p style='color: red'>Conexão Falhou! => " . $erro->getMessage() . "</p>";
            return null;
        }    

    }

}

?>