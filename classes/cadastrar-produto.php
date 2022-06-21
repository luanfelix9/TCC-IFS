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
        public function produto($nome_produto, $marca_produto, $validade_produto, $data_compra, $preco_produto, $preco_venda, $quantidade_produto, $cpf_funcionario){
            global $pdo;
            //verificar se já existe 
            $sql = $pdo->prepare("SELECT codigo_produto FROM produto WHERE nome_produto = :a");
            $sql->bindValue(":a",$nome_produto);
            $sql->execute();
            if($sql->rowCount() > 0)
            {
                return false; // já cadastrada
            }
            else
            {
                //cadastar
                $sql = $pdo->prepare("INSERT INTO produto (nome_produto, marca_produto, validade_produto, data_compra, preco_produto, preco_venda, quantidade_produto, cpf_funcionario) VALUES (:a, :b, :c, :d, :e, :f, :g, :h)");
                $sql->bindValue(":a",$nome_produto);
                $sql->bindValue(":b",$marca_produto);
                $sql->bindValue(":c",$validade_produto);
                $sql->bindValue(":d",$data_compra);
                $sql->bindValue(":e",$preco_produto);
                $sql->bindValue(":f",$preco_venda);
                $sql->bindValue(":g",$quantidade_produto);
                $sql->bindValue(":h",$cpf_funcionario);
                $sql->execute();
                return true;
            }
        }
        
    }
?>