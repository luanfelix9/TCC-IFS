<?php
require_once 'classes/comprafinal.php';
$u = new Cadastro;
//verificar se clicou no botão
session_start();
if(isset($_POST["entrada2"])){
    $descricao_venda = "";
    $data_venda= ""; 
    $nomecliente = "";
    $vvalorfinal = "";
    if(!empty($descricao_venda) && !empty($data_venda) && !empty($nomecliente) && !empty($vvalorfinal)){
        $u->conectar("tcc","localhost","root","");
        if($u->msgErro == "")//se está tudo ok
        {
            if($u->compra($descricao_venda, $data_venda, $nomecliente,$vvalorfinal)){
                $_SESSION['cadastro_funcionario'] = true;
                header('Location: gerente-nova-compra.php');
                exit();
            }
            else{
                $_SESSION['erro_entrada'] = true;
                header('Location: gerente-nova-compra.php');
                exit();
            }
        }
        else{
            $_SESSION['erro_banco_entrada'] = true;
            header('Location: gerente-nova-compra.php');
            exit();
        }
   }else{
      $_SESSION['erro_vazio'] = true;
      header('Location: gerente-nova-compra.php');
      exit();
   }
}
?>