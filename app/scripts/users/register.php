<?php

include_once('../../controller/User.php');
include_once('../../controller/Auth.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $user = new User($_POST['name'], $_POST['email'], $_POST['password']);
    $user->save();
}else{
    header('Location: ../../../pages/index.php');
}

    



