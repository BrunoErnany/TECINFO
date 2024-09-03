<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Finalizado</title>
</head>
<body>
    <h1>Cadastro Finalizado</h1>
    <h2>Dados do Cadastro:</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recebendo os dados do formulário cadastro1.php
        $nome = htmlspecialchars($_POST['nome']);
        $sexo = htmlspecialchars($_POST['sexo']);
        
        // Recebendo os dados do formulário cadastro2.php
        $senha = htmlspecialchars($_POST['senha']);
        $comentario = htmlspecialchars($_POST['comentario']);
        
        // Imprimindo os dados
        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>Sexo:</strong> $sexo</p>";
        echo "<p><strong>Senha:</strong> $senha</p>";
        echo "<p><strong>Comentário:</strong> $comentario</p>";
    } else {
        echo "<p>Formulário não enviado corretamente.</p>";
    }
    ?>
</body>
</html>