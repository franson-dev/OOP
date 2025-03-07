<?php

    /* Escreve uma classe PHP 'Rectangle' que tenha propriedades de comprimento e largura.
       Implementa métodos para calcular a área e o perímetro do retângulo. */

    // Definindo a classe 'Retangulo' com propriedades e métodos necessários
    class Retangulo {

        // Propriedades protegidas para altura e largura do retângulo
        protected $altura;
        protected $largura;

        // Método construtor para inicializar altura e largura
        function __construct($altura, $largura) {
            $this->altura = $altura;   // Define o valor da altura
            $this->largura = $largura; // Define o valor da largura
        }

        // Método mágico para atribuir valores às propriedades de forma dinâmica
        function __set($name, $value) {
            $this->$name = $value;    // Atribui o valor fornecido à propriedade especificada
        }

        // Método mágico para acessar os valores das propriedades
        function __get($name) {
            return $this->$name;      // Retorna o valor da propriedade especificada
        }

        // Método para calcular a área do retângulo (altura x largura)
        public function getArea() {
            return $this->altura * $this->largura;
        }

        // Método para calcular o perímetro do retângulo (2 x (altura + largura))
        public function getPerimeter() {
            return 2 * ($this->altura + $this->largura);
        }
    }

    // Definindo a classe 'Ret', que herda da classe 'Retangulo'
    class Ret extends Retangulo {

        // Método construtor da classe filha, pode ser personalizado
        function __construct() {

        }

        // Método para calcular o custo baseado na área do retângulo
        function CalcularCusto($valor) {
           return $valor * parent::getArea(); // Usa o método getArea() da classe pai
        }
    }

    // Criando um objeto da classe 'Retangulo' e inicializando com altura 10 e largura 5
    $retangulo01 = new Retangulo(10, 5);
    //$retangulo01-> altura = 5; // Exemplo de como atribuir valores usando __set()
    //$retangulo01-> largura = 2; // Exemplo de como atribuir valores usando __set()

    // Exibindo as propriedades e os cálculos do retângulo
    echo ("Altura: {$retangulo01->altura}\n");  // Exibe a altura
    echo ("Largura: {$retangulo01->largura}\n"); // Exibe a largura
    echo ("Area: {$retangulo01->getArea()}\n");  // Exibe a área
    echo ("Perimetro: {$retangulo01->getPerimeter()}"); // Exibe o perímetro

    // Criando um objeto da classe 'Ret', que herda de 'Retangulo'
    $retangulo02 = new Ret();
    $retangulo02->altura = 50; // Atribui valor à altura utilizando __set()
