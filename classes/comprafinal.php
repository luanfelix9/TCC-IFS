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
        public function compra($descricao_venda, $data_venda, $nomecliente,$vvalorfinal){
            global $pdo;
                //cadastar
            $sql = $pdo->prepare("INSERT INTO venda (descricao_venda, data_venda, nomecliente, vvalorfinal,) VALUES (:a, :b, :c, :d)");
            $sql->bindValue(":a",$descricao_venda);
            $sql->bindValue(":b",$data_venda);
            $sql->bindValue(":c",$nomecliente);
            $sql->bindValue(":d",$vvalorfinal);
            $sql->execute();
            return true;
        }
        public function apagar(){
            global $pdo;
                //cadastar
            $sql = $pdo->prepare(" SELECT * FROM venda");
            $sql->clear();
            $sql->execute();
            return true;
        }
    }
    
?>