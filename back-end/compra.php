<?php
require_once 'classes/cadastrar-nova-compra.php';
$u = new Cadastro;
//verificar se clicou no botão
session_start();
if(isset($_POST["entrada"])){
    $nome = addslashes($_POST['nome']);
    $quantidade = addslashes($_POST['quantidade']); 
    $preco = addslashes($_POST['valor']);
    $cliente = addslashes($_POST['cliente']);
    $valortotal = $preco * $quantidade;
    
    if(!empty($nome) && !empty($quantidade) && !empty($preco)){
        $u->conectar("tcc","localhost","root","");
        if($u->msgErro == "")//se está tudo ok
        {
            if($u->compra($nome, $quantidade, $preco, $valortotal, $cliente)){
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