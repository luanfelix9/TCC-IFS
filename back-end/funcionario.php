<?php
require_once 'classes/cadastrar-funcionario.php';
$u = new Cadastro;
//verificar se clicou no botão
session_start();
if(isset($_POST["entrada"])){
    $cpf = addslashes($_POST['cpf']);
    $nome_funcionario = addslashes($_POST['nome']); 
    $email_funcionario = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $data_admissao = addslashes($_POST['admissao']);
    $data_demissao = addslashes($_POST['demissao']);
    $endereco = addslashes($_POST['endereco']);
    $cep = addslashes($_POST['cep']);
    $cidade = addslashes($_POST['cidade']);
    $estado = addslashes($_POST['estado']);
    $cargo = addslashes($_POST['cargo']);
    if(!empty($cpf) && !empty($nome_funcionario) && !empty($email_funcionario) && !empty($senha) && !empty($data_admissao) && !empty($endereco) && !empty($cep) && !empty($cidade) && !empty($estado) && !empty($cargo)){
        $u->conectar("tcc","localhost","root","");
        if($u->msgErro == "")//se está tudo ok
        {
            if($u->funcionario($cpf, $nome_funcionario, $email_funcionario, $senha, $data_admissao, $data_demissao, $endereco, $cep, $cidade, $estado, $cargo)){
                $_SESSION['cadastro_funcionario'] = true;
                header('Location: gerente-cadastrar-funcionario.php');
                exit();
            }
            else{
                $_SESSION['erro_entrada'] = true;
                header('Location: gerente-cadastrar-funcionario.php');
                exit();
            }
        }
        else{
            $_SESSION['erro_banco_entrada'] = true;
            header('Location: gerente-cadastrar-funcionario.php');
            exit();
        }
   }else{
      $_SESSION['erro_vazio'] = true;
      header('Location: gerente-cadastrar-funcionario.php');
      exit();
   }
}
?>