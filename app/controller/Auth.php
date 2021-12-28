<?php

require_once('Main.php');

class Auth extends Main
{
    private $password;
    private $email;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = md5($password);
    }

    public function check_if_user_exists($type)
    {
        switch ($type) {
            case 'login':
                $query = "SELECT COUNT(id) from users WHERE email='{$this->email}' AND password='{$this->password}'";
                break;
            case 'register':
                $query = "SELECT COUNT(id) from users WHERE email='{$this->email}'";
                break;
            default:
                echo 'Erro ao processar a requisição!';
                break;
        }
        

        $result = $this->dbexec_get($query)[0]['COUNT(id)'];

        if ($result == '1'){
            $user = $this->dbexec_get("SELECT id, email, name FROM users WHERE email='{$this->email}'")[0];
            $_SESSION['id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['name'] = $user['name'];
            header('Location: ../../../pages/dashboard.php');
        }else{
            $_SESSION['message'] = 'Usuário ou senha inválido(s)!';
            header('Location: ../../../pages/login.php');
        }
        
    }
}
