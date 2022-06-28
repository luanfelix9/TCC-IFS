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
        public function produto($cpf, $nome_funcionario, $email_funcionario, $senha, $data_admissao, $data_demissao, $endereco, $cep, $cidade, $estado, $cargo){
            global $pdo;
            //verificar se já existe 
            $sql = $pdo->prepare("SELECT cpf FROM funcionario WHERE cpf = :a");
            $sql->bindValue(":a",$cpf);
            $sql->execute();
            if($sql->rowCount() > 0)
            {
                return false; // já cadastrada
            }
            else
            {
                //cadastar
                $sql = $pdo->prepare("INSERT INTO funcionario (cpf, nome_funcionario, email_funcionario, senha, data_admissao, data_demissao, endereco, cep, cidade, estado, cargo) VALUES (:a, :b, :c, :d, :e, :f, :g, :h, :i, :j, :k)");
                $sql->bindValue(":a",$cpf);
                $sql->bindValue(":b",$nome_funcionario);
                $sql->bindValue(":c",$email_funcionario);
                $sql->bindValue(":d",$senha);
                $sql->bindValue(":e",$data_admissao);
                $sql->bindValue(":f",$data_demissao);
                $sql->bindValue(":g",$endereco);
                $sql->bindValue(":h",$cep);
                $sql->bindValue(":i",$cidade);
                $sql->bindValue(":j",$estado);
                $sql->bindValue(":k",$cargo);
                $sql->execute();
                return true;
            }
        }
        
    }
?>