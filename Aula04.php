<?php

    /*Escreva uma classe PHP 'Rectangle' que tenha propriedades de comprimento e largura. 
    Implemente métodos para calcular a área e o perímetro do retângulo.*/    

    class Retangulo{

        protected $altura;
        protected $largura;

        function __construct($altura, $largura){
            $this->altura = $altura;
            $this->largura = $largura;
        }

        // Como Atribuir valores?
        function __set($name, $value){
            $this->$name = $value;
        }

        function __get($name){
            return $this->$name;
        }

        public function getArea(){
            return $this->altura * $this->largura;
        }

        public function getPerimeter(){
            return 2 * ($this->altura + $this->largura);
        }
    }

    // herança 
    class Ret extends Retangulo {
        function __construct() {

        }
        function CalcularCusto($valor){
           return $valor * parent::getArea();
        }
    }

    //Objeto
    $retangulo01 = new Retangulo(10, 5);
    //$retangulo01-> altura = 5;
    //$retangulo01-> largura = 2;
    echo ("Altura: {$retangulo01->altura}\n");
    echo ("Largura: {$retangulo01->largura}\n");
    echo ("Area: {$retangulo01->getArea()}\n");
    echo ("Perimetro: {$retangulo01->getPerimeter()}");

    $retangulo02 = new Ret();
    $retangulo02->altura = 50;
