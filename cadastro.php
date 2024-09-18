<?php
require_once 'conexao5.php';
if(isset($_POST['cadastrar'])) {
    $nome = $_POST['nome'];
    $email = $_pOST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    try{
        $query = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':nome',$nome);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':senha',$senha);
        if ($stmt->execute()){
            echo "usuario cadastro com sucesso";
        }
        else{
         echo "Erro ao cadastro usuario.";   
        }
    }catch (PDOException $e){
        echo "Erro: " . $e->getMessage();
    }
}
?>
<DOCTYPE HTML>
<html>
    <head>
        <title>Cadastro de usuario</title>
    </head>    
    <body>
        <h1>CADASTRO DE NOVO USUARIO</h1>
         <form>
        <label for = "nome">Nome:</label>
        <input type ="text" id="nome" name = "name" required><br><br>
        
        <label for ="email">E-mail:</label>
        <input type ="text" id = "email" name ="email" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>
        <input type="submit" name="cadastrar" value="cadsatrar">
        <button type="reset" class="btn-limpar">limpar</button>
        <button type="button" class="btn-voltar" onclick="window.location.href='index.html'">voltar</button>
        </form> 
    </body>
</html>