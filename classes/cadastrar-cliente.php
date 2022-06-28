<?php
    Class Cadastro{
        private $pdo;
        public $msgErro = "";
        public function conectar($nome, $host, $usuario, $senha){
            global $pdo;
            global $msgErro;
            try{
                $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
            } catch (PDOException $e){
                $msgErro = $e->getMessage();
            }
        }
        public function cliente($nome_cliente, $data_cliente, $email_cliente, $cpf_cliente, $endereco, $cep, $cidade, $estado){
            global $pdo;
            //verificar se já existe 
            $sql = $pdo->prepare("SELECT codigo_cliente FROM cliente WHERE cpf_cliente = :a");
            $sql->bindValue(":a",$cpf_cliente);
            $sql->execute();
            if($sql->rowCount() > 0)
            {
                return false; // já cadastrada
            }
            else
            {
                //cadastar
                $sql = $pdo->prepare("INSERT INTO cliente (nome_cliente, data_cliente, email_cliente, cpf_cliente, endereco, cep, cidade, estado) VALUES (:a, :b, :c, :d, :e, :f, :g, :h)");
                $sql->bindValue(":a",$nome_cliente);
                $sql->bindValue(":b",$data_cliente);
                $sql->bindValue(":c",$email_cliente);
                $sql->bindValue(":d",$cpf_cliente);
                $sql->bindValue(":e",$endereco);
                $sql->bindValue(":f",$cep);
                $sql->bindValue(":g",$cidade);
                $sql->bindValue(":h",$estado);
                $sql->execute();
                return true;
            }
        }
        
    }
?>