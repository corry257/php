<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Desafio - 05</title>
        <link rel="stylesheet" href="style.css">

    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header>
            <h1>Analisador de Número Real</h>
        </header>
        <section>
            <h2>Digite um número real</h2>
            <form action="cad.php" method="get">
                <label for="valor">Número real</label>
                <input type="number" name="valor" id="idvalor" step="0.001">
                <input type="submit" value="Analisar">
            </form>
        </section>
    </body>
</html>