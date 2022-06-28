<?php
    Class login {
        private $pdo;
        public $msgErro = "";
        public function conectar($nome, $host, $usuario, $senha)
        {
            global $pdo;
            global $msgErro;
            try{
                $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
            } catch (PDOException $e){
                $msgErro = $e->getMessage();
            }
        }
        public function logar($email_funcionario, $senha)
        {
            global $pdo;
            //verificar email e senha
            $sql = $pdo->prepare("SELECT cpf FROM funcionario WHERE email_funcionario = :c AND senha = :d ");
            $sql->bindValue(":c",$email_funcionario);
            $sql->bindValue(":d",$senha);
            $sql->execute();
            if($sql->rowCount() > 0)
            {
               //entrar no sistema
               $dado = $sql->fetch();
               session_start();
               $_SESSION['cpf'] = $dado['cpf'];
               return true; //entrou no sistema
            }
            else
            {
                return false;// não foi possivel logar
            }
        }
    }
?>