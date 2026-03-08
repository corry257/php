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

## Estrutura básica de um arquivo PHP

Um arquivo PHP geralmente contém uma mistura de HTML e código PHP. O PHP é processado no servidor e o resultado (geralmente HTML puro) é enviado ao navegador. Por isso, a estrutura básica de um arquivo PHP começa com a estrutura HTML padrão.

### Estrutura HTML

Todo documento HTML deve ter a declaração `<!DOCTYPE html>` e a tag `<html>` como elemento raiz. Dentro dela, temos duas seções principais: `<head>` e `<body>`.

- `<!DOCTYPE html>`: Indica ao navegador que o documento é HTML5.
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
## Obtendo dados de formulários
Um formulário é usado para o usuario final digitar os dados de uma variavel, este formulário precisa ter o method que é o método de envio do furmulario e a action que é a localização para onde os dados serão enviados alémdisso não pode faltar o name que é o nome do elemento e o value que é o valor que a variavel receberá 

```html
fazer um formulário que funcione com nome e sobrenome  que ao digitar o nome e o sobrenome responda Olá $nome $sobrenome
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header>
            <h1>Apresente-se</h1>
        </header>
        <section>
            <form action="cad.php" method="get">
                <label for="nome">Nome </label>
                <input type="text" name="nome" id="idnome">
                <label for="sobrenome">Sobrenome </label>
                <input type="text" name="sobrenome" id="idsobrenome">
                <input type="submit" value="Enviar">
            </form>
        </section>
    </body>
```

