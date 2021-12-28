<?php
session_start();
if ($_SESSION['id'] == null){
    header('Location: login.php');
}

$user = $_SESSION['name'];
$title = 'Dashboard';
$slot = "
<section id='welcome'>
    <div class='container'>
        <h2>Bem-vindo {$user}</h2>
        <br>
        <a href='../app/scripts/users/logout.php' class='btn btn-black'>Sair</a>
        <br><br>
        
            <form action='../app/scripts/users/delete.php' method='post'>
                <button type='submit' class='text-danger'>Deletar conta</button>
            </form>
       
        <br>
    </div>
</section>
";







include '../layouts/app.php';