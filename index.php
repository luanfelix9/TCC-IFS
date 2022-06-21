<?php session_start(); ?>
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
    <title>Login do Gerenciador El Shaday</title>
    <!--Links-->
    <link rel="shortcut icon" href="img/Index/logo-navegador.png" />
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/node_modules/sweetalert2/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="css/index.css">
    <!--Scripts-->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="https://kit.fontawesome.com/34b60060af.js" crossorigin="anonymous"></script>
</head>

<body>
    <!--Particulas-->
    <div id="particles-js"></div>
    <main>
        <?php
        if (isset($_SESSION['usuarioInvalido'])) {
        ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Tente Novamente!',
                    text: 'Login ou Senha Inválidos',
                })
            </script>
        <?php
        }
        unset($_SESSION['usuarioInvalido']);
        ?>
        <?php
        if (isset($_SESSION['campoVazio'])) {
        ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Tente Novamente!',
                    text: 'Campo obrigatório não preenchido',
                })
            </script>
        <?php
        }
        unset($_SESSION['campoVazio']);
        ?>
        <div class="container">
            <h2>Login</h2>
            <form action="back-end/login.php" method="post">
                <div class="input-field">
                    <input type="email" id="email" placeholder="Digite seu Email" name="email" maxlength="50">
                </div>
                <br>
                <div class="input-field">
                    <input type="password" id="senha" placeholder="Digite sua Senha" name="senha" maxlength="10">
                </div>
                <input type="submit" value="Entrar" name="entrar">
            </form>
            <div class="footer">
                <span>
                    <p>Esqueceu sua senha? <br>Entre em contato com o Suporte pelo email <br>luan.fdejesus@gmail.com</p>
                </span>
            </div>
        </div>
    </main>
    <script src="js/index/particles.min.js"></script>
    <script src="js/index/app-login.js"></script>
</body>

</html>