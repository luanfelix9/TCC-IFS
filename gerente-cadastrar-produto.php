<?php 
session_start(); 
if(!isset($_SESSION['cpf'])){
header('Location: index.php');
exit();
}
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
        <link rel="stylesheet" href="css/gerente-cadastrar-produto1.css">
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
                        Cadastrar Produto no Estoque
                    </h1>
                    <?php
                        if(isset($_SESSION['cadastro_funcionario'])){
                    ?>
                        <p>Produto Cadastrado com Sucesso !</p>
                    <?php
                        }
                        unset($_SESSION['cadastro_funcionario']);
                    ?>
                    <?php
                        if(isset($_SESSION['erro_entrada'])){
                    ?>
                        <p>Não Foi Possível Cadastrar o Produto, Tente Novamente Mais Tarde!</p>
                    <?php
                        }
                        unset($_SESSION['erro_entrada']);
                    ?>
                    <?php
                        if(isset($_SESSION['erro_banco_entrada'])){
                    ?>
                        <p>Não foi possível conectar com o banco de dados, tente novamente mais tarde!</p>
                    <?php
                        }
                        unset($_SESSION['erro_banco_entrada']);
                    ?>
                    <?php
                        if(isset($_SESSION['erro_vazio'])){
                    ?>
                        <p>Você Não Preencheu Todos Os Campos, Por Favor Preencha E Tente Novamente!</p>
                    <?php
                        }
                        unset($_SESSION['erro_vazio']);
                    ?>
                </div>
                <form action="produto.php" method="post" class="row g-3">
                    <div class="col-md-6">
                        <label for="inputAddress" class="form-label funcionario"><h5>* Nome do Produto</h5></label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Nome" name="nome" maxlength="100">
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress" class="form-label funcionario"><h5>* Marca do Produto</h5></label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Marca" name="marca" maxlength="30">
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress" class="form-label data"><h5>* Data da Compra</h5></label>
                        <input type="date" class="form-control" id="inputAddress" placeholder="99/99/9999" name="compra">
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress2" class="form-label data"><h5>Data de Validade</h5></label>
                        <input type="date" class="form-control" id="inputAddress2" placeholder="99/99/9999" name="validade">
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress" class="form-label data"><h5>* Valor da Compra</h5></label>
                        <input type="number" min="0" value="0" step=".01" class="form-control" id="inputAddress" placeholder="R$" name="vcompra">
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress2" class="form-label data"><h5>* Valor unitário do produto</h5></label>
                        <input type="number" min="0" value="0" step=".01" class="form-control" id="inputAddress2" placeholder="R$" name="vvenda">
                    </div>      
                    <div class="col-md-6">
                        <label for="inputAddress2" class="form-label senha"><h5>* Quantidade Comprada</h5></label>
                        <input type="number" min="0" value="0" step=".01" class="form-control" id="inputAddress2" name="qcompra">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" name="entrada">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>