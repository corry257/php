<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
            // $_REQUEST é a Junção das super globais $_GET, $_POST e $_COOKIES 
            $nome = $_GET["nome"] ?? "sem nome"; 
            $sobrenome = $_GET["sobrenome"] ?? "desconhecido";

            echo"<p>É um grande prazer te conhecer $nome $sobrenome, este é o meu site." 
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a pagina anterior</a></p>
    </main>
</body>
</html>


