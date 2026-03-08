<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos - PHP</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h1>Tipos Primitivos no PHP</h1>

        <p>
            O PHP é uma linguagem de tipagem dinâmica, o que significa que você não precisa declarar o tipo de uma variável; ele é inferido pelo valor atribuído. No entanto, existem diversos tipos de dados que podem ser utilizados. Vamos conhecer os principais.
        </p>

        <h2>Tipos Escalares</h2>
        <p>Tipos escalares representam um único valor.</p>

        <h3>String</h3>
        <p>
            Sequência de caracteres (texto). Deve estar entre aspas simples ou duplas.
        </p>
        <pre><code>&lt;?php
    $sobrenome = "Neves";
    $nome = 'João';
?&gt;</code></pre>

        <h3>int (integer)</h3>
        <p>
            Números inteiros (sem parte decimal).
        </p>
        <pre><code>&lt;?php
    $idade = 30;
    $ano = 2024;
?&gt;</code></pre>

        <h3>float (double ou real)</h3>
        <p>
            Números com ponto flutuante (decimais).
        </p>
        <pre><code>&lt;?php
    $peso = 85.9;
    $altura = 1.75;
?&gt;</code></pre>

        <h3>bool (boolean)</h3>
        <p>
            Valores lógicos: <code>true</code> ou <code>false</code>.
        </p>
        <pre><code>&lt;?php
    $casado = true;
    $aprovado = false;
?&gt;</code></pre>

        <h2>Tipos Compostos</h2>
        <p>Agrupam múltiplos valores.</p>

        <h3>Array</h3>
        <p>
            Estrutura que armazena uma coleção de valores. Pode conter elementos de tipos diferentes.
        </p>
        <pre><code>&lt;?php
    $vet = [6, 2.5, "Maria", false];
    // ou
    $cores = array("vermelho", "azul", "verde");
?&gt;</code></pre>

        <h3>Object</h3>
        <p>
            Representa uma instância de uma classe. Permite criar estruturas mais complexas com propriedades e métodos.
        </p>
        <pre><code>&lt;?php
    class Pessoa {
        private string $nome;
    }

    $p = new Pessoa();
?&gt;</code></pre>

        <h2>Tipos Especiais</h2>
        <ul>
            <li><strong>null</strong>: Representa uma variável sem valor.</li>
            <li><strong>resource</strong>: Referência a recursos externos (arquivos, conexões de banco).</li>
            <li><strong>callable</strong>: Funções ou métodos que podem ser chamados.</li>
            <li><strong>mixed</strong>: Indica que a variável pode ser de qualquer tipo (usado em documentação).</li>
        </ul>

        <h2>Verificando tipos com <code>var_dump()</code></h2>
        <p>
            A função <code>var_dump()</code> exibe informações sobre uma ou mais variáveis: tipo e valor. É muito útil para depuração.
        </p>

        <h3>Exemplo com uma string</h3>
        <pre><code>&lt;?php
    $v = "Alan";
    var_dump($v);
    // string(4) "Alan"
?&gt;</code></pre>

        <h3>Exemplo com múltiplas variáveis</h3>
        <pre><code>&lt;?php
    $sobrenome = "Neves";
    $idade = 30;
    $peso = 85.9;
    $casado = true;
    var_dump($sobrenome, $idade, $peso, $casado);
    /*
    string(5) "Neves"
    int(30)
    float(85.9)
    bool(true)
    */
?&gt;</code></pre>

        <h3>Exemplo com array</h3>
        <pre><code>&lt;?php
    $vet = [6, 2.5, "Maria", false];
    var_dump($vet);
    /*
    array(4) {
      [0]=> int(6)
      [1]=> float(2.5)
      [2]=> string(5) "Maria"
      [3]=> bool(false)
    }
    */
?&gt;</code></pre>

        <h3>Exemplo com objeto</h3>
        <pre><code>&lt;?php
    class Pessoa {
        private string $nome;
    }
    $p = new Pessoa();
    var_dump($p);
    /*
    object(Pessoa)#1 (0) {
      ["nome":"Pessoa":private]=> uninitialized(string)
    }
    */
?&gt;</code></pre>

        <div class="note">
            <strong>Nota sobre bases numéricas:</strong> No PHP, você pode representar números em diferentes bases:
            <ul>
                <li><strong>Hexadecimal:</strong> prefixo <code>0x</code> (ex.: <code>0x2A</code> = 42)</li>
                <li><strong>Binário:</strong> prefixo <code>0b</code> (ex.: <code>0b1010</code> = 10)</li>
                <li><strong>Octal:</strong> prefixo <code>0</code> (ex.: <code>0755</code> = 493)</li>
            </ul>
        </div>

        <hr>

        <p>
            <a href="../index.php">Página inicial</a> | <a href="../01_variaveis_e_constantes/index.php">← Página anterior</a> | <a href="../03_tipos_de_strings/index.php">Próxima página</a> |
        </p>
    </div>
</body>
</html>