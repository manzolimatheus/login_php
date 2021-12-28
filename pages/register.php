<?php
session_start();

if (isset($_SESSION['id']) != null){
    header('Location: dashboard.php');
}


$title = 'Cadastrar-se';

$slot = '
<section id="form_register">
    <div class="container">
        <form action="../app/scripts/users/register.php" method="post">
            <div id="name">
                <label for="name">Nome completo</label><br>
                <input type="text" name="name" id="name" placeholder="Digite seu nome" class="input" required>
            </div>
            <br>
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
            <button type="submit" class="btn btn-success">Cadastrar-se</button>
            <a href="../pages/login.php">Já tem uma conta? Entrar</a>
        </form>
       
    </div>

</section>
';

include '../layouts/app.php';
