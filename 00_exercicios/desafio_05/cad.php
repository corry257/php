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
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php
            $valor = $_GET["valor"] ?? "sem valor"; 

            echo"<p>Analisando o número <strong>" . number_format($valor, 3, ",", ".") . "</strong>";

            $inteiro = (int) $valor;
            $fracao = $valor - $inteiro;

            echo"<ul><li>A parte inteira do número é <strong>" . number_format($inteiro, 0, ",", ".") . "</strong>";
            echo"<li>A parte fracionária é <strong>" . number_format($fracao, 3, ",", ".") . "</strong></li></ul>"
        ?>
        <p><button onclick="javascript:history.go(-1)">Voltar</button></p>
    </main>
</body>
</html>


