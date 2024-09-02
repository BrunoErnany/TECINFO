<!DOCTYPE HTML>
<html lang="pt-br">
<body>
    <!-- Formulário para coleta de informações -->
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Nome: <input type="text" name="nome"><br><br>
        E-mail: <input type="email" name="email"><br><br>
        Senha: <input type="password" name="senha"><br><br>
        Estado:
        <select name="estado">
            <option value="AC">Acre (AC)</option>
            <option value="AL">Alagoas (AL)</option>
            <option value="AP">Amapá (AP)</option>
            <option value="AM">Amazonas (AM)</option>
            <option value="BA">Bahia (BA)</option>
            <option value="CE">Ceará (CE)</option>
            <option value="DF">Distrito Federal (DF)</option>
            <option value="ES">Espírito Santo (ES)</option>
            <option value="GO">Goiás (GO)</option>
            <option value="MA">Maranhão (MA)</option>
            <option value="MT">Mato Grosso (MT)</option>
            <option value="MS">Mato Grosso do Sul (MS)</option>
            <option value="MG">Minas Gerais (MG)</option>
            <option value="PA">Pará (PA)</option>
            <option value="PB">Paraíba (PB)</option>
            <option value="PR">Paraná (PR)</option>
            <option value="PE">Pernambuco (PE)</option>
            <option value="PI">Piauí (PI)</option>
            <option value="RJ">Rio de Janeiro (RJ)</option>
            <option value="RN">Rio Grande do Norte (RN)</option>
            <option value="RS">Rio Grande do Sul (RS)</option>
            <option value="RO">Rondônia (RO)</option>
            <option value="RR">Roraima (RR)</option>
            <option value="SC">Santa Catarina (SC)</option>
            <option value="SP">São Paulo (SP)</option>
            <option value="SE">Sergipe (SE)</option>
            <option value="TO">Tocantins (TO)</option>
        </select><br><br>

        Envie pra gente sua sugestão ou crítica sobre o site:<br>
        <textarea name="sugestao" rows="5" cols="40"></textarea><br><br>

        Marque o(s) laboratório(s) que você deseja receber informações:<br>
        <input type="checkbox" name="labs[]" value="LAFES"> Laboratório de Ferramentas para Desenvolvimento de Sistemas - LAFES<br>
        <input type="checkbox" name="labs[]" value="LGR"> Laboratório de Gestão de Redes - LGR<br>
        <input type="checkbox" name="labs[]" value="LIS"> Laboratório de Integração de Sistemas - LIS<br>
        <input type="checkbox" name="labs[]" value="LQS"> Laboratório de Qualidade de Software - LQS<br><br>

        Você aceita receber outras informações sobre cursos de extensão da Unisinos?<br>
        <input type="radio" name="info_cursos" value="sim"> Sim
        <input type="radio" name="info_cursos" value="nao"> Não<br><br>

        <input type="submit" value="Enviar os dados acima">
        <input type="reset" value="Limpar">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Coletando valores do formulário
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $estado = $_POST['estado'];
            $sugestao = $_POST['sugestao'];
            $labs = isset($_POST['labs']) ? $_POST['labs'] : [];
            $info_cursos = isset($_POST['info_cursos']) ? $_POST['info_cursos'] : '';

            // Verificação dos campos
            if (empty($nome)) {
                echo "O campo Nome está vazio.<br>";
            } else {
                echo "Nome: $nome<br>";
            }

            if (empty($email)) {
                echo "O campo E-mail está vazio.<br>";
            } else {
                echo "E-mail: $email<br>";
            }

            if (empty($senha)) {
                echo "O campo Senha está vazio.<br>";
            } else {
                echo "Senha: $senha<br>";
            }

            echo "Estado: $estado<br>";

            if (empty($sugestao)) {
                echo "O campo Sugestão está vazio.<br>";
            } else {
                echo "Sugestão/Crítica: $sugestao<br>";
            }

            echo "Laboratórios selecionados: ";
            if (!empty($labs)) {
                echo "<ul>";
                foreach ($labs as $lab) {
                    echo "<li>" . htmlspecialchars($lab) . "</li>";
                }
                echo "</ul>";
            } else {
                echo "Nenhum laboratório selecionado.<br>";
            }

            if (empty($info_cursos)) {
                echo "Você não selecionou se deseja receber informações sobre cursos.<br>";
            } else {
                echo "Receber informações sobre cursos: $info_cursos<br>";
            }
        }
    ?>
</body>
</html>