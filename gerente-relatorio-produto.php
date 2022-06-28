<?php 
session_start(); 
if(!isset($_SESSION['cpf'])){
header('Location: index.php');
exit();
}
?>
<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $bd = "tcc";
    $mysqli = new mysqli($host, $usuario, $senha, $bd);
    if($mysqli->connect_errno){
        echo " falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_errno;
    }
    $consulta = "SELECT * FROM produto";
    $con = $mysqli->query($consulta) or die($mysqli->error);
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gerenciador El Shaday</title>
        <link rel="shortcut icon" href="img/teste.png"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/gerente-relatorio-produto2.css">
        <script src="https://kit.fontawesome.com/34b60060af.js" crossorigin="anonymous"></script>
        <meta name="author" content="Luan Felix e Milena Matos">
        <meta name="description" content="El Shaday um dos melhores armarinhos localizados em Camaçari no estádo da Bahia, com mais de 13 anos no mercado é uma das lojas referencia no Estado!">
        <meta name="keywords" content="el shaday, El Shaday, armarinho, camaçari, bahia, Bahia, loja, mercado, Armarinho El Shaday, armarinho el shaday, novidades, centro">
        <meta name="copyright" content="© 2021 El Shaday" />
        <meta name="robots" content="index,follow">
        <meta name="revisit-after" content="15 days" />
    </head>
    <body>
        <nav class="navbar navbar-light bg-light shadow color">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">Loja - El Shaday</span>
                <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <li class="list-group-item"><a href="gerente-cadastrar-funcionario.php"><i class="bi bi-file-person"></i> Cadastrar Funcionário</a></li>
                            <li class="list-group-item"><a href="gerente-cadastrar-produto.php"><i class="bi bi-file-person"></i> Cadastrar Produto</a></li>
                            <li class="list-group-item"><a href="gerente-relatorio-compra.php"><i class="bi bi-card-checklist"></i> Relatório de Compras</a></li>
                            <li class="list-group-item"><a href="gerente-relatorio-cliente.php"><i class="bi bi-card-checklist"></i> Relatório de Clientes</a></li>
                            <li class="list-group-item"><a href="gerente-relatorio-funcionario.php"><i class="bi bi-card-checklist"></i> Relatório de Funcionário</a></li>
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
                        Relatório de Produto no Estoque
                    </h1>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Código </th>
                            <th scope="col">Nome</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Validade</th>
                            <th scope="col">Data da Compra</th>
                            <th scope="col">Preço do Produto</th>
                            <th scope="col">Preço da venda</th>
                            <th scope="col">Quantidade do produto</th>
                            <th scope="col">CPF do Funcionário</th>
                            </tr>
                        </thead>
                        <?php while($dado = $con->fetch_array()){ ?>
                        <tbody>
                            <tr>
                            <th scope="row"><?php echo $dado["codigo_produto"]; ?></th>
                            <td><?php echo $dado["nome_produto"]; ?></td>
                            <td><?php echo $dado["marca_produto"]; ?></td>
                            <td><?php echo date ("d/m/Y", strtotime($dado["validade_produto"])); ?></td>
                            <td><?php echo date ("d/m/Y", strtotime($dado["data_compra"]));?></td>
                            <td><?php echo $dado["preco_produto"]; ?></td>
                            <td><?php echo $dado["preco_venda"]; ?></td>
                            <td><?php echo $dado["quantidade_produto"]; ?></td>
                            <td><?php echo $dado["cpf_funcionario"]; ?></td>
                            </tr>
                        </tbody>
                        <?php }?>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>