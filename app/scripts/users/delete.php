<?php
session_start();

include_once('../../controller/User.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user =  new User($_SESSION['name'], $_SESSION['email'], null);

    $user->delete($_SESSION['id']);
    header('Location: logout.php');
}else{
    header('Location: ../../pages/index.php');
}
