<?php
session_start();

if (isset($_SESSION['id']) != null){
    header('Location: dashboard.php');
}



$title = 'Início';
$slot = '
<section id="welcome">
    <div class="container">
        <h2>Bem-vindo visitante!</h2>
        <br>
        <a href="../pages/login.php" class="btn btn-success">Entrar</a>
        <a href="../pages/register.php" class="btn btn-black">Cadastrar-se</a>
        <br><br>
    </div>
</section>
';







include '../layouts/app.php';