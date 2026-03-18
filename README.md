# PHP

## Evolução da linguagem PHP

Tudo começou em 1994 com Rasmus Lerdorf no Canadá, um estudante de ciência da computação. Ele era uma pessoa ativa na comunidade Apache e MySQL, e muito experiente em linguagem C. Rasmus queria um contador de visitantes - algo comum hoje em dia, mas que não era trivial na época. Então ele criou a ferramenta Personal Home Page (PHP), sem a intenção de criar uma linguagem, mas sim uma ferramenta que foi evoluindo até se tornar o PHP que conhecemos hoje.

### PHP 1.0
Em 1995, Rasmus empacotou tudo e lançou oficialmente o PHP Tools. Além do contador de usuários, também incluía um interpretador de formulários. O PHP Tools passou a se chamar Form Interpreter e, depois de um mês, voltou para a sigla original Personal Home Page Constructor Kit. Os comandos eram os mesmos de C e Perl. O PHP 1.0 ainda não podia ser chamado de linguagem de programação.

### PHP 2.0
Em 1996 foi lançada a versão 2.0, batizada de PHP/FI (Personal Home Page with Form Interpreter). Nesta versão já começou a ter características de linguagem, com suporte a bancos de dados como mSQL, PostgreSQL, MySQL, suporte a cookies e funções definidas pelo usuário.

Nessa época, o PHP já era usado em cerca de 15.000 sites e Rasmus era o principal desenvolvedor. Percebendo que não conseguiria manter o desenvolvimento sozinho, ele abriu o código e registrou o PHP como software livre - assim como Linux, LibreOffice, GIMP, Python, Git, entre outros. O PHP cresceu tanto que em 1997 já era usado em 50.000 sites.

### A contribuição israelense
Em Israel, em 1997, surgiu uma das maiores contribuições para o PHP. No Israel Institute of Technology, em Raifa, no norte do país, dois estudantes da universidade - **Andi Gutmans** e **Zeev Suraski** - estavam desenvolvendo um software de loja e tiveram contato com o PHP. Eles viram o potencial da ferramenta, mas ela não atendia tudo que precisavam. Então conversaram com Rasmus e, nesse momento, se tornaram grandes colaboradores do projeto, reescrevendo o código para lançar a próxima versão.

### PHP 3.0
Lançado em 1998 com o código todo reescrito por Andi e Zeev. O nome Personal Home Page já não cabia mais para o projeto, mas a sigla já era muito forte para deixar de ser usada. Então trocaram o nome, mas não a sigla, tornando-se **PHP: Hypertext Preprocessor**.

Ainda em 1998, dois artistas foram muito importantes para a linguagem, sendo responsáveis pela identidade visual do projeto: **Colin Viebrock** e **Vincent Pontier**. Colin foi responsável pelo desenho da logo do PHP (imagem-1) e Vincent criou o mascote do PHP, o simpático elefante (imagem-2).

<p align="center">
  <img src="imagem-1.png" alt="Logo do PHP" width="250"/>
  <img src="imagem-2.png" alt="Mascote do PHP - Elefante" width="250"/>
</p>

### Criação da Zend
Em 1999, Zeev e Andi criaram uma empresa que até hoje é uma grande desenvolvedora da linguagem PHP. O nome da empresa é a junção dos nomes dos dois: ***ZE**ev + A**ND**i = **ZEND***. Toda a infraestrutura básica do PHP é construída por eles e foi denominada **Zend Engine**.

A partir desse momento, o PHP cresceu muito com o lançamento do PHP 4.0 e as demais versões como 5.0, 7.0 e 8.0. Rasmus acabou saindo do desenvolvimento do PHP e se tornou funcionário do Yahoo em 2009.

*A versão 6.0 nunca foi lançada.*

### Histórico do PHP
- **1994:** Início do desenvolvimento por Rasmus Lerdorf.
- **1995:** Lançamento do PHP Tools (versão 1.0).
- **1996:** Lançamento do PHP/FI (versão 2.0).
- **1996:** Abertura do código (software livre).
- **1997:** Andi Gutmans e Zeev Suraski começam a colaborar.
- **1998:** Lançamento da versão 3.0 com o nome PHP: Hypertext Preprocessor.
- **1998:** Criação da logo e do mascote por Colin Viebrock e Vincent Pontier.
- **1999:** Criação da Zend por Zeev e Andi.
- **2004:** Lançamento do PHP 5.0.
- **2015:** Lançamento do PHP 7.0.
- **2020:** Lançamento do PHP 8.0.

