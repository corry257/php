<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Desafio - 01</title>
        <link rel="stylesheet" href="style.css">

    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header>
            <h1>Digite um número</h>
        </header>
        <section>
            <form action="cad.php" method="get">
                <label for="numero">Número </label>
                <input type="text" name="numero" id="idnumero">
                <input type="submit" value="Calcular">
            </form>
        </section>
    </body>
</html>