<?php
session_start();

if (isset($_SESSION['id']) != null){
    header('Location: dashboard.php');
}

$title = 'Login';

$slot = '
<section id="form_login">
    <div class="container">
        <form action="../app/scripts/users/login.php" method="post">
            <div id="email">
                <label for="email">E-mail</label><br>
                <input type="email" name="email" id="email" placeholder="Digite seu e-mail" class="input" required>
            </div>
            <br>
            <div id="password">
                <label for="password">Senha</label><br>
                <input type="password" name="password" id="password" placeholder="Digite sua senha" class="input" minlength="8" required>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Entrar</button>
            <a href="../pages/register.php">Não tem uma conta? Cadastrar-se</a>
        </form>
    </div>

</section>
';


include '../layouts/app.php';
