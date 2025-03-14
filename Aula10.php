<?php

// Inclui o arquivo "Aula08.php", que provavelmente contém a definição da classe base "Shape"
include("Aula08.php");

// Define a classe "Triangle", que herda da classe "Shape"
class Triangle extends Shape {

    // Construtor da classe "Triangle" que inicializa as propriedades "base" e "altura"
    function __construct($b, $a) {
        // Atribui o valor do parâmetro $b à propriedade "base"
        $this -> base = $b;
        // Atribui o valor do parâmetro $a à propriedade "altura"
        $this -> altura = $a;
    }

    // Função para calcular a área do triângulo
    function getCalArea (){
        // Calcula a área usando a fórmula: 0.5 * (base * altura)
        return 0.5 * ($this -> base * $this -> altura);
    }
}

// Cria uma nova instância da classe "Triangle", passando os valores da base e altura como parâmetros
$objTri = new Triangle(2, 2);

// Exibe o resultado do cálculo da área do triângulo chamando o método "getCalArea"
echo $objTri -> getCalArea();
