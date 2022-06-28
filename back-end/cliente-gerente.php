<?php
require_once 'classes/cadastrar-cliente.php';
$u = new Cadastro;
//verificar se clicou no botão
session_start();
if(isset($_POST["entrada"])){
    $nome_cliente = addslashes($_POST['nome']);
    $data_cliente = addslashes($_POST['datanascimento']); 
    $email_cliente = addslashes($_POST['email']);
    $cpf_cliente = addslashes($_POST['cpf']);
    $endereco = addslashes($_POST['endereco']);
    $cep = addslashes($_POST['cep']);
    $cidade = addslashes($_POST['cidade']);
    $estado = addslashes($_POST['estado']);
    if(!empty($nome_cliente) && !empty($data_cliente) && !empty($email_cliente) && !empty($cpf_cliente) && !empty($endereco) && !empty($cep) && !empty($cidade) && !empty($estado)){
        $u->conectar("tcc","localhost","root","");
        if($u->msgErro == "")//se está tudo ok
        {
            if($u->cliente($nome_cliente, $data_cliente, $email_cliente, $cpf_cliente, $endereco, $cep, $cidade, $estado)){
                $_SESSION['cadastro_funcionario'] = true;
                header('Location: gerente-cadastrar-cliente.php');
                exit();
            }
            else{
                $_SESSION['erro_entrada'] = true;
                header('Location: gerente-cadastrar-cliente.php');
                exit();
            }
        }
        else{
            $_SESSION['erro_banco_entrada'] = true;
            header('Location: gerente-cadastrar-cliente.php');
            exit();
        }
   }else{
      $_SESSION['erro_vazio'] = true;
      header('Location: gerente-cadastrar-cliente.php');
      exit();
   }
}
?>