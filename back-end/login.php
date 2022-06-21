<?php
require_once '../classes/login.php';
$u = new login;
//verificar se clicou no botão
session_start();
if (isset($_POST["entrar"])) {
    $email_funcionario = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    //teste do vazio
    if (!empty($email_funcionario) && !empty($senha)) {
        $u->conectar("tcc", "localhost", "root", "");
        if ($u->logar($email_funcionario, $senha)) {
            header('Location: ../gerente-nova-compra.php');
        } else {
            $_SESSION['usuarioInvalido'] = true;
            header('Location: ../index.php');
        }
    } else if (empty($email_funcionario) || empty($senha)){
        $_SESSION['campoVazio'] = true;
        header('Location: ../index.php');
    }
}
