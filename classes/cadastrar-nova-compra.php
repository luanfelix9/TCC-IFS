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
        public function compra($nome, $quantidade, $preco,$valortotal,$cliente){
            global $pdo;
            //verificar se já existe 
            $sql = $pdo->prepare("SELECT codigo_produto FROM produto WHERE codigo_produto = :a");
            $sql->bindValue(":a",$quantidade);
            $sql->execute();
            if($sql->rowCount() < 0)
            {
                return false; // já cadastrada
            }
            else
            {
                //cadastar
                $sql = $pdo->prepare("INSERT INTO venda_produto (nome, quantidade, preco, valortotal, cliente) VALUES (:a, :b, :c, :d, :e)");
                $sql->bindValue(":a",$nome);
                $sql->bindValue(":b",$quantidade);
                $sql->bindValue(":c",$preco);
                $sql->bindValue(":d",$valortotal);
                $sql->bindValue(":e",$cliente);
                $sql->execute();
                return true;
            }
        }
        
    }
?>