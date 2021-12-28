<?php

require_once('Main.php');
include_once('Auth.php');

class User extends Main
{
    // Propriedades
    private $name;
    private $email;
    private $password;

    //Construtor
    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = md5($password);
    }

    //Métodos
    public function save()
    {
        $check = $this->dbexec_get("SELECT COUNT(id) FROM users WHERE email='{$this->email}'")[0]['COUNT(id)'];

        if ($check ===  '1') {
            $_SESSION['message'] = 'Este e-mail já foi registrado por outro usuário!';
            header('Location: ../../../pages/register.php');
        } else {
            //Salvando no banco de dados
            $query = "INSERT INTO users(name, email, password) VALUES ('{$this->name}', '{$this->email}', '{$this->password}')";

            $this->dbexec_post($query);
            $auth = new Auth($this->email, $this->password);
            $auth->check_if_user_exists('register');
            
        }
    }

    public function update($id, $name, $email, $password)
    {
        $query = "UPDATE user SET name='{$name}', email='{$email}', password='{$password}' WHERE id={$id}";

        $this->dbexec_post($query);
    }

    public function delete($id)
    {
        $query = "DELETE FROM users WHERE id={$id}";

        $this->dbexec_post($query);
    }
}
