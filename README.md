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

---

## Principais versões do PHP

| Versão | Data de lançamento | Destaques |
|--------|-------------------|-----------|
| **PHP 1.0** | 1995 | PHP Tools, contador de visitantes, interpretador de formulários |
| **PHP 2.0** | 1996 | PHP/FI, suporte a bancos de dados, cookies e funções |
| **PHP 3.0** | 1998 | Primeira versão com nome atual, código reescrito |
| **PHP 4.0** | 2000 | Zend Engine 1.0, maior desempenho |
| **PHP 5.0** | 2004 | Zend Engine 2.0, suporte a POO, PDO |
| **PHP 7.0** | 2015 | Desempenho significativamente melhorado, tipagem escalar |
| **PHP 8.0** | 2020 | JIT compilation, atributos, match expression |

---

## Curiosidades
- O PHP é usado por aproximadamente **80% dos sites** que utilizam uma linguagem server-side.
- Grandes plataformas como **Facebook, Wikipedia e WordPress** utilizam PHP.
- O mascote do PHP é um elefante azul chamado **ElePHPant**.
- A versão 6.0 nunca foi lançada devido a problemas com suporte a Unicode.