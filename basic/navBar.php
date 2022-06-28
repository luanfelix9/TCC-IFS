<header>
    <nav class="navbar navbar-light bg-light shadow color">
        <div class="container-fluid">
            <img src="img/navBar/logoNav.png" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#navOpcao">
                <?php echo $cargo,' ';?><span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- Modal -->
    <div class="modal fade" id="navOpcao" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="img/navBar/logo-navegador.png" alt="">
                    <h6 class="modal-title" id="exampleModalLabel">Menu do Gerenciador</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group list-group-flush">
                        <a href="gerente-nova-compra.php"><li class="list-group-item"><i class="bi bi-basket2"></i> Nova Compra</li></a>
                        <a href="gerente-cadastrar-cliente.php"><li class="list-group-item"><i class="bi bi-file-person"></i> Cadastrar Cliente</li></a>
                        <?php if ($cargo == 'Gerente') { ?><a href="cadastrarFuncionario.php"><li class="list-group-item"><i class="bi bi-file-person"></i> Cadastrar Colaborador</li></a><?php } ?>
                        <a href="gerente-cadastrar-produto.php"><li class="list-group-item"><i class="bi bi-file-person"></i> Cadastrar Produto</li></a>
                        <a href="gerente-relatorio-compra.php"><li class="list-group-item"><i class="bi bi-card-checklist"></i> Relatório de Compras</li></a>
                        <a href="gerente-relatorio-cliente.php"><li class="list-group-item"><i class="bi bi-card-checklist"></i> Relatório de Clientes</li></a>
                        <?php if ($cargo == 'Gerente') { ?><a href="gerente-relatorio-funcionario.php"><li class="list-group-item"><i class="bi bi-card-checklist"></i> Relatório de Colaboradores</li></a><?php } ?>
                        <a href="gerente-relatorio-produto.php"><li class="list-group-item"><i class="bi bi-card-checklist"></i> Relatório de Produtos</li></a>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a href="logoff.php">Logoff</a></button>
                </div>
            </div>
        </div>
    </div>
</header>