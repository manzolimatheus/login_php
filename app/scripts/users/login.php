<?php
include_once('../../controller/Auth.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $auth = new Auth($_POST['email'], $_POST['password']);

    $auth->check_if_user_exists('login');
} else {
    header('Location: ../../../pages/index.php');
}
