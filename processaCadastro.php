<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Confirmação de Cadastro</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Cadastro realizado</h1>

    <?php
    $nome = $_POST["nomeCompleto"];
    $idade = $_POST["idadeColaborador"];
    $profissao = $_POST["profissaoColaborador"];
    $salario = $_POST["salarioPretendido"];
    $experiencia = $_POST["experienciaAnterior"];

    echo "<h2>Dados do colaborador</h2>";

    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Idade:</strong> $idade anos</p>";
    echo "<p><strong>Profissão:</strong> $profissao</p>";
    echo "<p><strong>Salário pretendido:</strong> R$ $salario</p>";
    echo "<p><strong>Experiência anterior:</strong> $experiencia</p>";

    echo "<div class='mensagem'>";
    echo "<h3>Mensagem</h3>";

    echo "<p>
        Olá, $nome! Seu cadastro para a área de
        $profissao foi recebido com sucesso.
        Sua experiência informada foi: $experiencia.
        Agradecemos pelo interesse em fazer parte da
        equipe das Lojas Brincos e Companhia.
    </p>";

    echo "</div>";

    ?>

    <a href="cadastro.html" class="botao">Voltar ao formulário</a>

</div>

</body>
</html>