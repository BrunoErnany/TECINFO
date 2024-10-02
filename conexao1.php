<?php
$host ='localhost';
$dbname ='registro';
$username = 'root'; // ou outro nome de usuário
$password = '';     // senha vazia se nào configurada no XAMPP

try (
    $pdo  = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
) catch (PDOException $e) (
    die("Erro na conexão: " . $e->getMessage());
)    
?>