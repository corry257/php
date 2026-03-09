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

   continuação...