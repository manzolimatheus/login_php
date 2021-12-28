<?php
session_start();
class Main
{
    // Informações do banco de dados
    public $host = 'localhost';
    public $admname = 'root';
    public $admpassword = '';
    public $dbname = 'crud_php';

    public function dbexec_post($query)
    {
        try {
            $conexao = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->admname, $this->admpassword);
            $conexao->exec($query);

            echo 'Dados processados com sucesso!';
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function dbexec_get($query)
    {
        try {
            $conexao = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->admname, $this->admpassword);
            $stmt = $conexao->prepare($query);
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $result;

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
