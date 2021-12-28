<?php

// Informações do banco de dados
$host = 'localhost';
$name = 'root';
$password = '';
$dbname = 'crud_php';

// Iniciando a conexão com o banco de dados

try {
    $conexao = new PDO("mysql:host={$host};dbname={$dbname}", $name, $password);
    echo 'Conectado!';

    //Criando a table
    $table = '
    CREATE TABLE IF NOT EXISTS users (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL
    );
    ';

    //Executando a query
    $conexao->exec($table);

    echo 'Tabelas criadas com sucesso!';
} catch (\Throwable $th) {
    throw new Exception("Erro ao processar tarefa! - {$th}", 500);
}