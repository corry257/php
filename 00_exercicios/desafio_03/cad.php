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
            $convertido = $valor / 5.35;

            // Jeito que fiz 
            $convertido_formatado = number_format($convertido, 2, ',', '.');
            $valor_formatado = number_format($valor, 2, ',', '.');

            echo"<p>R$$valor_formatado equivale a U$$convertido_formatado\n";
            echo"<p>Cotação fixa de R$5,35\n";

            /* 
            resolução:
            $cotacao = 5.35;
	
            $real = 1000;
            
            $dolar = $real / $cotacao;

            // Formatação de moedas com internacionalização
            // Biblioteca intl (Internallization PHP)
            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
	        echo numfmt_format_currency($padrao, $real, "BRL") . " equivale a " . numfmt_format_currency($padrao, $dolar, "USD");
            */
        ?>
        <p><button onclick="javascript:history.go(-1)">Voltar</button></p>
    </main>
</body>
</html>


