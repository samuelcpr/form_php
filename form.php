<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/form.css">
    <title>Formulário de Entrada</title>
    
</head>

<body>



    <div id="containerform">
        <div>
            <p>Você só pode entrar se tiver mais do que 18 anos ou se estiver </br> acompanhado com um responsável com idade acima de 18 anos.</p>
        </div>
        <form action="http://localhost:8000/sistema_de_veriicacao.php" method="POST">
            <label for="convidado">Nome do convidado:</label>
            <input type="text" id="convidado" name="convidado" required>

            <label for="idade_convidado">Idade do convidado:</label>
            <input type="number" id="idade_convidado" name="idade_convidado" required>

            <label for="nome_acompanhante">Nome do acompanhante:</label>
            <input type="text" id="nome_acompanhante" name="nome_acompanhante" required>

            <label for="idade_acompanhante">Idade do acompanhante:</label>
            <input type="number" id="idade_acompanhante" name="idade_acompanhante" required>

            <button type="submit">Verificar Entrada</button>
        </form>
    </div>
</body>

</html>