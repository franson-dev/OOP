<?php

// Inclui o arquivo "Aula08.php", que provavelmente contém a definição da classe base "Shape"
include("Aula08.php");

// Define a classe "Rectangle", que herda da classe "Shape"
class Rectangle extends Shape {

    // Método para calcular a área do retângulo
    function getCalArea (){
        // A fórmula utilizada para calcular a área é: base * altura
        return $this -> base * $this -> altura;
    }

}

// Cria uma nova instância da classe "Rectangle"
$objRect = new Rectangle();

// Define o valor da base do retângulo
$objRect -> base = 2;

// Define o valor da altura do retângulo
$objRect -> altura = 2;

// Exibe o resultado do cálculo da área do retângulo chamando o método "getCalArea"
echo $objRect -> getCalArea();
