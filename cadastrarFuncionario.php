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
    <!--Metas-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Luan Felix e Milena Matos">
    <meta name="description" content="El Shaday um dos melhores armarinhos localizados em Camaçari no estádo da Bahia, com mais de 13 anos no mercado é uma das lojas referencia no Estado!">
    <meta name="keywords" content="el shaday, El Shaday, armarinho, camaçari, bahia, Bahia, loja, mercado, Armarinho El Shaday, armarinho el shaday, novidades, centro">
    <meta name="copyright" content="© 2021 El Shaday" />
    <meta name="robots" content="index,follow">
    <meta name="revisit-after" content="15 days" />
    <!--Titulo site-->
    <title>Cadastrar Funcionário Login do Gerenciador El Shaday</title>
    <!--Links-->
    <link rel="shortcut icon" href="img/Index/logo-navegador.png" />
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/node_modules/sweetalert2/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="css/cadastrarFuncionario.css">
    <!--Scripts-->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="https://kit.fontawesome.com/34b60060af.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-light bg-light shadow color">
        <div class="container-fluid">
            <img src="img/navBar/logoNav.png" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#navOpcao">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- Modal -->
    <div class="modal fade" id="navOpcao" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Menu do Gerenciador</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="gerente-nova-compra.php"><i class="bi bi-basket2"></i> Nova Compra</a></li>
                        <li class="list-group-item"><a href="gerente-cadastrar-cliente.php"><i class="bi bi-file-person"></i> Cadastrar Cliente</a></li>
                        <?php if ($cargo == 'Gerente') { ?><li class="list-group-item"><a href="cadastrarFuncionario.php"><i class="bi bi-file-person"></i> Cadastrar Funcionário</a></li><?php } ?>
                        <li class="list-group-item"><a href="gerente-cadastrar-produto.php"><i class="bi bi-file-person"></i> Cadastrar Produto</a></li>
                        <li class="list-group-item"><a href="gerente-relatorio-compra.php"><i class="bi bi-card-checklist"></i> Relatório de Compras</a></li>
                        <li class="list-group-item"><a href="gerente-relatorio-cliente.php"><i class="bi bi-card-checklist"></i> Relatório de Clientes</a></li>
                        <?php if ($cargo == 'Gerente') { ?><li class="list-group-item"><a href="gerente-relatorio-funcionario.php"><i class="bi bi-card-checklist"></i> Relatório de Funcionário</a></li><?php } ?>
                        <li class="list-group-item"><a href="gerente-relatorio-produto.php"><i class="bi bi-card-checklist"></i> Relatório de Produtos</a></li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a href="logoff.php">Logoff</a></button>
                </div>
            </div>
        </div>
    </div>
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