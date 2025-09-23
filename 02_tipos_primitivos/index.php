<?php
	#Tipos primitivos escalares
	
	//String:
	$sobrenome = "Neves";
	/*Sequencia de letras, números e simbolos, sempre representadas entre aspas.*/
	
	//int ou integer: 
	$idade = 30;
	/*Um valor numérico inteiro, aquele que vem sem a parte decimal.*/
	
	//Float, Double ou Real:
	$peso = 85.9;
	/* Um valor numérico real, que vem com a parte decimal, depois do ponto flutuante.*/
	
	//bool ou boolean: 
	$casado = true;
	/*Um valor lógico ou booleano, que aceita apenas os valores verdadeiro ou falso.*/
	
	#Tipos primitivos compostos: 
	
	//Array:
	$vet = [6, 2.5, "Maria", false];
	/* */
	
	//Object:
	class Pessoa {
		private string $nome;
	}
	
	$p = new Pessoa; 
	
	/*
	 Tipos primitivos especiais:
	- null
	- resource
	- callabe
	- mixed
	*/
	
	#Teste de tipos primitivos 
	$v= "Alan";
	var_dump($v);//Imprime o tipo de variável
	echo "<br>";
	/*
	essa função anterior deve imprimir: 
		string(4) "Alan"
	*/
	
	// Pode-se imprimir mais de uma variavel ao mesmo tempo:
	var_dump($sobrenome, $idade, $peso, $casado);  
	echo "<br>";
	/* 
	essa função anterior deve imprimir: 
		string(5) "Neves"
		int(30)
		float(85.9)
		bool(true)
	*/

	var_dump($vet);
	echo "<br>";
	/* 
	essa função anterior deve imprimir: 	
		array(4) {
		  [0]=>
		  int(6)
		  [1]=>
		  float(2.5)
		  [2]=>
		  string(5) "Maria"
		  [3]=>
		  bool(false)
		}
	*/
	
	var_dump($p);
	/*
	Essa função anterior deve imprimir: 
		object(Pessoa)#1 (0) {
		  ["nome":"Pessoa":private]=>
		  uninitialized(string)
		}
	*/
	
	// !estudar bases numéricas!
	//0x = hexadecimal, 0b = binário, 0 = octal 
	
	