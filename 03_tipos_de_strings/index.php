<?php

# strings em PHP 

/*
Quatro formatos de String:
double_quoted, single quoted, Heredoc e Nowdoc
*/

//double quoted 
$a = "Curso"; 

// Existe interpretação do conteúdo 
$double_quoted = "PHP\u{1f418}";

// single quoted 
$b = 'PHP';

//Não há interpretação do conteúdo 
$single_quoted = 'php\u{1f418}'; 

//ex:
echo "$double_quoted<br>";

echo "$single_quoted<br>";

// Concatenation operator 
echo "$a " . "$b" . "<br>";// o ponto é o que liga as duas strings 

//interpretação de constantes 
const ESTADO = "SP";
echo "Moro em ESTADO<br>"; //a interpretação do conteúdo em constantes não funciona

//usa-se concatenação:
echo "Moro em " . ESTADO . "<br>";

echo "Hoje é dia " . date('d/m/Y') . "<br>";

//Mostrando aspas no meio da string 
$nome = "Anderson";
$sobrenome = "Silva";

echo "$nome \"The Spider\" $sobrenome<br>"; // Sequencia de escape 

/*
Sequencias de escape para aspas duplas:
	\n => nova linha
	\t => Tabulação horizonal 
	\\ => Barra invertida
	\$ => Sinal de cifrão
	\u{} => Codepoint Unicode
*/

//Mais exemplos
$nome = "Alan";
$sobrenome = "Neves";
$apelido = "Padawan";
echo "$nome \"$apelido\" $sobrenome<br>";

//Sintaxe Heredoc 
$curso = "PHP";
$ano = date('Y');

echo <<< FRASE
	
Estou estudando 
$curso em $ano \u{1F604}

FRASE;

//Sintaxe Nowdoc
$curso = "PHP";
$ano = date('Y');

echo <<< 'FRASE'
	
Estou estudando 
$curso em $ano \u{1F604}
FRASE;