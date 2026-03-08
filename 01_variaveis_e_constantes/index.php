<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes - PHP</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h1>Variáveis e Constantes no PHP</h1>
        
        <h2>Variáveis</h2>
        <p>
            Em PHP, variáveis são representadas pelo símbolo <code>$</code> seguido do nome. 
            O nome da variável deve começar com letra ou sublinhado (<code>_</code>), e pode conter 
            letras, números e sublinhados. É sensível a maiúsculas e minúsculas (<code>$nome</code> 
            é diferente de <code>$Nome</code>).
        </p>
        <p>
            Por convenção, usamos <strong>camelCase</strong> para nomear variáveis: a primeira palavra 
            começa com minúscula e as próximas com maiúscula (ex.: <code>$nomeCompleto</code>, <code>$dataNascimento</code>).
        </p>

        <h3>Exemplos de variáveis</h3>
        <pre><code>&lt;?php
    $nome = "Alan";
    $idade = 31;
    $casado = false;
    $altura = 1.77;
?&gt;</code></pre>

        <p class="note">
            <strong>Nota:</strong> As variáveis podem ter seus valores alterados ao longo do script. 
            O PHP é dinamicamente tipado, ou seja, uma mesma variável pode receber valores de tipos diferentes.
        </p>

        <hr>

        <h2>Constantes</h2>
        <p>
            Constantes são valores que não podem ser alterados durante a execução do script. 
            Uma vez definidas, seu valor permanece fixo. São muito úteis para armazenar configurações 
            ou valores que não mudam, como o nome de um site, versão, etc.
        </p>
        <p>
            No PHP, podemos definir constantes de duas formas principais:
        </p>
        <ul>
            <li>
                <strong><code>const</code></strong> (disponível a partir do PHP 7) – geralmente usada em nível de classe ou no escopo global.
            </li>
            <li>
                <strong><code>define()</code></strong> – função que define constantes em tempo de execução.
            </li>
        </ul>
        <p>
            Por convenção, usamos nomes em letras maiúsculas com <strong>snake_case</strong> (ex.: <code>NOME_DA_CONSTANTE</code>).
        </p>

        <h3>Exemplos de constantes</h3>
        <pre><code>&lt;?php
    // Usando const
    const NOME_DO_SITE = "Meu Site PHP";
    const VERSAO = "1.0";

    // Usando define()
    define('AUTOR', 'Alan Neves');
    define('ANO_CRIACAO', 2026);

    // Exibindo constantes
    echo NOME_DO_SITE;   // Meu Site PHP
    echo AUTOR;          // Alan Neves
?&gt;</code></pre>

        <h3>Diferenças entre <code>const</code> e <code>define()</code></h3>
        <ul>
            <li><code>const</code> é uma construção de linguagem, enquanto <code>define()</code> é uma função.</li>
            <li><code>const</code> só pode ser usado no escopo de classes e no escopo global (fora de funções e loops). Já <code>define()</code> pode ser usado em qualquer lugar.</li>
            <li><code>const</code> é ligeiramente mais rápido, mas a diferença é irrelevante na prática.</li>
            <li><code>define()</code> permite definir constantes com nomes dinâmicos (usando expressões) e também aceita valores de tipos mais complexos (arrays, por exemplo). A partir do PHP 7, <code>define()</code> também aceita arrays.</li>
        </ul>

        <h3>Constantes mágicas</h3>
        <p>
            O PHP possui diversas <strong>constantes mágicas</strong> que mudam conforme o contexto. 
            Elas começam e terminam com dois underscores (<code>__</code>). Exemplos:
        </p>
        <pre><code>&lt;?php
    echo __LINE__;        // Linha atual do arquivo
    echo __FILE__;        // Caminho completo do arquivo
    echo __DIR__;         // Diretório do arquivo
    echo __FUNCTION__;    // Nome da função atual
    echo __CLASS__;       // Nome da classe atual
    echo __METHOD__;      // Nome do método atual
    echo __NAMESPACE__;   // Namespace atual
?&gt;</code></pre>

        <p>
            Essas constantes são muito úteis para depuração e para obter informações sobre o ambiente de execução.
        </p>

        <hr>

        <p>
            <a href="/">← Voltar para a página inicial</a> | <a href="../02_tipos_primitivos/index.php">Ir para página seguinte</a>
        </p>
    </div>
</body>
</html>