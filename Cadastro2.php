<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Passo 2</title>
</head>
<body>
    <h1>Cadastro - Passo 2</h1>
    <form action="fim_cadastro.php" method="post">
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" minlength="5" required><br><br>
        
        <label for="comentario">Comentário:</label><br>
        <textarea id="comentario" name="comentario" cols="30" rows="6" required></textarea><br><br>

        <input type="submit" value="Finalizar Cadastro">
    </form>
</body>
</html>