Mais informações podem ser encontradas em: [Documentação oficial do PHP - História](https://www.php.net/manual/pt_BR/history.php.php)

---

## Como funciona o PHP?

O PHP se utiliza de tecnologias como HTML, CSS e JavaScript, que são tecnologias feitas para funcionarem do lado do cliente (client-side), ou seja, no seu próprio computador. Já o PHP usa uma tecnologia feita para funcionar no lado do servidor (server-side).

### Client-side
Na tecnologia client-side, o computador faz a requisição ao servidor, e o servidor envia os arquivos para serem processados no PC do cliente.

   Cliente → [Requisição] → Internet → Servidor   
   Cliente ← [Resposta] ← Internet ← Servidor   
   Cliente processa os arquivos localmente



### Server-side
Na tecnologia server-side, o cliente faz a requisição ao servidor, que processa os arquivos e envia tudo já processado.

   Cliente → [Requisição] → Internet → Servidor (processa os arquivos)   
   Cliente ← [Resposta (já processada)] ← Internet ← Servidor   

### Front-end e Back-end
- **Front-end:** Desenvolvedores preocupados em soluções de problemas do lado do cliente (client-side), criando a interface e a experiência do usuário.
- **Back-end:** Desenvolvedores que solucionam problemas e programam do lado do servidor (server-side), sem contato direto com o usuário final.
- **Full Stack:** Profissionais que atuam tanto no lado do cliente quanto no servidor, resolvendo problemas em ambas as camadas.

### Servidor
Um **servidor** é um computador ou sistema que fornece recursos, dados, serviços ou programas para outros computadores, chamados de clientes, através de uma rede. Em desenvolvimento web, o servidor é responsável por receber requisições HTTP, processar códigos (como PHP) e retornar páginas HTML, imagens ou outros conteúdos.

#### Como transformar seu PC em um servidor?
Qualquer computador pode se tornar um servidor web desde que tenha um **software servidor HTTP** instalado e configurado. Para desenvolvimento local, é comum transformar o próprio PC em um servidor para testar aplicações antes de publicá-las na internet.

#### Principais servidores web
- **Apache:** O servidor web mais popular do mundo. Open source, modular e altamente configurável. Criado em 1995, é mantido pela Apache Software Foundation. Integra-se perfeitamente com PHP e é o servidor padrão em soluções como XAMPP e WAMP.
- **Nginx:** (pronuncia-se "engine-x") Servidor web de alta performance, criado em 2004 por Igor Sysoev. Destaca-se por sua arquitetura orientada a eventos, consumindo menos memória e lidando melhor com muitas conexões simultâneas que o Apache. Muito usado em sites de alto tráfego.

### Banco de dados
Um **banco de dados** é um sistema organizado para armazenar, gerenciar e recuperar informações de forma eficiente. Em aplicações web dinâmicas, o banco de dados guarda todo o conteúdo mutável: usuários, posts, produtos, comentários, etc.

#### Para que serve?
- Persistência de dados (informações que permanecem mesmo após o usuário sair do site)
- Organização estruturada das informações
- Consultas rápidas e complexas
- Controle de concorrência (múltiplos acessos simultâneos)
- Segurança e integridade dos dados

#### Como é implementado num sistema?
O PHP se comunica com o banco de dados através de extensões como **PDO (PHP Data Objects)** ou **MySQLi**. O fluxo básico é:
1. Aplicação PHP conecta-se ao banco
2. Envia uma consulta (query) em linguagem SQL
3. Banco processa e retorna os dados solicitados
4. PHP utiliza esses dados para gerar páginas dinâmicas

#### Principais bancos de dados usados com PHP
- **MySQL:** Sistema de gerenciamento de banco de dados relacional mais popular para web. Open source, rápido, confiável e amplamente documentado. Adquirido pela Oracle em 2010, mas mantém versão comunitária livre (GPL).
- **MariaDB:** Fork do MySQL criado pelos desenvolvedores originais após a aquisição pela Oracle. Criado por Michael "Monty" Widenius em 2009. Mantém 100% compatibilidade com MySQL, mas adiciona melhorias de performance e novos recursos. É o banco padrão em muitas distribuições Linux e no XAMPP atual.

## XAMPP

**XAMPP** é um pacote de software livre e multiplataforma que reúne em uma única instalação todos os programas necessários para criar um ambiente de desenvolvimento web local. O nome é um acrônimo para:

- **X:** Multiplataforma (funciona em Windows, Linux e Mac)
- **A:** Apache (servidor web)
- **M:** MariaDB/MySQL (banco de dados)
- **P:** PHP (linguagem de programação)
- **P:** Perl (linguagem de programação)

#### Por que usar XAMPP?
Ele **condensa** a instalação e configuração de todos esses programas num só lugar, eliminando a complexidade de configurar cada componente separadamente. Com um único instalador, você tem um ambiente web completo rodando em minutos, ideal para:

- Aprender PHP e desenvolvimento web
- Desenvolver sites localmente antes de publicar
- Testar aplicações em ambiente controlado
- Demonstrar projetos sem necessidade de internet

### Download do XAMPP

O XAMPP está disponível para os principais sistemas operacionais. Escolha a versão adequada para seu computador:

- **Windows:** Instalador executável (.exe) com interface gráfica.
- **Linux:** Pacotes para distribuições baseadas em Debian/Ubuntu (.run) ou arquivos compactados.
- **macOS:** Instalador específico para sistemas da Apple (.dmg).

Download em: [apachefriends.org/download.html](https://www.apachefriends.org/download.html)

### Configurações iniciais
Após instalar e iniciar o XAMPP, você precisa ativar os serviços essenciais:

1. Abra o **XAMPP Control Panel**.
2. Clique em **Start** para o Apache (servidor web).
3. Clique em **Start** para o MySQL (banco de dados).

Em seguida, siga o passo a passo abaixo:

1. Abra o navegador e digite `localhost` na barra de endereços.
2. Clique em **phpinfo()** para observar as configurações do PHP instaladas em sua máquina.
3. Procure pela coluna **Loaded Configuration File**. Este campo mostrará onde está localizado seu arquivo de configuração do PHP (`php.ini`) no servidor Apache.
4. Após localizar o arquivo `php.ini`, abra-o em um editor de texto e verifique/altere os seguintes campos:

   ```ini
   display_errors=On
   ```
   ```ini
   log_errors=On
   ```
   ```ini
   memory_limit=512M
   ```
   ```ini
   max_execution_time=120
   ```
   ```ini
   file_uploads=On
   ```
   ```ini
   upload_max_filesize=100M
   ```
   ```ini
   post_max_size=100M
   ```

*Observação: valores como memory_limit podem precisar da unidade (M para Megabytes). Ajuste conforme necessário.*

5. Salve o arquivo e reinicie o Apache pelo XAMPP Control Panel para aplicar as alterações.

*Caso tenha dificuldade em instalar ou configurar o XAMPP em sua máquina, veja estes vídeo-tutoriais:* 

   **Downloads:** [Windows](www.youtube.com), [Linux](youtube.com), [MacOs](www.youtube.com)   
   **configurações:** [Windows](https://www.youtube.com/watch?v=H9kO0gVSLlo&list=PL0N5TAOhX5E9eJ9Ix6YUIgEw3lNmaIEE9&index=4), [Linux](youtube.com), [MacOs](www.youtube.com)   

---

## Estrutura básica de um arquivo PHP

Um arquivo PHP geralmente contém uma mistura de HTML e código PHP. O PHP é processado no servidor e o resultado (geralmente HTML puro) é enviado ao navegador. Por isso, a estrutura básica de um arquivo PHP começa com a estrutura HTML padrão.

### Estrutura HTML

Todo documento HTML deve ter a declaração `<!DOCTYPE html>` e a tag `</html>` como elemento raiz. Dentro dela, temos duas seções principais: `<head>` e `<body>`.

- `<!DOCTYPE html>`: Indica ao navegador que o documento é HTML5.
- `</html>`: Tag de fechamento, indica o final do código em HTML.
- `<html lang="pt-BR">`: Define o idioma da página (importante para acessibilidade e SEO).
- `<head>`: Contém metadados, título da página, links para CSS, scripts, etc. Não é visível na página.
- `<body>`: Contém todo o conteúdo visível da página: textos, imagens, formulários, etc.

Exemplo de estrutura básica HTML:

```html
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Minha Página PHP</title>
</head>
<body>
    <h1>Olá, mundo!</h1>
    <p>Este é um parágrafo.</p>
</body>
</html>
```

### Inserindo código PHP no HTML
Para incluir código PHP dentro de um arquivo .php, você precisa usar as tags PHP. O servidor interpreta tudo que está dentro dessas tags e o resultado é inserido no local correspondente.

#### Tags PHP disponíveis:
***Supertag (recomendada):* <?php ... ?> –** é a forma mais comum e portável, funciona em todas as configurações.   

***Short open tag:* <? ... ?> –** precisa estar habilitada no arquivo php.ini (short_open_tag = On). Não é recomendada para garantir compatibilidade.

***Short tag de echo:* <?= ... ?> –** é um atalho para <?php echo ... ?>. Muito usado para exibir valores diretamente.   
   
Exemplo:
```php

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exemplo PHP</title>
</head>
<body>
    <h1><?php echo "Olá, mundo!"; ?></h1>
    <p>Hoje é <?= date('d/m/Y'); ?></p>
</body>
</html>
```
## Primeiros passos com PHP

Para programar em PHP, é essencial ter noções de lógica de programação: entender o que é um algoritmo, variáveis, estruturas de controle, etc. Vamos começar com o básico.

### Algoritmo
Um algoritmo é uma sequência finita de passos que visa resolver um problema. Em programação, escrevemos algoritmos por meio de código.
Imprimindo mensagens na tela

O PHP oferece dois comandos principais para exibir texto:   
   
`echo` – é o mais utilizado, pode receber múltiplos parâmetros.   

`print` – também exibe texto, mas retorna 1 e aceita apenas um argumento.   
   
Ambos podem ser usados com ou sem parênteses.  
   
Exemplo:
```php
        echo "Olá, mundo!";
        print "Olá, mundo!";
```
*Atenção: Todo comando em PHP deve terminar com ponto e vírgula ;. Isso indica o fim da instrução.*

### Comentários
Comentários são trechos de texto ignorados pelo interpretador. São úteis para documentar o código.

#### Comentários de uma linha

```php
    // Este é um comentário de uma linha
    # Este também é um comentário de uma linha (estilo Unix)
```

#### Comentários de múltiplas linhas

```php
    /*
    Este é um comentário
    que pode ocupar várias linhas
    */
```

## Variáveis e constantes
### Variáveis
Em PHP, variáveis são representadas pelo símbolo $ seguido do nome. O nome da variável deve começar com letra ou sublinhado, e pode conter letras, números e sublinhados. É sensível a maiúsculas e minúsculas.   

Por convenção, usamos camelCase para nomear variáveis: a primeira palavra começa com minúscula e as próximas com maiúscula (ex.: $nomeCompleto).

```php
    $nome = "João";
    $idade = 25;
    $casado = false;
```

*As variáveis podem ter seus valores alterados ao longo do script.*

### Constantes
Constantes são valores que não podem ser alterados durante a execução. São definidas com a palavra-chave const (a partir do PHP 7) ou com a função define(). Por convenção, usamos nomes em maiúsculas com snake_case (ex.: NOME_DA_CONSTANTE).

```php
    const NOME_DA_CONSTANTE = "valor fixo";
    // ou
    define('OUTRA_CONSTANTE', 123);
```

## Tipos de dados

O PHP é uma linguagem de tipagem dinâmica, ou seja, você não precisa declarar o tipo da variável; ele é inferido pelo valor atribuído. No entanto, existem vários tipos de dados.

### Tipos escalares
São tipos básicos que representam um único valor.   

**`string:`** Sequência de caracteres (texto). Deve estar entre aspas simples ou duplas.

```php
    $nome = "Maria";
    $sobrenome = 'Silva';
```
**`int (integer):`** Números inteiros (sem parte decimal).

```php
    $idade = 30;
    $ano = 2024;
```
**`float (double ou real):`** Números com ponto flutuante (decimais).

```php
    $preco = 19.90;
    $altura = 1.75;
```
**`bool (boolean):`** Valores lógicos: true ou false.

```php
    $aprovado = true;
    $ativo = false;
```

### Tipos compostos
Agrupam múltiplos valores.

**`array:`** Estrutura que armazena uma coleção de valores.

```php
    $cores = array("vermelho", "azul", "verde");
    // ou sintaxe curta
    $numeros = [10, 20, 30];
    $mix = [1, "texto", true, 3.14];
```

**`object:`** Representa uma instância de uma classe.

```php
    class Pessoa {
        public $nome;
        public $idade;
    }
    $p = new Pessoa();
    $p->nome = "Carlos";
```

### Tipos especiais
**`null:`** Representa uma variável sem valor.   

**`resource:`** Referência a recursos externos (arquivos, conexões de banco).   

**`callable:`** Funções ou métodos que podem ser chamados.   

**`mixed:`** Indica que a variável pode ser de qualquer tipo (usado em documentação).

### Verificando tipos
O PHP oferece a função var_dump() que exibe informações sobre uma variável: tipo e valor.

```php
$idade = 30;
var_dump($idade); // int(30)

$nome = "João";
var_dump($nome); // string(4) "João"
```

## Strings em PHP

Strings podem ser definidas de quatro formas diferentes: aspas duplas, aspas simples, Heredoc e Nowdoc.

### Aspas duplas (" ")
Permitem a interpretação de variáveis e caracteres de escape (como \n para nova linha, \t para tabulação, \$ para cifrão literal, \\ para barra invertida e \u{} para Unicode).

```php
    $linguagem = "PHP";
    echo "Estou estudando $curso"; // Exibe: Estou estudando PHP
    echo "\u{2764} \u{1F418}"; // Exibe: um coração e um elefante
```

### Aspas simples (' ')
Não interpretam variáveis nem a maioria dos escapes. Apenas \' e \\ são reconhecidos.

```php
    $curso = 'PHP';
    echo 'Estou estudando $curso'; // Exibe: Estou estudando $curso
    echo 'Coração: \u{1F418}'; // Exibe: Coração: \u{1F418}
```

### Heredoc
Permite escrever strings multilinha com interpretação de variáveis e escapes. A sintaxe é <<<IDENTIFICADOR e o identificador deve ser repetido no fechamento (sem espaços).

```php
    $nome = "João";
    $texto = <<<TEXTO
    Olá, $nome!
    Bem-vindo ao curso de PHP.
    Espero que você goste. \u{1F604}
    TEXTO;
    echo $texto;
```

### Nowdoc
Semelhante ao Heredoc, mas não interpreta variáveis nem escapes (exceto para o próprio delimitador). Usa o identificador entre aspas simples.

```php
    $nome = "João";
    $texto = <<<'TEXTO'
    Olá, $nome!
    Bem-vindo ao curso de PHP.
    Espero que você goste. \u{1F604}
    TEXTO;
    echo $texto; // Exibe literalmente $nome e \u{1F604}
```

### Concatenação de strings
Para unir strings, usamos o operador ponto (.).

```php
    $nome = "Maria";
    $sobrenome = "Oliveira";
    $nomeCompleto = $nome . " " . $sobrenome; // "Maria Oliveira"
    echo "Olá, " . $nomeCompleto . "!";
```

### Exibindo aspas dentro da string
Quando precisamos incluir aspas dentro de uma string, usamos a barra invertida para escapá-las.

```php
echo "Ele disse: \"Olá, mundo!\"";
```

## Expressões aritméticas

Expressões aritméticas em PHP utilizam os mesmos operadores que aprendemos na matemática. Assim como na matemática tradicional, existe uma **hierarquia (precedência)** na ordem em que os operadores são executados.

### Ordem de precedência (do maior para o menor)
1. **Potenciação** (`**`)
2. **Multiplicação** (`*`), **Divisão** (`/`), **Resto da divisão** (`%`)
3. **Adição** (`+`), **Subtração** (`-`)

*Para alterar a ordem de execução, utilize **parênteses** `()` para agrupar as operações que devem ser executadas primeiro.*

### Adição (`+`)
O operador de adição soma dois ou mais valores.

```php
   <?php
      $a = 10;
      $b = 5;
      $resultado = $a + $b; // 15
      echo "A soma de $a + $b é $resultado";
   ?>
```

### Subtração (`-`)
O operador de subtração subtrai um valor de outro.

```php
   <?php
      $a = 10;
      $b = 5;
      $resultado = $a - $b; // 5
      echo "A subtração de $a - $b é $resultado";
   ?>
```

### multiplicação (`*`)
O operador de multiplicação multiplica dois ou mais valores.

```php
   <?php
      $a = 10;
      $b = 5;
      $resultado = $a * $b; // 50
      echo "A multiplicação de $a * $b é $resultado";
   ?>
```

### Divisão (`/`)
O operador de divisão divide um valor por outro.

```php
   <?php
      $a = 10;
      $b = 5;
      $resultado = $a / $b; // 2
      echo "A divisão de $a / $b é $resultado";
   ?>
```

### Resto da divisão (`%`)
Retorna o resto da divisão entre dois números.

```php
   <?php
      $a = 10;
      $b = 3;
      $resultado = $a % $b; // 1 (10 dividido por 3 sobra 1)
      echo "O resto da divisão de $a por $b é $resultado";
   ?>
```

### Potenciação 
O operador de potenciação eleva um número a uma potência.

```php
   <?php
      $a = 5;
      $b = 2;
      $resultado = $a ** $b; // 25 (5²)
      echo "$a elevado a $b é $resultado";
   ?>
```

*dá pra mudar a ordem de precedência colocando parenteses entre o que se quer que seja executado primeiro*

ex:
```php
   <?php
      // Sem parênteses: multiplicação primeiro
      $resultado1 = 2 + 3 * 4; // 2 + 12 = 14
      
      // Com parênteses: adição primeiro
      $resultado2 = (2 + 3) * 4; // 5 * 4 = 20
      
      echo "Sem parênteses: 2 + 3 * 4 = $resultado1";
      echo "<br>"; // pula uma linha
      echo "Com parênteses: (2 + 3) * 4 = $resultado2";
   ?>
```

## Estrutura de controle
Estruturas de controle permitem que seu script tome decisões e execute blocos de código baseados em condições ou repita ações múltiplas vezes.

### condicionais
Permitem executar diferentes blocos de código baseados em condições.

#### if 
Executa um bloco de código caso a condição seja verdadeira.

```php
<?php
    $idade = 18;
    
    if ($idade >= 18) {
        echo "Você é maior de idade";
    }
?>
```

#### else
Executa um bloco de código se a condição do `if` for falsa.

```php
<?php
    $idade = 16;
    
    if ($idade >= 18) {
        echo "Você é maior de idade";
    } else {
        echo "Você é menor de idade";
    }
?>
```

#### elseif
Permite testar múltiplas condições sequencialmente.

```php
<?php
    $nota = 7.5;
    
    if ($nota >= 9) {
        echo "Excelente";
    } elseif ($nota >= 7) {
        echo "Bom";
    } elseif ($nota >= 5) {
        echo "Regular";
    } else {
        echo "Precisa melhorar";
    }
?>
```

#### switch
Útil quando você precisa comparar uma variável com múltiplos valores específicos.

```php
<?php
    $diaSemana = "segunda";
    
    switch ($diaSemana) {
        case "segunda":
        case "terça":
        case "quarta":
        case "quinta":
        case "sexta":
            echo "Dia útil";
            break;
        case "sábado":
        case "domingo":
            echo "Fim de semana";
            break;
        default:
            echo "Dia inválido";
    }
?>
```
### Repetição (loops)
Permitem executar um bloco de código múltiplas vezes.

#### for
Executa um bloco de código um número determinado de vezes.

```php
<?php
    // Contar de 1 a 5
    for ($i = 1; $i <= 5; $i++) {
        echo "Número: $i<br>";
    }
?>
```

#### foreach
Percorre todos os elementos de um array.

```php
<?php
    $cores = ["vermelho", "azul", "verde"];
    
    foreach ($cores as $indice => $cor) {
        echo "Cor na posição $indice: $cor<br>";
    }
    
    // Sintaxe simplificada (apenas valores)
    foreach ($cores as $cor) {
        echo "$cor<br>";
    }
?>
```

#### while
Executa um bloco enquanto uma condição for verdadeira.

```php
<?php
    $contador = 1;
    
    while ($contador <= 5) {
        echo "Contador: $contador<br>";
        $contador++;
    }
?>
```

#### do-while
Semelhante ao `while`, mas garante que o bloco seja executado pelo menos uma vez.

```php
<?php
    $contador = 1;
    
    do {
        echo "Contador: $contador<br>";
        $contador++;
    } while ($contador <= 5);
    
    // Exemplo que executa mesmo com condição falsa
    $valor = 10;
    do {
        echo "Este bloco executa uma vez!";
    } while ($valor > 20); // Condição falsa, mas executou uma vez
?>
```

### Controle de loop

#### break
Interrompe completamente a execução de um loop.

```php
<?php
    for ($i = 1; $i <= 10; $i++) {
        if ($i == 5) {
            break; // Para o loop quando $i = 5
        }
        echo "$i ";
    }
    // Resultado: 1 2 3 4
?>
```

#### continue
Pula a iteração atual e vai para a próxima.

```php
<?php
    for ($i = 1; $i <= 5; $i++) {
        if ($i == 3) {
            continue; // Pula o número 3
        }
        echo "$i ";
    }
    // Resultado: 1 2 4 5
?>
```

---

## Operadores lógicos 
Os operadores lógicos são interdisciplinares, presentes na filosofia, matemática e programação. Em PHP, eles permitem combinar ou negar condições, retornando valores booleanos (true ou false).

### operador lógico E `(&& ou and)`
Retorna true apenas se ambas as condições forem verdadeiras.

```php
   <?php
      $idade = 25;
      $possuiCarteira = true;
      
      // Usando &&
      if ($idade >= 18 && $possuiCarteira) {
         echo "Pode dirigir";
      } else {
         echo "Não pode dirigir";
      }
      
      // Usando and (menor precedência)
      $resultado = ($idade >= 18 and $possuiCarteira);
      var_dump($resultado); // bool(true)
   ?>
```

### Operador lógico OU `(|| ou or)`
Retorna true se pelo menos uma das condições for verdadeira.

```php
   <?php
      $dinheiro = 50;
      $cartao = true;
      
      // Usando ||
      if ($dinheiro >= 30 || $cartao) {
         echo "Pode comprar o ingresso";
      } else {
         echo "Não pode comprar";
      }
      
      // Usando or (menor precedência)
      $resultado = ($dinheiro >= 30 or $cartao);
      var_dump($resultado); // bool(true)
   ?>
```

### Operador lógico de NEGAÇÃO `(!)`
Inverte o valor lógico de uma expressão. Se for true, vira false; se for false, vira true.

```php
   <?php
      $ativo = false;
      
      if (!$ativo) {
         echo "Usuário inativo"; // Esta mensagem será exibida
      }
      
      $chovendo = true;
      $naoChovendo = !$chovendo; // false
      var_dump($naoChovendo); // bool(false)
   ?>
```

### Inclusão de arquivos
O PHP permite incluir arquivos externos, facilitando a organização do código em módulos reutilizáveis.   

**`include:`** Inclui e avalia o arquivo especificado. Se o arquivo não for encontrado, emite um aviso (warning), mas o script continua executando.

primeiro_arquivo.php:
```php
<?php
    $mensagem = "Olá do primeiro arquivo!";
?>
```

segundo_arquivo.php:
```php
   include 'primeiro_arquivo.php';

    echo $mensagem; // Acessa variável do arquivo incluído
```

**`require:`** Semelhante ao include, mas se o arquivo não for encontrado, emite um erro fatal (fatal error) e interrompe o script.

config.php:
```php
<?php
    // Arquivo de configuração essencial
    $banco = "localhost";
    $usuario = "root";
    $senha = "";
?>
```

index.php
```php
<?php
    require 'config.php'; // Se este arquivo não existir, o script para
    
    echo "Conectando ao banco $banco...";
?>
```

*Como o require necessita que o arquivo exista, geralmente é usado para arquivos essenciais, como configurações de banco de dados ou funções críticas.*

### include_once e require_once
Garantem que o arquivo seja incluído apenas uma única vez, evitando redeclaração de funções ou variáveis.

```php
<?php
    // Mesmo que chamado múltiplas vezes, inclui apenas uma
    include_once 'config.php';
    include_once 'config.php'; // Ignorado na segunda vez
    
    require_once 'funcoes.php';
    require_once 'funcoes.php'; // Ignorado
?>
```

## Criando funções
Funções são blocos de código reutilizáveis que executam tarefas específicas. Elas ajudam a organizar o código, evitar repetição e facilitar a manutenção.

Estrutura básica de uma função:
```php
<?php
    function nomeDaFuncao() {
        // Código a ser executado
        return "Resultado da função";
    }
    
    // Chamando a função
    echo nomeDaFuncao();
?>
```

- *`function:` Palavra-chave para declarar uma função*

- *`nomeDaFuncao: Identificador da função (seguir convenção camelCase)`*

- *`(): Parênteses para parâmetros (podem ser vazios)`*

- *`{}: Chaves delimitam o bloco de código`*

- *`return: Retorna um valor (opcional)`*

### Funções padrão do PHP
O PHP possui centenas de funções nativas para diversas finalidades:

```php
<?php
    // Funções de data
    echo date('d/m/Y H:i:s'); // Data e hora atual
    
    // Funções de string
    echo strtoupper("php"); // "PHP"
    echo strlen("Olá mundo"); // 9
    
    // Funções de array
    $numeros = [5, 2, 8, 1];
    sort($numeros); // Ordena o array
    print_r($numeros);
?>
```

### Projeto prático: organizando código com funções
Vamos criar um pequeno projeto com arquivos separados para demonstrar o uso de funções e inclusão de arquivos.

config.php (Configurações gerais):
```php
<?php
    // Define o fuso horário do projeto
    date_default_timezone_set('America/Sao_Paulo');
    
    // Constantes de configuração
    const SITE_NOME = "Meu Site em PHP";
    const VERSAO = "1.0.0";
?>
```
*Nesse exempplo acima usamos essa função para definir o fuso horario que o projeto terá*

helpers.php (Funções auxiliares):
```php
<?php
    function saudacao() {
        $hora = date('H');
        
        if ($hora >= 5 && $hora < 12) {
            return "Bom dia!";
        } elseif ($hora >= 12 && $hora < 18) {
            return "Boa tarde!";
        } else {
            return "Boa noite!";
        }
    }
    
    function formatarData($data) {
        return date('d/m/Y', strtotime($data));
    }
?>
```

index.php (Arquivo principal):
```php
<?php
    require_once 'config.php';
    require_once 'helpers.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?= SITE_NOME ?></title>
</head>
<body>
    <h1><?= SITE_NOME ?></h1>
    <h2><?= saudacao() ?></h2>
    <p>Versão: <?= VERSAO ?></p>
    <p>Hoje é <?= formatarData(date('Y-m-d')) ?></p>
</body>
</html>
```
*O arquivo index é onde os dois arquivos anteriores são chamados*

### Argumentos e parametros
Funções podem receber valores externos através de parâmetros (também chamados de argumentos).

Parâmetro único:
```php
<?php
    function dobro($numero) {
        return $numero * 2;
    }
    
    // Chamando com valor direto
    echo dobro(5); // 10
    
    // Chamando com variável
    $valor = 7;
    echo dobro($valor); // 14
?>
```

Múltiplos parâmetros:
```php
<?php
    function somar($a, $b, $c) {
        return $a + $b + $c;
    }
    
    echo somar(5, 3, 2); // 10
?>
```

Parâmetros com valor padrão (opcionais):
```php
<?php
    function apresentar($nome, $idade = "não informada", $cidade = "São Paulo") {
        return "Olá, $nome! Idade: $idade, Cidade: $cidade";
    }
    
    echo apresentar("João", 25, "Rio"); // Informa todos
    echo "<br>";
    echo apresentar("Maria", 30); // Usa cidade padrão
    echo "<br>";
    echo apresentar("Pedro"); // Usa idade e cidade padrão
?>
```
*Observação: Parâmetros com valor padrão devem vir após os parâmetros obrigatórios.*

## funções aritmeticas
Anteriormente vimos operadores aritméticos básicos. Porém, para operações mais complexas, o PHP oferece funções matemáticas específicas.

### Valor absoluto (`abs()`)
Retorna o valor absoluto (módulo) de um número.

ex:
```php
   $resultado = abs(-64);
   echo "O módulo de -64 é $resultado"; // 64
```

### Conversão de bases (`base_convert()`)
Converte números entre diferentes bases numéricas (binária, octal, decimal, hexadecimal).

ex:
```php
<?php
    // Converter 648 (base 10) para hexadecimal (base 16)
    $resultado = base_convert(648, 10, 16);
    echo "648 em hexadecimal é $resultado"; // 288
    
    // Converter binário para decimal
    echo base_convert("1010", 2, 10); // 10
?>
```

### Arredondamentos 
As vezes é preciso arredondar valores tanto para cima quanto para baixo.

#### Arredondar para cima (`ceil()`)

ex:
```php
<?php
    $numero = 15.6;
    $resultado = ceil($numero);
    echo "$numero arredondado para cima é $resultado"; // 16
    
    $numero2 = 15.1;
    echo ceil($numero2); // 16 (sempre para cima)
?>
```

#### Arredondar para baixo (`floor()`)

ex:
```php
<?php
    $numero = 15.6;
    $resultado = floor($numero);
    echo "$numero arredondado para baixo é $resultado"; // 15
    
    $numero2 = 15.9;
    echo floor($numero2); // 15 (sempre para baixo)
?>
```

#### Arredondamento aritmético (`round()`)

ex:
```php
<?php
    $numero = 15.6;
    $resultado = round($numero);
    echo "Arredondamento aritmético de $numero é $resultado"; // 16
    
    echo round(15.4); // 15
    echo round(15.5); // 16
    echo round(15.678, 2); // 15.68 (2 casas decimais)
?>
```

### Funções geométricas

#### calcular a hipotenusa 
Para calcular a hipotenusa de um triângulo retângulo use usa a função `hypot()`.

ex:
```php
<?php
    $cateto1 = 3;
    $cateto2 = 4;
    $resultado = hypot($cateto1, $cateto2);
    echo "Hipotenusa do triângulo 3x4 é $resultado"; // 5
?>
```

#### calcular o Seno
é usada a função `sin()`.

ex:
```php
<?php
    $angulo = 30; // em graus
    $radianos = deg2rad($angulo); // Converte para radianos
    $resultado = sin($radianos);
    echo "Seno de $angulo° é " . round($resultado, 2); // 0.5
?>
```

#### calcular o cosseno
é usada a função `cos()`.

ex:
```php
<?php
    $angulo = 60;
    $resultado = cos(deg2rad($angulo));
    echo "Cosseno de $angulo° é " . round($resultado, 2); // 0.5
?>
```

#### calcular a tangente
é usada a função `tan()`.

ex:
```php
<?php
    $angulo = 45;
    $resultado = tan(deg2rad($angulo));
    echo "Tangente de $angulo° é " . round($resultado, 2); // 1
?>
```

#### Converter de graus para radianos

ex:
```php
<?php
    // Graus para radianos
    $graus = 180;
    $radianos = deg2rad($graus);
    echo "$graus° = $radianos radianos<br>"; // π radianos (3.1415...)
    
    // Radianos para graus
    $radianos = M_PI; // Constante pi
    $graus = rad2deg($radianos);
    echo "$radianos rad = $graus°"; // 180°
?>
```

### Divisão inteira (`intdiv()`)
Retorna apenas a parte inteira da divisão.

ex:
```php
<?php
    $resultado = intdiv(10, 3); // 3 (ignora o resto)
    echo "10 dividido por 3 (parte inteira): $resultado";
    
    // Comparação com divisão normal
    echo "<br>Divisão normal: " . (10 / 3); // 3.3333...
?>
```

### Minimos e máximos

#### Valor mínimo 
é usada a função `min()`

ex:
```php
<?php
    $resultado = min(10, 7, 25, 3, 18);
    echo "O menor número é $resultado"; // 3
    
    // Com array
    $numeros = [10, 7, 80, 45, 100];
    echo "Menor do array: " . min($numeros); // 7
?>
```

#### Valor máximo
É usada a função `max();`

ex:
```php
<?php
    $resultado = max(10, 7, 25, 3, 18);
    echo "O maior número é $resultado"; // 25
    
    // Com array
    $numeros = [10, 7, 80, 45, 100];
    echo "Maior do array: " . max($numeros); // 100
?>
```

### valor de pi 
função `pi()`

ex:
```php
   $resultado = pi();
   echo"O valor de \u{03C0} é $resultado"; // 3.1415926535898
```
*Além de usar função é possível obter o valor de pi através de uma constante*

ex:
```php
   echo"O valor de \u{03C0} é " . M_PI; // mesmo valor
```

### Potência (`pow()`)
Antigamente não dava pra fazer potência com **, só a partir do php 5.6 que foi possível, então era usado a função pow(), hoje em dia dá pra usar os dois jeitos, porém a ordem de precedência é perdida com a função o que se resolve usando os parenteses.

ex:
```php
   $numero = 5;
   $resultado = pow($numero, 2); // 5²
   echo $numero ."² é $resultado"; //25
```

# Raiz quadrada e outras raízes 

Para raiz quadrada se usa `sqrt()`:
```php
<?php
    $numero = 81;
    $resultado = sqrt($numero);
    echo "A raiz quadrada de $numero é $resultado"; // 9
?>
```

Para raiz cubica e outras raizes usa-se a potência:
```php
<?php
    $numero = 27;
    $raizCubica = $numero ** (1/3);
    echo "A raiz cúbica de $numero é $raizCubica<br>"; // 3
    
    $numero = 16;
    $raizQuarta = $numero ** (1/4);
    echo "A raiz quarta de $numero é $raizQuarta"; // 2
?>
```

## Obtendo dados de formulários
Um formulário HTML permite que o usuário final envie dados para o servidor. O formulário precisa ter:

- *`method:` Método de envio (GET ou POST)*

- *`action:` Caminho do arquivo que processará os dados*

- *`name:` Nome do campo (identifica a variável no PHP)*

- *`value:` Valor do campo (pode ser predefinido ou digitado pelo usuário)*

### Métodos de envio
- *`GET: Dados são enviados pela URL (visíveis). Ideal para buscas e navegação.

- *`POST: Dados são enviados no corpo da requisição (ocultos). Ideal para formulários com dados sensíveis.

- *`REQUEST: Junção de GET, POST e COOKIES.

### Superglobais
O PHP disponibiliza arrays especiais para acessar dados de formulários:

- *`$_GET: Dados enviados via método GET

- *`$_POST: Dados enviados via método POST

- *`$_REQUEST: Dados de GET, POST e COOKIES combinados

### Exemplo prático: formulário de apresentação

formulario.html (ou .php):
```html
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário de apresentação</title>
</head>
<body>
    <header>
        <h1>Apresente-se</h1>
    </header>
    
    <section>
        <form action="processa.php" method="GET">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" required>
            <br><br>
            
            <label for="sobrenome">Sobrenome: </label>
            <input type="text" name="sobrenome" id="sobrenome" required>
            <br><br>
            
            <input type="submit" value="Enviar">
        </form>
    </section>
</body>
</html>
```

   
<body>    
    <section>
        <h2>Visualização do formulário</h2>
        <p>O formulário acima aparecerá para o usuário assim:</p>
        
        <!-- Simulação visual do formulário -->
        <div style="border: 1px solid #ccc; padding: 20px; max-width: 400px;">
            <form>
                <label for="exemplo">Nome: </label>
                <input type="text" id="exemplo" value="João" disabled>
                <br><br>
                
                <label for="exemplo2">Sobrenome: </label>
                <input type="text" id="exemplo2" value="Silva" disabled>
                <br><br>
                
                <input type="submit" value="Enviar" disabled>
            </form>
            <p style="color: #666; font-size: 0.9em;">*Campos preenchidos apenas para ilustração</p>
        </div>
    </section>
</body>


processa.php (processamento):
```html
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    
    <main>
        <?php
            // $_REQUEST é a junção das superglobais $_GET, $_POST e $_COOKIES
            // Usando operador de coalescência nula (??) para valores padrão
            $nome = $_GET["nome"] ?? "não informado";
            $sobrenome = $_GET["sobrenome"] ?? "não informado";
            
            echo "<p>É um prazer te conhecer, <strong>$nome $sobrenome</strong>! Bem-vindo ao meu site.</p>";
        ?>
        
        <p><a href="javascript:history.go(-1)">← Voltar para o formulário</a></p>
        
        <hr>
        
        <h3>Debug (para desenvolvimento):</h3>
        <pre>
<?php
    // Mostra todos os dados recebidos (útil para desenvolvimento)
    var_dump($_GET);
?>
        </pre>
    </main>
</body>
</html>
```

Abaixo como o formulário deve aparece para os usuários:
<form>
    <label for="exemplo_nome">Nome: </label>
    <input type="text" id="exemplo_nome" placeholder="Digite seu nome">
    <br><br>
    <label for="exemplo_sobrenome">Sobrenome: </label>
    <input type="text" id="exemplo_sobrenome" placeholder="Digite seu sobrenome">
    <br><br>
    <input type="submit" value="Enviar">
</form>



