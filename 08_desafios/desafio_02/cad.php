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
        <h1>Trabalhando com números aleatórios</h1>
    </header>
    <main>
        <?php
            $numeroAleatorio = $_get['gerar'];
            $numeroAleatorio = mt_rand(1, 100);
            echo "O número gerado foi: " . $numeroAleatorio;
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>


