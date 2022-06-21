<?php
require_once 'classes/cadastrar-produto.php';
$u = new Cadastro;
//verificar se clicou no botão
session_start();
if(isset($_POST["entrada"])){
    $nome_produto = addslashes($_POST['nome']); 
    $marca_produto = addslashes($_POST['marca']);
    $validade_produto = addslashes($_POST['validade']);
    $data_compra = addslashes($_POST['compra']);
    $preco_produto = addslashes($_POST['vcompra']);
    $preco_venda = addslashes($_POST['vvenda']);
    $quantidade_produto = addslashes($_POST['qcompra']);
    $cpf_funcionario == $dado['cpf'];
    if(!empty($nome_produto) && !empty($marca_produto) && !empty($validade_produto) && !empty($data_compra) && !empty($preco_produto) && !empty($preco_venda) && !empty($quantidade_produto)){
        $u->conectar("tcc","localhost","root","");
        if($u->msgErro == "")//se está tudo ok
        {
            if($u->produto($nome_produto, $marca_produto, $validade_produto, $data_compra, $preco_produto, $preco_venda, $quantidade_produto, $cpf_funcionario)){
                $_SESSION['cadastro_funcionario'] = true;
                header('Location: gerente-cadastrar-produto.php');
                exit();
            }
            else{
                $_SESSION['erro_entrada'] = true;
                header('Location: gerente-cadastrar-produto.php');
                exit();
            }
        }
        else{
            $_SESSION['erro_banco_entrada'] = true;
            header('Location: gerente-cadastrar-produto.php');
            exit();
        }
   }else{
      $_SESSION['erro_vazio'] = true;
      header('Location: gerente-cadastrar-produto.php');
      exit();
   }
}
?>