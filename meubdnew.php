<?php
// Configurações do banco de dados
$host = 'localhost'; // Endereço do servidor
$user = 'root';      // Usuário do banco de dados
$pass = '';          // Senha do banco de dados
$dbname = 'meubdnew'; // Nome do banco de dados

try {
    // Conexão com o servidor MySQL usando PDO (sem especificar o banco de dados inicialmente)
    $pdo = new PDO("mysql:host=$host", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Criação do banco de dados
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    $pdo->exec($sql);
    echo "Banco de dados criado com sucesso!<br>";

    // Conectando ao banco de dados recém-criado
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Criação da tabela MINHATABELA
    $sql = "CREATE TABLE IF NOT EXISTS MINHATABELA (
        ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        NOME VARCHAR(30),
        LASTNAME VARCHAR(60) ,
        CPF VARCHAR(11) NOT NULL,
        ENDERECO VARCHAR(60),
        CIDADE VARCHAR(60)
    )";
    $pdo->exec($sql);
    echo "Tabela MINHATABELA criada com sucesso!<br>";

    // Inserção de dados de três usuários
    $sql = "INSERT INTO MINHATABELA (NOME, LASTNAME, CPF, ENDERECO, CIDADE) VALUES
            ('João', 'Silva', '123.456.789-00', 'Rua A, 123', 'São Paulo'),
            ('Maria', 'Oliveira', '987.654.321-00', 'Rua B, 456', 'Rio de Janeiro'),
            ('Pedro', 'Santos', '159.753.486-00', 'Rua C, 789', 'Belo Horizonte')";

    $pdo->exec($sql);
    echo "Dados inseridos com sucesso!<br>";

} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}

// Fecha a conexão
$pdo = null;
?>