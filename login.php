<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!--Titulo site-->
    <title>Login do Gerenciador El Shaday</title>
    <!--Links-->
    <link rel="stylesheet" href="css/index.css">
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