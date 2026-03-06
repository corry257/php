
# PHP

## Evolução da linguagem php 

Tudo começou em 1994 com Rasmus Lerdorf no Canadá um estudante de ciencia da computação, era uma pessoa ativa na comunidade apache e mysql era muito experiente em linguagem 'c' ele queria um contador de visitante, algo comum hoje em dia mas que não era trivial na epoca, então ele fez a ferramenta personal home page (PHP) sem a intenção de criar uma linguagem e sim uma ferramenta que foi evoluindo até se tornar o php que conhecemos hoje em dia .

### php 1.0
em 1995 Rasmus empacotou tudo e lançou oficialmente o php tools, além do contador de usuarios também um interpretador de formularios assim o php tools passou a se chamar Form Interpreter e depois de um mês voltou pra sigla original personal homepage constructor kit, os comandos eram os mesmos de c e de perl. o php 1.0 não podia ser chamado de linguagem de programação ainda.


### php 2.0
Em 1996 foi lançado então a versão 2.0 batisada de php/fi personal homepage with form interpreter nessa versão já começou a ter caracteristicas de linguagem, tinha suporte a banco de dados bbm, postgre, mysql, suporte a cookies e a funções com usuarios. Nessa época o php já era usado em cerca de 15.000 sites  e Rasmus era o principal desenvolvedor, percebendo que não conseguiria manter a desenvolvimento sozinho então ele abriu o código e registrou o php como software livre assim como linux,, libre office, gimp, python, git, entre outros. o php cresceu tanto em 1997 já era usado em 50.000 sites.

Em Israel em 1997 surgiu então uma das maiores contribuições para o php na Israel Institute of technology, fica em raifa no norte do país onde dois estudantes da universidade Andi Gutmans e Zeev Suraski tavam desenvolvendo um software de loja e tiveram contato com o php, viram o potencial da ferramenta mas não atendia tudo que eles precisavam, então eles conversaram com o Rasmus e nesse momento se tornaram grande colaboradores do projeto reescrevendo o código para lançarem a próxima versão do php.


### php 3.0
Lançado em 1998 com o código todo reescrito por Andi e Zeev o nome personal home page já não cabia mais para o projeto mas a sigla já era muito forte para deixar de ser usada então trocaram o nome mas não a sigla tornando-se PHP: hypertext preprocessor.

ainda em 1998 dois artistas foram muito importante para a linguagem sendo responsaveis pela cara do projeto são Colin Viebrock e Vicent Pontier, Colin foi responsavel pelo desenho da logo do php (imagem-1) e Vicent criou o mascote do php o simpatico elefante (imagem-2).

![alt text](imagem-1_pequena.png) ![alt text](imagem-2_pequena.png)

### Criação da Zend
Em 1999 zeev e Andi criaram uma empresa que até hoje é uma grande dezenvolvedora da linguagem php, o nome da empresa é a junção dos nomes dos dois, *ZE*ev + A*ND*i = *ZEND* toda a infraestrutura basica é construida por eles e foi denomina zend engin. 

A partir desse momento o php cresceu muito com o lançamento do php 4.0 e as demais versões como 5.0, 7.0 e 8.0. Rasmus acabou saindo do desenvolvimento do php e se tornou funcionário do Yahoo em 2009

*A versão 6.0 nunca foi lançada 

### Histórico do PHP 
- Lançamento: 1994.
- Lançamento do PHP Tools a versão 1.0: 1995.
- Lançamento do PHP/FI a versão 2.0: 1996
- Abertura do código: 1996.
- Andi Gutmans e Zeev Suraski começam a colaborar: 1997.
- Lançamento da versão 4.0 com o nome de PHP: Hypertext preprocessor: 1998.
- Criação da logo e do mascote por Colin Viebrock e Vicent Pontier: 1998.
- Criação da Zend por Zeev e Andi: 1999
- Lançamento do PHP 5.0: 2004.
- Lançamento do PHP 7.0: 2015.
- Lançamento do PHP 8.0: 2020.
  
Mais informações podem ser encontradas em: [https://www.php.net/manual/pt_BR/history.php.php](https://www.php.net/manual/pt_BR/history.php.php)

---

## Como funciona o PHP? 

O php se utiliza de tecnologias como HTML, CSS e JavaScript que são tecnologias feitas para funcionarem do lado do cliente ou seja do seu próprio computador já o PHP usa uma tecnologia feita para funcionar no lado do servidor.

### Client-side 
na tecnologia client-side o computador faz a requisição ao servidor e o servidor manda os arquivos pare serem processador no pc do cliente.

montar um diagrama mostrando como funcionar client-side
cliente -> nuvem -> servidor
         request ->
        <- response
cliente processando <- nuvem <- servidor

### server-side 
na tecnologia server-side o cliente faz a requisição ao servidor que processa os arquivos e manda tudo já processado.

montar um diagrama mostrando como funciona o server-side
cliente -> nuvem -> servidor processando
         request ->
        <- response
cliente <- nuvem <- servidor

### Front-end e back-end
Os desenvolvedores chamados de front-end são os desenvolvedores que estão preocupados em soluções de problemas do lado do cliente, ou seja do client-side já os desenvolvedores back-end são pessoas que solucionam problemas e programam do lado do servidor que não vão entrar em contato direto com o usuario final. Além desses dois ultimo existe também o chamado fullstak que possui soluções tanto do lado do cliente como do servidor.