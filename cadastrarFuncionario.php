<?php
session_start();
$cpf = $_SESSION['cpf'];
if (!isset($_SESSION['cpf'])) {
    header('Location: ../index.php');
    exit();
}
$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "tcc";
$mysqli = new mysqli($host, $usuario, $senha, $bd);
if ($mysqli->connect_errno) {
    echo " falha na conexão: (" . $mysqli->connect_errno . ") " . $mysqli->connect_errno;
}
$consulta = "SELECT cargo,nome_funcionario FROM funcionario WHERE cpf = $cpf";
$con = $mysqli->query($consulta) or die($mysqli->error);
while ($dado = $con->fetch_array()) {
    $cargo = $dado["cargo"];
    $nome =  $dado["nome_funcionario"];
};
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php require('basic/head.php'); ?>
    <!--Titulo site-->
    <title>Gerenciador El Shaday</title>
    <link rel="stylesheet" href="css/cadastrarFuncionario.css">
</head>

<body>
    <?php require('basic/navBar.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>
                    Cadastrar Funcionário <?php echo "$cpf e $nome e $cargo " ?>
                </h1>
                <?php
                if (isset($_SESSION['cadastro_funcionario'])) {
                ?>
                    <p>Parabéns Novo Funcionário Cadastrado !</p>
                <?php
                }
                unset($_SESSION['cadastro_funcionario']);
                ?>
                <?php
                if (isset($_SESSION['erro_entrada'])) {
                ?>
                    <p>Não Foi Possível Cadastrar o Novo Funcionário, Tente Novamente Mais Tarde!</p>
                <?php
                }
                unset($_SESSION['erro_entrada']);
                ?>
                <?php
                if (isset($_SESSION['erro_banco_entrada'])) {
                ?>
                    <p>Não foi possível conectar com o banco de dados, tente novamente mais tarde!</p>
                <?php
                }
                unset($_SESSION['erro_banco_entrada']);
                ?>
                <?php
                if (isset($_SESSION['erro_vazio'])) {
                ?>
                    <p>Você Não Preencheu Todos Os Campos, Por Favor Preencha E Tente Novamente!</p>
                <?php
                }
                unset($_SESSION['erro_vazio']);
                ?>
            </div>
            <form action="funcionario.php" method="post" class="row g-3">
                <div class="col-md-12">
                    <label for="inputAddress" class="form-label funcionario">
                        <h5>* Funcionário</h5>
                    </label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Nome Completo" name="nome" maxlength="100">
                </div>
                <div class="col-md-6">
                    <label for="inputAddress" class="form-label cpf">
                        <h5>* CPF</h5>
                    </label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="999.999.999-99" name="cpf" maxlength="11">
                </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label cidade">
                        <h5>* Cargo</h5>
                    </label>
                    <select id="inputState" class="form-select" name="cargo">
                        <option selected>Funcionário</option>
                        <option>Gerente</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label senha">
                        <h5>* Email</h5>
                    </label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="exemplo@exemplo.com" name="email" maxlength="100">
                </div>
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label senha">
                        <h5>* Senha</h5>
                    </label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Preencha o campo com até oito dígitos" name="senha" maxlength="8">
                </div>
                <div class="col-md-6">
                    <label for="inputAddress" class="form-label data">
                        <h5>* Data de Admição</h5>
                    </label>
                    <input type="date" class="form-control" id="inputAddress" placeholder="99/99/9999" name="admissao">
                </div>
                <div class="col-md-6">
                    <label for="inputAddress2" class="form-label data">
                        <h5>Data de Demição</h5>
                    </label>
                    <input type="date" class="form-control" id="inputAddress2" placeholder="99/99/9999" name="demissao">
                </div>
                <div class="col-md-12">
                    <label for="inputAddress" class="form-label endereco">
                        <h5>* Endereço</h5>
                    </label>
                    <input type="text" class="form-control" id="inputAddress" name="endereco" maxlength="50">
                </div>
                <div class="col-md-4">
                    <label for="inputAddress" class="form-label cpf">
                        <h5>* CEP</h5>
                    </label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="99999-999" name="cep" maxlength="8">
                </div>
                <div class="col-md-4">
                    <label for="inputCity" class="form-label cidade">
                        <h5>* Cidade</h5>
                    </label>
                    <input type="text" class="form-control" id="inputCity" name="cidade" maxlength="50">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label cidade">
                        <h5>* Estado</h5>
                    </label>
                    <select id="inputState" class="form-select" name="estado">
                        <option selected>Acre</option>
                        <option>Alagoas</option>
                        <option>Amapá</option>
                        <option>Amazonas</option>
                        <option>Bahia</option>
                        <option>Ceará</option>
                        <option>Espírito Santo</option>
                        <option>Goiás</option>
                        <option>Mato Grosso</option>
                        <option>Mato Grosso do Sul</option>
                        <option>Minas Gerais</option>
                        <option>Pará</option>
                        <option>Paraíba</option>
                        <option>Paraná</option>
                        <option>Pernambuco</option>
                        <option>Piauí</option>
                        <option>Rio de Janeiro</option>
                        <option>Rio Grande do Norte</option>
                        <option>Rio Grande do Sul</option>
                        <option>Rondônia</option>
                        <option>Roraima</option>
                        <option>Santa Catarina</option>
                        <option>São Paulo</option>
                        <option>Sergipe</option>
                        <option>Tocantins</option>
                        <option>Distrito Federal</option>
                    </select>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="entrada">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>