<?php
	//Introdução A PHP 
	
	//Variaveis e constantes: 
	$nome = "Alan";
	$sobrenome = "Neves";
	const PAIS = "Brasil";
	
	//Exercício:
	$idade = 30;
	$peso = 100.5;
	$casado = false;
	
	const CURSO = "TI";
	
	echo "Muito prazer, meu nome é $nome $sobrenome e moro no " . PAIS . "<br>"; 

	echo "Tenho $idade anos, peso $peso kg <br>";
	
	echo "Estou fazendo o curso de " . CURSO . " e ";
	
	if ($casado == true) {
		echo "Sou casado";
	}
	else {
		echo "não sou casado";
	}
	
	/*
	Esse exercicio acima deve imprimir:
		"Muito prazer, meu nome é Alan Neves e moro no Brasil
		Tenho 30 anos, peso 100.5 kg 
		Estou fazendo o curso de TI e não sou casado"
	*/
	
	//Para nomear métodos e atributos:
	$camelCase = "Camel Case";
	
	//Para nomear constantes:
	$snake_case = "Snake Case";
  