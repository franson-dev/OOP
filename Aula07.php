j<?php

// Incluindo o arquivo "Aula05.php", que contém a definição da classe Circle
include_once("Aula05.php");

// Definindo uma nova classe chamada CirFilho que herda da classe Circle
class CirFilho extends Circle {

    // Propriedade protegida para armazenar o raio do círculo
    protected $radius = 5;

    // Construtor da classe (atualmente vazio)
    function __construct() {
        // Note que não é necessário passar um valor inicial para o raio devido à inicialização direta acima
    }

    // Método para calcular a circunferência sobrescrevendo o método da classe pai
    function getCircumference() {
        // Fórmula para calcular a circunferência do círculo (2πr)
        return 2 * pi() * $this->radius;
    }
}

// Criando uma nova instância da classe CirFilho
$circle = new CirFilho();


// Exibindo o valor da circunferência do círculo chamando o método getCircumference()
echo "perimetro {$circle->getCircumference()}\n";
echo $circle->getArea();
