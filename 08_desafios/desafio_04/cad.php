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
            // Cotação adquirida da API do Banco Central
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            $cotacao = $dados["value"][0]["cotacaoCompra"];

            // valor obtido que o usuário digitou
            $valor = $_GET["valor"] ?? "sem valor"; 

            if ($valor == "sem valor") {
                echo "Temporariamente sem serviço, tente mais tarde";
            }
            else {
            // Conversão de real para dolar 
            $convertido = $valor / $cotacao;

            // Formatação dos valores para o padrão brasileiro 
            $valor_formatado = number_format($valor, 2, ',', '.');
            $convertido_formatado = number_format($convertido, 2, ',', '.');
            
            // Mostrar a conversão para o usuário 
            echo"<p>R$$valor_formatado equivale a U$$convertido_formatado\n";
            echo"<p>Cotação obtida do <a href=\"https://www.bcb.gov.br/\" target=\"_blank\">Banco Central do Brasil</a></p>";
            }
        ?>
        <p><button onclick="javascript:history.go(-1)">Voltar</button></p>
    </main>
</body>
</html>


