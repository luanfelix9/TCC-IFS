<?php 
session_start(); 
if(!isset($_SESSION['cpf'])){
header('Location: index.php');
exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
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
        <link rel="stylesheet" href="css/funcionario-cadastrar-cliente.css">
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
                            <li class="list-group-item"><a href="funcionario-nova-compra.php"><i class="bi bi-basket2"></i> Nova Compra</a></li>
                            <li class="list-group-item"><a href="funcionario-cadastrar-cliente.php"><i class="bi bi-file-person"></i> Cadastrar Cliente</a></li>
                            <li class="list-group-item"><a href="funcionario-relatorio-cliente.php"><i class="bi bi-card-checklist"></i> Relatório de Cliente</a></li>
                            <li class="list-group-item"><a href="funcionario-relatorio-compra.php"><i class="bi bi-card-checklist"></i> Relatório de Compras</a></li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a href="logoff.php"></a></button>  
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>
                        Cadastrar Cliente
                    </h1>
                </div>
                <?php
                if(isset($_SESSION['erro_entrada'])){
                ?>
                    <p>Cliente ou opção inválido!</p>
                <?php
                    }
                    unset($_SESSION['erro_entrada']);
                ?>
                <?php
                if(isset($_SESSION['erro_banco_entrada'])){
                ?>
                    <p>Erro de coneção com o Banco de Dados, entre em contato com o suporte!</p>
                <?php
                    }
                    unset($_SESSION['erro_banco_entrada']);
                ?>
                <?php
                    if(isset($_SESSION['erro_vazio'])){
                ?>
                    <p>Preencha todos os campos!</p>
                <?php
                    }
                    unset($_SESSION['erro_vazio']);
                ?>
                <form action="cliente-funcionario.php" method="post" class="row g-3">
                    <div class="col-md-12">
                        <label for="inputAddress" class="form-label funcionario"><h5>* Cliente</h5></label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Nome Completo" name="nome" maxlength="100">
                    </div>
                    <div class="col-md-12">
                        <label for="inputAddress" class="form-label cpf"><h5>* CPF</h5></label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="999.999.999-99" name="cpf" maxlength="11">
                    </div>     
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label senha"><h5>* Email</h5></label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="exemplo@exemplo.com" name="email" maxlength="100">
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress" class="form-label data"><h5>* Data de Nascimento</h5></label>
                        <input type="date" class="form-control" id="inputAddress" placeholder="99/99/9999" name="datanascimento">
                    </div>
                    <div class="col-md-12">
                        <label for="inputAddress" class="form-label endereco"><h5>* Endereço</h5></label>
                        <input type="text" class="form-control" id="inputAddress" name="endereco" maxlength="100">
                    </div> 
                    <div class="col-md-4">
                        <label for="inputAddress" class="form-label cpf"><h5>* CEP</h5></label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="99999-999" name="cep" maxlength="8">
                    </div>
                    <div class="col-md-4">
                        <label for="inputCity" class="form-label cidade"><h5>* Cidade</h5></label>
                        <input type="text" class="form-control" id="inputCity" name="cidade" maxlength="100">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label cidade"><h5>* Estado</h5></label>
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
