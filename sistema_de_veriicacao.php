<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtém as variáveis do formulário
    $convidado = isset($_POST['convidado']) ? $_POST['convidado'] : '';
    $nome_acompanhante = isset($_POST['nome_acompanhante']) ? $_POST['nome_acompanhante'] : '';
    $idade_convidado = isset($_POST['idade_convidado']) ? $_POST['idade_convidado'] : 0; // Supondo que a idade seja um número
    $idade_acompanhante = isset($_POST['idade_acompanhante']) ? $_POST['idade_acompanhante'] : 0; // Supondo que a idade seja um número
}

// Exibe as informações
echo "<html lang='pt-br'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<style>";
echo "body {";
echo "  display: block;";
echo "  justify-content: center;";
echo "  align-items: center;";
echo "  height: 100vh;";
echo "  margin: 0;";
echo "}";
echo "table {";
echo "  border-collapse: collapse;";
echo "  width: 50%;";
echo "  margin: auto;";
echo "}";
echo "th, td {";
echo "  border: 1px solid #dddddd;";
echo "  text-align: left;";
echo "  padding: 8px;";
echo "}";
echo ".container{";
echo "display:flex;";
echo "align-items: center;";
echo "flex-direction: column;";
echo "}";
echo "</style>";
echo "</head>";
echo "<body>";

echo "<div class='container'>";
echo "<h2>Verificação de Entrada</h2>";
echo "<p>Você só pode entrar se tiver mais do que 18 anos ou se estiver acompanhado com um responsável com idade acima de 18 anos.</p>";
echo "</div>";
echo "<table>";
echo "<tr><th>Informações</th><th>Resultado</th></tr>";

if ($idade_convidado >= 18) {
    echo "<tr><td>Você se chama</td><td>$convidado e tem $idade_convidado anos.</td></tr>";
    echo "<tr><td style='color:green'> Entrada permitida na festa. </td><td></td></tr>";
} elseif ($idade_convidado <= 17 && $idade_acompanhante >= 18) {
    echo "<tr><td>result etapa:</td><td></td></tr>";
    echo "<tr><td>Você se chama</td><td>$convidado e tem $idade_convidado anos, está acompanhado por $nome_acompanhante.</td></tr>";
    echo "<tr><td></td><td> Que tem $idade_acompanhante anos de idade.</td></tr>";
    echo "<tr><td style='color:green'> Entrada permitida na festa.</td><td></td></tr>";
} else {
    echo "<tr><td>Você não pode entrar, pois é menor de 18 anos e não está acompanhado por um responsável maior de idade.</td><td></td></tr>";
}

echo "</table>";
echo "</body>";
echo "</html>";
